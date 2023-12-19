<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create account</title>
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
if(isset($_POST['create_account'])){
  include("data/registration.php");
$get_email = fix_input($_POST['email']);
$get_phone = fix_input($_POST['phone']);
$g_password = fix_input($_POST['password']);
$g_cpassword  = fix_input($_POST['cpassword']);

if(empty($get_email)){
  $sms = "Email address is required";
}else if(empty($get_phone)){
  $sms = "Phone number is reqsuired";
}else if(empty($g_password)){
  $sms ="password is required";
}else if($g_password != $g_cpassword){
  $sms = "Password mismatch";
}else{
  $hide_password = password_hash($g_password, PASSWORD_DEFAULT);

$sms = regsiter_new_user($get_email,$get_phone,$hide_password);
}

}




function fix_input($clear_all){
 $clear_all = htmlspecialchars($clear_all);
 $clear_all = stripcslashes($clear_all);
 $clear_all = trim($clear_all);
 return $clear_all;
}
?>


     <div class="card">
      <div class="card__body">
        <h2>Create New Account</h2>
      </div>
      <div class="card__footer">
        
    <div class="col-12">
   <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">
      <p>Your privacy is safe with us. <span style="color:orange; font-size: 18px; font-weight: bold;"><?=$sms?></span></p>
      <hr>
      <label for="email"><b>email</b></label>
      <input type="email" style="" placeholder="Enter your username" name="email" required value="<?php if(isset($_POST['create_account'])){echo $_POST['email'];} ?>">

      <label for="tel"><b>Phone Number</b></label>
       <input type="text" style="" placeholder="Enter your Phone number" name="phone" required value="<?php if(isset($_POST['create_account'])){echo $_POST['phone'];} ?>">

       <label for="email"><b>password</b></label>
      <input type="password" style="" placeholder="Enter Password" name="password" required>


       <label for="email"><b>Comfirm password</b></label>
      <input type="password" style="" placeholder="Enter comnfirm Password" name="cpassword" required>


<center>
    <label for="psw"><b>Already Registered?</b> <strong> <a href="login.php" style="color:#6d210e;"> Login</a></strong></label>
   

      	<button type="submit" class="cancelbtn" name="create_account">Create Account</button></center>
        
 
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
