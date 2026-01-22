<?php 
    require('../../connect.php');

    $crateTableQry="create table news(
        news_id int(3) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        title varchar(50),
        description varchar(150)
    )";
    $res=mysqli_query($con,$crateTableQry);
    mysqli_close($con);
    if($res){
        echo "Create";
    }else{
        echo "Fail";
    }
?>