<?php 
    require('../../connect.php');

    $slQry="";
    //1] Show data where dept id not 4 and 5
    // $sqlQry="select firstname, lastname, office_code, office_city, job_title from employee where dId not in(4,5)";
    // $res=mysqli_query($con,$sqlQry);

    //2] 
    // $slQry2="select firstname, lastname, office_code from employee where salary > 30000 and office_code=1";
    // $res=mysqli_query($con,$slQry2);

    //3]
    // $slQry3="select firstname, lastname from employee where salary > 50000";
    // $res=mysqli_query($con,$slQry3);

    //4]
    // $slQry4="select count(eId) as Total_Employee from employee where salary > 60000";
    // $res=mysqli_query($con,$slQry4);

    //5]
    // $slQry5="select firstname, lastname from employee order by firstname asc";
    // $res=mysqli_query($con,$slQry5);

    //6]
    // $slQry6="select firstname, lastname, email from employee where salary=(select max(salary) from employee)";
    // $res=mysqli_query($con,$slQry6);

    //7]
    // $slQry7="select firstname, lastname, email from employee where salary=(select min(salary) from employee)";
    // $res=mysqli_query($con,$slQry7);

    //8]
    // $slQry8="select sum(salary) as paid_salary from employee";
    // $res=mysqli_query($con,$slQry8);

    //9]
    // $slQry9="select count(eId) as total_sale_rep from employee where job_title = 'Sales Rep' ";
    // $res=mysqli_query($con,$slQry9);

    //10]
    // $slQry10="select firstname,lastname,email from employee where join_date > '2020-01-01' ";
    // $res=mysqli_query($con,$slQry10);

    //11]
    // $slQry11="select firstname, lastname, email from employee where job_title like '%manager'";
    // $res=mysqli_query($con,$slQry11);

    //12]
    // $slQry12="select firstname, lastname, email from employee where job_title = 'Sales Manager' ";
    // $res=mysqli_query($con,$slQry12);

    //13]
    // $slQry13="select * from employee where job_title='Sales manager' and join_date > '2021-01-01' ";
    // $res=mysqli_query($con,$slQry13);

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