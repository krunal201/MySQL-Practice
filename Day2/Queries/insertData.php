<?php 
    require('../../connect.php');

    $insert_data="
    INSERT INTO employee (firstName, lastName, email, office_code, office_city, job_title, salary, join_date, dID)
    VALUES
    ('John', 'Doe', 'john.doe@email.com',1, 'New York', 'Sales Rep', 25000, '2020-05-12', 3),
    ('Jane', 'Smith','jane.smith@email.com',  2, 'Los Angeles', 'Manager', 55000, '2018-03-25', 4),
    ('Alice', 'Johnson', 'alice.johnson@email.com',1, 'New York', 'Sales Manager', 70000,  '2019-08-19', 2),
    ('Bob', 'Brown', 'bob.brown@email.com', 1, 'New York', 'Sales Rep', 30000, '2021-02-15', 5),
    ('Charlie', 'Davis', 'charlie.davis@email.com', 3, 'Chicago', 'Sales Manager', 75000, '2022-01-10', 1),
    ('David', 'Martinez','david.martinez@email.com', 2, 'Los Angeles', 'Director', 85000, '2017-11-23', 5),
    ('Emma', 'Taylor','emma.taylor@email.com', 1, 'New York', 'Sales Rep', 22000,  '2020-09-10', 4),
    ('Frank', 'Anderson', 'frank.anderson@email.com', 1, 'New York', 'Manager', 60000, '2015-07-05', 2),
    ('Grace', 'Thomas','grace.thomas@email.com', 3, 'Chicago', 'Sales Rep', 31000,  '2021-04-19', 1),
    ('Hannah', 'Jackson','hannah.jackson@email.com', 2, 'Los Angeles', 'Sales Rep', 20000,  '2020-02-22', 3),
    ('Ivy', 'White', 'ivy.white@email.com',  1, 'New York', 'Sales Manager', 72000,'2021-05-09', 4),
    ('James', 'Harris','james.harris@email.com', 3, 'Chicago', 'Sales Rep', 28000,  '2021-08-17', 5),
    ('Kevin', 'Martinez','kevin.martinez@email.com', 2, 'Los Angeles', 'Sales Rep', 24000,  '2022-03-22', 2),
    ('Lily', 'Gonzalez','lily.gonzalez@email.com', 1, 'New York', 'Manager', 67000,  '2018-06-30', 1),
    ('Mia', 'Wilson', 'mia.wilson@email.com', 3, 'Chicago', 'Sales Rep', 29000, '2019-01-12', 3)
    ";

    $res=mysqli_query($con,$insert_data);
    if($res){
        echo "Inserted";
    }else{
        echo "Failed while Insertion of data";
    }

    mysqli_close($con);
?>