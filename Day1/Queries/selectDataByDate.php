<?php 
    include('../connect.php');

    $show_by_date="select * from user where birthdate > '2000-12-12' ";
    $res=mysqli_query($con,$show_by_date);

    if($res && mysqli_num_rows($res)>0){
        echo "Data is Below";
    }else{
        echo "Failed to retrieve data";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Bio</th>
            <th>Status</th>
        </tr>

        <?php 
             while($row=mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['bio']; ?></td>
            <td><?php echo $row['status']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php 
    mysqli_close($con);
?>