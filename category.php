<?php
session_start();
include('data/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products</title>
<link rel="stylesheet" href="css/products.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/comments.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/mobile.css">
</head>
<body>

<?php
  include("imports/header.php");
?>
<?php
$sql_retrive = "SELECT product_id,product_name,product_amount,product_discount,product_image FROM addproduct";
$sql_connect = $connect->prepare($sql_retrive);
$sql_connect->execute();
$sql_connect->bind_result( $product_id,$product_name,$product_amount,$product_discount,$product_image);
while($sql_connect->fetch()):
$excover_photo = str_replace("../","","$product_image")
?>
	<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="<?=$excover_photo?>" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"><?=$product_name?></a></h2>
			<h2 class="price">₦<?=$product_discount?> <span><del>₦<?=$product_amount?></del></span></h2>
		</div>
	</div>

<?php
endwhile;
?>

</div>
<script src="js/script.js"></script>
</body>
</html>