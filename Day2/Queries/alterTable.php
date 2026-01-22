<?php 
    require('../../connect.php');

    $alterColumn="alter table employee add constraint fk_employee_department Foreign key(dId) references department(dept_id)";
    $res=mysqli_query($con,$alterColumn);
    if($res){
        echo "done";
    }else{
        echo "Fail";
    }
?>