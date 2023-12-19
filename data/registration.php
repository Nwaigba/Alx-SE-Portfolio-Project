<?php 



function regsiter_new_user($email,$phone,$mpassword){
$notice = "";

if(!empty(check_user_email($email))){
  $notice = "This email address:: ".$email." is already in use";
}else if(!empty(check_user_phone($phone))){
  $notice = "This Phone number:: ".$phone." is already in use";
}else{

include("connect.php");
$reg_date = date("d, M Y");
$user_id = rand(1000000,1000000000);

$sql_query = "INSERT INTO users(email,phone,reg_date,password,user_id) VALUES (?,?,?,?,?)";

$i  = $connect->prepare($sql_query);
$i->bind_param("sssss",$email,$phone,$reg_date,$mpassword,$user_id);
if($i->execute()){
	$notice = "Account created successfully";
}else{
	$notice = "Account creation failed";
}
}

return $notice;
}








function check_user_email($data){
	$returned_data = "";
include("connect.php");
$sql = "SELECT reg_date FROM users WHERE email = ? ";
$r = $connect->prepare($sql);
$r->bind_param("s",$data);
$r->execute();
$r->bind_result($rdate);
while($r->fetch()):
 $returned_data = $rdate;
endwhile;

return $returned_data;
}



function check_user_phone($data){
	$returned_data = "";
include("connect.php");
$sql = "SELECT reg_date FROM users WHERE phone = ? ";
$r = $connect->prepare($sql);
$r->bind_param("s",$data);
$r->execute();
$r->bind_result($rdate);
while($r->fetch()):
 $returned_data = $rdate;
endwhile;

return $returned_data;
}
?>