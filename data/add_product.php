<?php
if(isset($_POST['add_product'])){
    include('add-media.php');
    include('connect.php');

    $product_name = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['product_name']))));
    $product_category = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['product_category']))));
    $product_brand = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['product_brand']))));
    $product_amount = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['product_amount']))));
    $product_discount = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['product_discount']))));
    $product_image_location = add_images("product_image", "../img/product_img");
    $other_image_location = add_images("other_image", "../img/other_image");
    $product_description = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['product_description']))));
    $product_specification = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['product_specification']))));

    $sql = "INSERT INTO addproduct(product_name,product_category,product_brand,product_amount,product_discount,
    product_image,other_images,product_description,product_specification) VALUES (?,?,?,?,?,?,?,?,?)";

    $t = $connect->prepare($sql);
    $t->bind_param("sssssssss",$product_name,$product_category,$product_brand,$product_amount,$product_discount,$product_image_location,$other_image_location,
    $product_description,$product_specification);

    if ($t->execute()){
        echo "<script>window.location.href='../manage-account.php?page=products&message=success';</script>";
    }
}
?>

