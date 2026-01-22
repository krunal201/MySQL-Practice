<?php 
     require('../../connect.php');

    $crateTableQry="create table article(
        article_id int(4) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        news_id int(3),
        title varchar(30),
        content varchar(150),
        auther varchar(20),
        foreign key(news_id) references news(news_id) on delete cascade
    )";
    $res=mysqli_query($con,$crateTableQry);

    if($res){
        echo "Create";
    }else{
        echo "Fail";
    }
?>