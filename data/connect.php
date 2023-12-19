<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mysql';
$database_create = mysqli_connect($hostname,$username,$password,$database);


$sql = "CREATE DATABASE IF NOT EXISTS ahia_market";
$tx = $database_create->prepare($sql);
$tx->execute();

$newdatabase = 'ahia_market';
$connect = mysqli_connect($hostname,$username,$password,$newdatabase);


if($connect == true){
}else{
echo("<script>alert('Unable to access database');</script>");
}

?>