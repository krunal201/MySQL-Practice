<?php 
    require('../../connect.php');

    $insert_data="insert into news(title, description) values
    ('Politics', 'All political news'),
    ('Sports', 'Latest sports news and updates'),
    ('Technology', 'Tech innovations and news'),
    ('Health', 'Health-related news and tips'),
    ('Entertainment', 'Entertainment news including movies and celebrities')";
    $res=mysqli_query($con,$insert_data);

    if($res){
        echo "Create";
    }else{
        echo "Fail";
    }

    mysqli_close($con);
?>