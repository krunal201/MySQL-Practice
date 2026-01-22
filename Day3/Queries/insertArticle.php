<?php 
    require('../../connect.php');


     $insert_data="insert into article(news_id, title, content, auther) values
        (1, 'Political Turmoil', 'Content of the political turmoil article...', 'John Doe'),
        (1, 'Election Campaigns', 'Content of the election campaigns article...', 'Jane Smith'),
        (2, 'Football World Cup', 'Content of the football world cup article...', 'Alex Brown'),
        (2, 'Olympics Glory', 'Content of the Olympics glory article...', 'Mia Taylor'),
        (3, 'AI in 2025', 'Content of the AI in 2025 article...', 'Ethan White'),
        (3, 'Tech Giants', 'Content of the tech giants article...', 'Lucas Black'),
        (4, 'Healthy Lifestyle', 'Content of the healthy lifestyle article...', 'Olivia Green'),
        (4, 'Mental Health Matters', 'Content of the mental health matters article...', 'Liam Wilson'),
        (5, 'New Movie Releases', 'Content of the new movie releases article...', 'Sophia Clark'),
        (5, 'Celebrity Scandals', 'Content of the celebrity scandals article...', 'Isabella Davis')
     ";
    $res=mysqli_query($con,$insert_data);

    if($res){
        echo "Create";
    }else{
        echo "Fail";
    }

    mysqli_close($con);
?>