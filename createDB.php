<?php 
    $host="localhost";
    $user="root";
    $password="";

    $con=mysqli_connect($host,$user,$password);

    $createDBQry="CREATE DATABASE training";
    $res=mysqli_query($con,$createDBQry);
    // if($res){
    //     echo "Database created";
    // }else{
    //     echo "Failed to create Database";
    // }
?>