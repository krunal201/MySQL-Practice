<?php 
    include('connect.php');

    $crateTableQry="CREATE TABLE User(
        Id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname varchar(50) NOT NULL,
        lastname varchar(50) NOT NULL,
        password varchar(100),
        birthdate date,
        bio text,
        status enum('Active','In-Active')  
    )";

    $res=mysqli_query($con,$crateTableQry);
    if($res){
        echo "Table Created";
    }else{
        echo "Failed to create table";
    }
?>