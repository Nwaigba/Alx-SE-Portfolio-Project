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


      <?php
      $sms = "";  
        if(isset($_POST['login'])){
          include("data/connect.php");
          $get_email = fix_input($_POST['email']);
          $get_password = fix_input($_POST['password']);

          $email_var = 
          $phone_var =
          $password_var=
          $user_id = "";

          $sql = "SELECT email, phone,password, user_id from users where email =?";
          $use = $connect ->prepare(sql);
          $use -> bind_param("s", $get_email);
          $use -> execute();
          $use -> bind-result ($email, $phone, $password, $user_id);
          while($use -> fetch()){
          $email_var = $email;
          $phone_var = $phone;
          $password_var = $password;
          $user_id_var = $user_id;
          }




        }

    function fix_input($clear_all){
      $clear_all = htmlspecialchars($clear_all);
      $clear_all = stripcslashes ($clear_all);
      $clear_all =  trim($clear_all);
      return $clear_all;
    }
    ?>






  
     <div class="card">
      <div class="card__body">
        <h2>Enter Your login Details</h2>
      </div>
      <div class="card__footer">
        
        <div class="col-12">
   <form  action="" method="POST">
    <div class="container">
      <p>Your privacy is safe with us.</p>
      <hr>
      <label for="email"><b>Username</b></label>
      <input type="text" style="" placeholder="Enter your username" name="username" required>

       <label for="email"><b>password</b></label>
      <input type="password" style="" placeholder="Enter Password" name="password" required>
<center>
    <label for="psw"><b>Forgot password?</b> <strong> <a href="#" style="color:#6d210e;"> Remeber Me</a></strong></label>
   

      	<button type="submit" class="cancelbtn" name ="login">Login</button>
      	<br><hr>
      <label for="psw"><b>Not registered?</b> <strong> <a href="sign-up.php" style="color:#6d210e;">Create new account</a></strong></label>
      </center>
        

 
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