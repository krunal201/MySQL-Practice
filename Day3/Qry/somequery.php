<?php 
    require('../../connect.php');

    $qry="";
    // $qry1="select * from employee";
    // $res=mysqli_query($con,$qry1);

    //Find the total salary paid in each office city, but only for cities where the total salary is greater than $1,000,000.
    // $qry2="select office_city as City, sum(salary) as salary from employee group by office_city having sum(salary) > 15000";
    // $res=mysqli_query($con,$qry2);

    //List the average salary for each department, but only for departments where the average salary exceeds 30000.
    // $qry3="select avg(salary) as salary, dId from employee group by dId having avg(salary)>30000";
    // $res=mysqli_query($con,$qry3);

    // Retrieve the total number of employees and the total salary paid in each office city, but only for cities where the tota l number of employees is greater than 3.
    // $qry4="select count(eId) as dId,sum(salary) as salary,office_city from employee group by office_city having count(eId)>3";
    // $res=mysqli_query($con,$qry4);

    // Get the maximum salary for each department, but only for departments where the maximum salary is greater than 45000.
    $qry5="select max(salary)as salary,dId,job_title from employee group by dId having max(salary)>45000";
    $res=mysqli_query($con,$qry5);
    // Find the number of employees in each department, but only for departments where the number of employees is more than 20.

     if($res){
        // echo "Done";
        mysqli_num_rows($res);
    }else{
        echo "Fail";
    }


    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
    <table border="1">
        <tr>
            <!-- <th>total cities with paid salary</th>
            <th>Average salary paid</th>
            <th>Office City</th> -->
            <!-- 
            <th>LastName</th>
            <th>Office Code</th>
            <th>Office City</th>
            <th>Job Title</th>
            <th>Dept ID</th>
            -->
        </tr>

        <?php 
        while($row=mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <!-- <td><?php //echo $row['City']; ?></td> -->
                <!-- <td><?php //echo $row['dId']; ?></td> -->
                <td><?php echo $row['salary']; ?></td>
                <!-- <td><?php //echo $row['job_title']; ?></td> -->
                <!-- <td><?php //echo $row['office_city']; ?></td> -->
                <!-- <td><?php //echo $row['lastname']; ?></td>
                <td><?php //echo $row['office_code']; ?></td>
                <td><?php //echo $row['office_city']; ?></td>
                <td><?php // echo $row['job_title']; ?></td>
                <td><?php //echo $row['dId']; ?></td> -->
                <!-- <td><?php //echo $row['dept_location']; ?></td> -->
            </tr>
        <?php 
         }       
        ?>
    </table>
</body>
</html>