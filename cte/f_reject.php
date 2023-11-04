<?php

include "../Database/connect.php";

$er_num = $_GET['id'];

if(isset($_POST['submit'])){
    
$reason = $_POST['reason'];



$stmt = $con->prepare("UPDATE `tbl_stu_application` SET `cte_reject_reason` = ? WHERE enrollment_number` = ?");
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

}
// $stmt = $con->prepare("UPDATE `tbl_stu_application` SET `cte_approved` = '1', `app_status` = 'approved' WHERE `enrollment_number`= ?;");
// $stmt->bind_param("s",$er_num);
// $result = $stmt->execute();
// if ($result) {
//     echo "<script>alert('Succusffuly')</script>";
//     header("location:cte_req.php");
//     // header('location:../application.php');
// } else {
//     echo "<script>alert('failed')</script>";
//     header("location:cte_req.php");
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './include/importhead.php'; ?>
    <title>CTE PORTAL</title>
</head>

<body>

    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end*-->

    <!--Main wrapper start-->
    <div id="main-wrapper">

        <!--Header start-->
        <?php include './include/header.php'; ?>
        <!--*******-->

        <!--Sidebar start-->
        <?php include './include/sidebar.php'; ?>
        <!--Sidebar end-->

        <!--Content body start-->
        <div class="content-body">
            <div class="container-fluid">

                <!-- *****************************************************************
                                        Write Your code here 
                ******************************************************************-->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Reject Reason</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="f_reject.php">
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" id="comment" name="reason"></textarea></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Content body end-->

        <!--Footer start-->
        <?php include './include/footer.php'; ?>
        <!--Footer end -->

    </div>
    <!--Main wrapper end-->


    <!-- Required vendors -->
    <script src="../assets/admin_assets/vendor/global/global.min.js"></script>
    <script src="../assets/admin_assets/js/quixnav-init.js"></script>
    <script src="../assets/admin_assets/js/custom.min.js"></script>

</body>

</html>