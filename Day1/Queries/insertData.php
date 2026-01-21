<?php
    include('../connect.php');

    $insert_data = "
        INSERT INTO user (firstname, lastname, password, birthdate, bio,status) VALUES
        ('John', 'Doe', 'password123', '1990-05-15', 'A passionate developer with a love for open-source projects.','Active'),
        ('Jane', 'Smith', 'pass456', '1985-08-22', 'Marketing expert with a focus on digital strategies.','In-Active'),
        ('Alex', 'Johnson', 'alex@123', '2000-03-10', 'Tech enthusiast who loves experimenting with new software.','Active'),
        ('Emily', 'Williams', 'securePassword1', '1993-12-05', 'Graphic designer with a flair for modern aesthetics.','Active'),
        ('Michael', 'Brown', 'michael789', '1992-07-30', 'Data analyst specializing in market research and trends.','In-Active'),
        ('Sarah', 'Davis', 'sarahpass2022', '1988-02-12', 'Creative writer exploring the worlds of fiction and non-fiction.','Active'),
        ('David', 'Miller', 'david2021', '1995-11-29', 'Software engineer with a focus on cloud computing and DevOps.','In-Active'),
        ('Sophia', 'Garcia', 'sophiaPass!2023', '1999-01-20', 'Business consultant with a passion for problem-solving and strategy.','Active'),
        ('Daniel', 'Martinez', 'daniel@456', '2001-09-11', 'Entrepreneur with a focus on tech startups and digital solutions.','In-Active'),
        ('Olivia', 'Rodriguez', 'olivia1234', '1997-10-17', 'Aspiring UX/UI designer with a love for intuitive interfaces.','Active')
        ";

    $res=mysqli_query($con,$insert_data);
    if($res){
        echo "Data Inserted Successfully";
    }else{
        echo "Failed While Inserting Record";
    }
    mysqli_close($con);
?>