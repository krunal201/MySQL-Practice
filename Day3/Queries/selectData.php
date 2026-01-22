<?php 
    include('../../connect.php');

    $sqlQry="";
    
    //1]
    // $sqlQry1="select firstname,lastname,office_code,office_city,job_title from employee";
    // $res=mysqli_query($con,$sqlQry1);

    //2]
    // $sqlQry2="select firstname, lastname, office_code, office_city, job_title,dept_location from employee right join department on employee.dId=department.dept_id where department.dept_id=4 ";
    // $res=mysqli_query($con,$sqlQry2);

    //3]
    // $sqlQry3="select firstname, lastname, office_code, office_city, job_title,dept_location from employee right join department on employee.dId=department.dept_id  where department.dept_id=4";
    // $res=mysqli_query($con,$sqlQry3);

    //4]
    // $sqlQry4="select firstname, lastname, office_code, office_city, job_title,dept_location from employee inner join department on employee.dId=department.dept_id where  where department.dept_id=4 ";
    // $res=mysqli_query($con,$sqlQry4);

    // 5].
    // $sqlQry5="select firstname, lastname, office_code, office_city, job_title,dept_location from employee full join department on employee.dId=department.dept_id ";
    // $res=mysqli_query($con,$sqlQry5);

    //6]
    // $sqlQry6="select firstname, lastname, office_code, office_city, job_title from employee where join_date between '2019-01-01' and '2022-01-01' ";
    // $res=mysqli_query($con,$sqlQry6);

    //8]
    // $sqlQry8="select firstname, lastname, office_code, office_city, job_title from employee where join_date is null ";
    // $res=mysqli_query($con,$sqlQry8);

    //9]
    // $sqlQry9="select firstname, lastname, office_code, office_city, job_title, dId from employee where dId in (1,3) ";
    // $res=mysqli_query($con,$sqlQry9);

    //10]
    $sqlQry10="select title,news_id from news where news_id=1 union select title,news_id from article where news_id between 1 and 3 ";
    $res=mysqli_query($con,$sqlQry10);

    if($res){
        echo "Done";
        mysqli_num_rows($res);
    }else{
        echo "Fail";
    }

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
            <!-- <th>Firstname</th>
            <th>LastName</th>
            <th>Office Code</th>
            <th>Office City</th>
            <th>Job Title</th>
            <th>Dept ID</th>
            -->
            <th>Title</th> 
            <th>ID</th> 
            <!-- <th>Dept Location</th> -->
        </tr>

        <?php 
        while($row=mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <!-- <td><?php //echo $row['firstname']; ?></td>
                <td><?php //echo $row['lastname']; ?></td>
                <td><?php //echo $row['office_code']; ?></td>
                <td><?php //echo $row['office_city']; ?></td>
                <td><?php // echo $row['job_title']; ?></td>
                <td><?php //echo $row['dId']; ?></td> -->
                <!-- <td><?php //echo $row['dept_location']; ?></td> -->
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['news_id']; ?></td>
            </tr>
        <?php 
         }       
        ?>
    </table>
</body>
</html>