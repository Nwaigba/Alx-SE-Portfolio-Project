<?php
if(isset($_POST['add-category'])){
    include('add-media.php');
    include('connect.php');

    $brand_name = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['category_name']))));
    $category_image_location = add_images("category_image", "../img/category-images");
    $sql = "INSERT INTO category(category_name,category_image) VALUES (?,?)";
    $t = $connect ->prepare($sql);
    $t ->bind_param("ss",$brand_name,$category_image_location);
    if($t ->execute()){
        echo "<script>window.location.href='../manage-account.php?page=category&message=success';</script>";
    }
}
?> 