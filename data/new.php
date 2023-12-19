<?php
include_once('./connect.php');
  function create_table($tab_name){
    $addproduct = "CREATE TABLE IF NOT EXISTS $tab_name(
        namep varchar(250),
        category varchar(250),
        brand varchar(250),
        amount varchar(250),
        discount varchar(50),
        PRIMARY KEY (namep))";

        return $addproduct;
  }

    $tab = create_table("addproduct");

    if (mysqli_query($connect,$tab)) {
        echo "success";
    }
    



?>