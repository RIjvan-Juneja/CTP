<?php
include('../Database/connect.php');
$query = "SELECT * FROM tbl_stu_application WHERE current_clg_approved = '1' AND transferred_clg_approved = '1' AND cte_approved = '0' AND app_status = 'pending'";
$result = mysqli_query($con,$query);

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

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">College In Applications</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table primary-table-bordered">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">Application ID.</th>
                                        <th scope="col">Enrollment No.</th>
                                        <th scope="col">Current College</th>
                                        <th scope="col">Transfer College</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>
                                            <a href="#">201290116020</a>
                                        </th>
                                        <td>GMIT</td>
                                        <td>GMIU</td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <th>
                                            <a href="#">201290116033</a>
                                        </th>
                                        <td>GMIT</td>
                                        <td>S.S.</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
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