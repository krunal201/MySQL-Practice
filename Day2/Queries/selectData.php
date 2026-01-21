<?php 
    require('../../connect.php');

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
                <!-- <td><?php //echo $row['Total_Employee']; ?></td> -->
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
            </tr>
        <?php 
         }       
        ?>
    </table>
</body>
</html>