
<?php
if(isset($_POST['add-brand'])){
    include('add-media.php');
    include('connect.php');

    $brand_name = htmlspecialchars(trim(stripcslashes(strip_tags($_POST['brand_name']))));
    $brand_image_location = add_images("brand_image", "../img/brand_img");
    $sql = "INSERT INTO brand(brand_name,brand_image) VALUES (?,?)";
    $t = $connect ->prepare($sql);
    $t ->bind_param("ss",$brand_name,$brand_image_location);
    if($t ->execute()){
        echo "<script>window.location.href='../manage-account.php?page=brands&message=success';</script>";
    }
}
?> 