<?php 
    include('../../connect.php');

    $sqlQry="";
    
    //1] query to find the firstName, lastName, officeCode, officeCity, jobTitle of all the employees.
    // $sqlQry1="select firstname,lastname,office_code,office_city,job_title from employee";
    // $res=mysqli_query($con,$sqlQry1);

    //2] query to find the firstName, lastName, officecode, officeCity of all the employees whose department is "4" USING LEFT JOIN
    // $sqlQry2="select firstname, lastname, office_code, office_city, job_title,dept_location from employee right join department on employee.dId=department.dept_id where department.dept_id=4 ";
    // $res=mysqli_query($con,$sqlQry2);

    //3] query to find the firstName, lastName, officecode, officeCity of all the employees whose department is "4" USING RIGHT JOIN
    // $sqlQry3="select firstname, lastname, office_code, office_city, job_title,dept_location from employee right join department on employee.dId=department.dept_id  where department.dept_id=4";
    // $res=mysqli_query($con,$sqlQry3);

    //4] query to find the firstName, lastName, officecode, officeCity of all the employees whose department is "4" USING INNER JOIN
    // $sqlQry4="select firstname, lastname, office_code, office_city, job_title,dept_location from employee inner join department on employee.dId=department.dept_id where  where department.dept_id=4 ";
    // $res=mysqli_query($con,$sqlQry4);

    //5] query to find the firstName, lastName, officecode, officeCity from employee and offices USING FULL JOIN
    // $sqlQry5="select firstname, lastname, office_code, office_city, job_title,dept_location from employee full join department on employee.dId=department.dept_id ";
    // $res=mysqli_query($con,$sqlQry5);

    //6] query to find the firstName, lastName, email, joinDate of all the employees whose join date between 2019-01-01 to 2022-01-01.
    // $sqlQry6="select firstname, lastname, office_code, office_city, job_title from employee where join_date between '2019-01-01' and '2022-01-01' ";
    // $res=mysqli_query($con,$sqlQry6);

    //7]
    // $sqlQry7="select firstname, lastname, office_code, office_city, job_title from employee where join_date is not null";
    // $res=mysqli_query($con,$sqlQry7);

    //8] query to find the firstName, lastName, email, joinDate of all the employees whose join date is null
    // $sqlQry8="select firstname, lastname, office_code, office_city, job_title from employee where join_date is null ";
    // $res=mysqli_query($con,$sqlQry8);

    //9] query to find the firstName, lastName, officeCode, officeCity, jobTitle of all the employees whose department is 1 and 3 using IN.
    // $sqlQry9="select firstname, lastname, office_code, office_city, job_title, dId from employee where dId in (1,3) ";
    // $res=mysqli_query($con,$sqlQry9);

    //10] all record of news and article table using UNION
    // $sqlQry10="select title,news_id, NULL AS description from news 
    // where news_id=1 union select title,news_id, NULL AS content from article where news_id between 1 and 3 ";

    // $sqlQry10 = "SELECT title, news_id, description FROM news
    // WHERE news.news_id = 1
    // UNION
    // SELECT title, news_id, content AS description FROM article
    // WHERE article.news_id BETWEEN 1 AND 3";
    // $res=mysqli_query($con,$sqlQry10);


    // $sqlQry10 = "SELECT title, news_id, description FROM news
    // UNION
    // SELECT title, news_id, content AS description FROM article
    // WHERE article.news_id BETWEEN 1 AND 3";


     $sqlQry10 = "SELECT firstname,join_date FROM employee where cast(join_date as date)";
    $res=mysqli_query($con,$sqlQry10);
    if($res){
        // echo "Done";
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
            <th>Firstname</th>
            <th>Join Date</th>
            <!-- 
            <th>LastName</th>
            <th>Office Code</th>
            <th>Office City</th>
            <th>Job Title</th>
            <th>Dept ID</th>
            -->
            <!-- <th>Title</th> 
            <th>news_ID</th> 
            <th>description</th>  -->
            <!-- <th>content</th>  -->
            <!-- <th>Dept Location</th> -->
        </tr>

        <?php 
        while($row=mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['join_date']; ?></td>
                <!-- 
                <td><?php //echo $row['lastname']; ?></td>
                <td><?php //echo $row['office_code']; ?></td>
                <td><?php //echo $row['office_city']; ?></td>
                <td><?php // echo $row['job_title']; ?></td>
                <td><?php //echo $row['dId']; ?></td> -->
                <!-- <td><?php //echo $row['dept_location']; ?></td> -->

                <!-- <td><?php //echo $row['title']; ?></td>
                <td><?php //echo $row['news_id']; ?></td>
                <td><?php //echo $row['description']; ?></td> -->
                <!-- <td><?php //echo $row['content']; ?></td> -->
            </tr>
        <?php 
         }       
        ?>
    </table>
</body>
</html>