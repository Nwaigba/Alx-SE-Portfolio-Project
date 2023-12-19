p<?php
$product = "CREATE TABLE IF NOT EXISTS products(
	product_name varchar(250),
	product_category varchar(100) NOT NULL,
	product_brand varchar(200) NOT NULL,
	product_amount varchar(50) NOT NULL,
	product_discount_amount varchar(250) NOT NULL,
	product_cover_image varchar(200) NOT NULL,
	other_product_images varchar(200) NOT NULL,
	product_description text(300) NOT NULL,
	product_specification text(250) NOT NULL,
	PRIMARY KEY(user_id))";
create_table($product);

$_get_product_name = $_POST['PRODUCT_NAME'];
$_get_product_category = $_POST['PRODUCT_CATEGORY'];
$_get_product_brand = $_POST['PRODUCT_BRAND'];
$_get_product_amount = $_POST['PRODUCT_AMOUNT'];
$_get_product_discount_amount = $_POST['PRODUCT_DISCOUNT_AMOUNT'];
$_get_product_cover_image = $_POST['PRODUCT_COVER_IMAGE'];
$_other_product_image = $_POST['OTHER_PRODUCT_IMAGE'];
$_get_product_description = $_POST['PRODUCT_DESCRIPTION'];
$_get_product_specification = $_POST['PRODUCT_SPECIFICATION']

$sql_query = "INSERT INTO products(product_name,product_category,product_brand,
product_amount,product_discount_amount,product_cover_image,other_product_image,product_description,
product_specification) VALUES (?,?,?,?,?,?,?,?,?)";
$i  = $product->prepare($sql_query);
$i->bind_param("sssssssss",$product_name,$product_category,$product_brand,$product_amount,$product_discount_amount,
$product_cover_image,$other_product_image,$product_description,$product_specification);


if($i->execute()){
	$notice = "Product updated successfully";
}else{
	$notice = "Product Update failed";
}
}

return $notice;
}


?>