<?php 
$registration = "CREATE TABLE IF NOT EXISTS users(
	email varchar(250),
	phone varchar(50) NOT NULL,
	reg_date date NOT NULL,
	password varchar(250) NOT NULL,
	user_id varchar(250) NOT NULL ,
	PRIMARY KEY(user_id))";


create_table($registration);

$profile = "CREATE TABLE IF NOT EXISTS profile(
	user_id varchar(250) NOT NULL,
	photo varchar(250),
	address varchar(250),
	landmark varchar(250),
	FOREIGN KEY(user_id) REFERENCES users(user_id)
)";


create_table($profile);


function create_table($sql_query){
include("connect.php");
$db = $connect->prepare($sql_query);
if($db->execute()){
	echo("Table created successfully");
}
}

?>