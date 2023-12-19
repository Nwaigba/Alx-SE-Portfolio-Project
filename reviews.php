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

<div class="container">
  <main>



    <div class="card" style="background-color:white;">
      <div class="card__body">
        <h3>Product Name</h3><br>
          <img src="img/product_one.jpg" style="width:100px;" />
      </div>
    </div>




    <div class="card">
      <div class="card__body">
    
      </div>
      <div class="card__footer">
        
        <div class="col-12">
          <div class="comment-image">
            <img src="img/comments.png" class="round-image">
            12/05/2023
          </div>
          <div class="comment-text">
            <h3>Comenter name <span style="float:right; font-size:12px; color:orange;">Comment email address</span></h3>
            
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
            </p>
          </div>
        </div>
      </div>

    </div>



    <div class="card">
      <div class="card__body">
      </div>
      <div class="card__footer">
        
        <div class="col-12">
          <div class="comment-image">
            <img src="img/comments.png" class="round-image">
            12/05/2023
          </div>
          <div class="comment-text">
            <h3>Comenter name <span style="float:right; font-size:12px; color:orange;">Comment email address</span></h3>
            
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
            </p>
          </div>
        </div>
      </div>

    </div>




     <div class="card">
      <div class="card__body">
        <h2>Drop your comments</h2>
      </div>
      <div class="card__footer">
        
        <div class="col-12">
   <form  action="/action_page.php">
    <div class="container">
      <p>Your privacy is safe with us.</p>
      <hr>
      <label for="email"><b>Name</b></label>
      <input type="text" style="" placeholder="Enter your name" name="email" required>

       <label for="email"><b>Email</b></label>
      <input type="email" style="" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Comments</b></label>
      <textarea style="background-color:#ddd;"></textarea>



   

      <div class="clearfix">
        <button type="button" class="cancelbtn">Comment</button>
      </div>
    </div>
  </form>
        </div>
      </div>

    </div>
  </main>
</div>

<script src="js/script.js"></script>
</body>
</html>