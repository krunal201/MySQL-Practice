<?php 
    require('../../connect.php');

    //1] Show data where dept id not 4 and 5.
    // $sqlQry="select firstname, lastname, office_code, office_city, job_title from employee where dId not in(4,5)";
    // $res=mysqli_query($con,$sqlQry);

    //2] Show data where salary > 30000 and office code =1.
    // $slQry2="select firstname, lastname, office_code from employee where salary > 30000 and office_code=1";
    // $res=mysqli_query($con,$slQry2);

    //3] Show data where salary > 50000.
    // $slQry3="select firstname, lastname from employee where salary > 50000";
    // $res=mysqli_query($con,$slQry3);

    //4] Count number of employee where salary > 60000.
    // $slQry4="select count(eId) as Total_Employee from employee where salary > 60000";
    // $res=mysqli_query($con,$slQry4);

    //5] Show data in asc order by firstname.
    // $slQry5="select firstname, lastname from employee order by firstname asc";
    // $res=mysqli_query($con,$slQry5);

    //6] Show data whose salary is highest.
    // $slQry6="select firstname, lastname, email from employee where salary=(select max(salary) from employee)";
    // $res=mysqli_query($con,$slQry6);

    //7] Show data whose salary is lowest.
    // $slQry7="select firstname, lastname, email from employee where salary=(select min(salary) from employee)";
    // $res=mysqli_query($con,$slQry7);

    //8] Show data overall salary.
    // $slQry8="select sum(salary) as paid_salary from employee";
    // $res=mysqli_query($con,$slQry8);

    //9] Show data where job title is sales rep.
    // $slQry9="select count(eId) as total_sale_rep from employee where job_title = 'Sales Rep' ";
    // $res=mysqli_query($con,$slQry9);

    //10] Show data employess whose joining date is > 2020-01-01.
    // $slQry10="select firstname,lastname,email from employee where join_date > '2020-01-01' ";
    // $res=mysqli_query($con,$slQry10);

    //11] Show data where job title contain manager word.
    // $slQry11="select firstname, lastname, email from employee where job_title like '%manager'";
    // $res=mysqli_query($con,$slQry11);

    //12] Show data where job title is sales manager.
    // $slQry12="select firstname, lastname, email from employee where job_title = 'Sales Manager' ";
    // $res=mysqli_query($con,$slQry12);

    //13] Show data employess whose joining date is > 2021-01-01 and job title is sales manager.
    $slQry13="select * from employee where job_title='Sales manager' and join_date > '2021-01-01' ";
    $res=mysqli_query($con,$slQry13);

    if($res){
        echo "Total_Employee";
        mysqli_num_rows($res);
    }else{
        echo "Failed";
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
            <th>Firstname</th>
            <th>LastName</th>
        </tr>

        <?php 
        while($row=mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <!-- <td><?php //echo "Total emp".$row['Total_Employee']; ?></td> -->
                <!-- <td><?php //echo "Total salary paid to emp: ".$row['paid_salary']; ?></td> -->
                <!-- <td><?php //echo "Total Sale Rep: ".$row['total_sale_rep']; ?></td> -->
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
            </tr>
        <?php 
         }       
        ?>
    </table>
</body>
</html>