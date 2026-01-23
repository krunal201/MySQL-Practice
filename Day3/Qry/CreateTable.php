<?php 
    require('../../connect.php');

    $crateTableQry="create tabel office(
        office_id int(4) UNSIGNED AUTO_INCREMENT,
        office_code int(4) PRIMARY KEY,
        office_city varchar(50)
    )";
    $res=mysqli_query($con,$crateTableQry);

    mysqli_close($con);
?>