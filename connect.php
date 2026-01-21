<?php  
    $host="localhost";
    $user="root";
    $password="";
    $db="training";

    $con=mysqli_connect($host,$user,$password,$db);
    if($con){
        echo "DB connected";
    }else{
        echo "Faild to connect with DB";
    }
?>