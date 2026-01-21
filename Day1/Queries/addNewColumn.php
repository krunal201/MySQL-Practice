<?php 
    include('../connect.php');

    $addColumn="alter table user add column gender varchar(6)";
    $res=mysqli_query($con,$addColumn);
    if($res){
        echo "Column Added";
    }else{
        echo "Faild while adding column";
    }
    mysqli_close($con);
?>