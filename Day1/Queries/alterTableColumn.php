<?php 
    include('../connect.php');

    $renameQry="alter table user rename column bio to about ";

    $res=mysqli_query($con,$renameQry);
    if($res){
        echo "Rename";
    }else{
        echo "Fail";
    }
    mysqli_close($con);
?>