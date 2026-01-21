<?php 
    include('../connect.php');

    // $addColumn="alter table user add column status char(6)";
    $addColumn="alter table user modify column status varchar(6)";
    $res=mysqli_query($con,$addColumn);
    if($res){
        // echo "Column Added";
        echo "Column Altered";
    }else{
        echo "Fail";
    }
    mysqli_close($con);
?>