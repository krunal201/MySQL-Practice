<?php 
    include('../connect.php');

    $dropColumn="alter table user drop column status";
    $res=mysqli_query($con,$dropColumn);
    if($res){
        echo "Column dropped";
    }else{
        echo "Failed";
    }
?>