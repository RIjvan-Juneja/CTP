<?php 

include "../Database/connect.php";

$er_num = $_GET['id'];

$stmt = $con->prepare("UPDATE `tbl_stu_application` SET `cte_approved` = '1', `app_status` = 'approved' WHERE `enrollment_number`= ?;");
$stmt->bind_param("s",$er_num);
$result = $stmt->execute();
if ($result) {
    echo "<script>alert('Succusffuly')</script>";
    header("location:cte_req.php");
    // header('location:../application.php');
} else {
    echo "<script>alert('failed')</script>";
    header("location:cte_req.php");
}


?>