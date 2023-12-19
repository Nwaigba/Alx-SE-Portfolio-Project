<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Accounts</title>
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

<div class="container">
  <main>






     <div class="card">
      <div class="card__body">
        <h2>Manage Your account</h2>
        <p class="account-board">
        	<a href="?page=profile">Profile</a>
        	<a href="?page=products">products</a>
        	<a href="?page=category">Category</a>
        	<a href="?page=brands">Brands</a>

        </p>
      </div>
      <div class="card__footer">
        
        <div class="col-12">
       <?php 
       if(isset($_GET['page'])){
        $pagename = $_GET['page'];

        if($pagename == "profile"){
        	include("pages/profile.php");
        }else if($pagename == "products"){
        	include("pages/add-products.php");
        }else if($pagename == "category"){
        	include("pages/category.php");
        }else if($pagename == "brands"){
        	include("pages/brands.php");
        }else if($pagename == "password-change"){
        	include("pages/change-password.php");
        }


         
       }else{
       include("pages/profile.php");
       }

       ?>
        </div>
      </div>

    </div>
  </main>
</div>
<script src="js/script.js"></script>
</body>
</html>