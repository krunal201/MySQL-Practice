<?php 
    require('../../connect.php');

    $crateTableQry="CREATE TABLE employee(
        eId int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname varchar(50) NOT NULL,
        lastname varchar(50) NOT NULL,
        email varchar(20),
        office_code varchar(50),
        office_city varchar(50),
        job_title varchar(50),
        salary int(7),
        join_date date,
        dId int(4)
    )";

    $res=mysqli_query($con,$crateTableQry);
    if($res){
        echo "Table Created";
    }else{
        echo "Failed to create table";
    }
?>