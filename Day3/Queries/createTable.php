<?php 
    require('../../connect.php');

    $crateTableQry="create table department(
        dId int(4) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        dept_name varchar(50),
        dept_location varchar(50)
    )";
    $res=mysqli_query($con,$crateTableQry);

    if($res){
        echo "Create";
    }else{
        echo "Fail";
    }
?>