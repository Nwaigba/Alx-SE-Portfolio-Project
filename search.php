<!DOCTYPE html>
<html>
<head>
<title>Searched | My store</title>
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

<div class="mobile-menu" id="mbmen">
   <ul class="mobile-mli">
   	   <li><a href="#">Home</a></li>
				<li> <a href="#">Categories</a> 
                <ul class="category-dropdown">
						<li><a href="#">Fashion</a></li>
						<li><a href="#">Electronics</a></li>
						<li><a href="#">Phones & Laptops</a></li>
					</ul>
				</li>
				<li><a href="#">products</a></li>
				<li><a href="#">Accounts</a>
					<ul class="account-dropdown">
						<li><a href="#">Login</a></li>
						<li><a href="#">Create account</a></li>
						<li><a href="#">Manage account</a></li>
					</ul>
				</li>
   </ul>
   <center>
   	<button style="width:100px;" onclick="closemobile();">Close</button>
   </center>
   
</div>



<div class="search-out">
<div class="container">
<div class="search-box">
	<div class="img-search">
		<img src="img/xsearch.png">
	</div>
	<div class="search-x">
		<h2>Search for anything</h2>
		<form>
			<input type="search" name="" placeholder="Search for products">
			<input type="submit" name="" value="search">
		</form>
	</div>
</div>
</div>
</div>


<div class="container" style="padding-bottom:80px !important; padding-top: 40px;">
	<h4>You searched for  ::</h4>

	<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/px.webp" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
	</div>


<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/pxz.webp" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
</div>




	<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/pxx.jpg" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
	</div>


<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/laptop.jpg" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
</div>



	<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/shirt.jpg" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
	</div>


<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/px.webp" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
</div>


	<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/px.webp" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
	</div>


<div class="col-3 product-card">
		<div class="item-image">
			<a href="products.php"> 
			<img src="img/px.webp" class="product-img">
		</a>
		</div>
		<div class="item-body">
			<h2 class="product-title"><a href="products.php"> Item name</a></h2>
			<h2 class="price">₦‎76000 <span><del>₦‎79000</del></span></h2>
		</div>
</div>





</div>


<script src="js/script.js"></script>
</body>
</html>