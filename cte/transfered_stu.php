<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './include/importhead.php'; ?>
    <title>CTE PORTAL</title>
    <?php
include('../Database/connect.php');
$query = "SELECT * FROM tbl_stu_application WHERE app_status = 'approved'";
$result = mysqli_query($con,$query);


?>
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
                <!-- <div class="col-lg-12"> -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Primary Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table primary-table-bordered">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th scope="col">Application No.</th>
                                            <th scope="col">Enrollment No.</th>
                                            <th scope="col">Current College</th>
                                            <th scope="col">Transfered College</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                ?>
                                                <td><?php echo $row['application_id']; ?></td>
                                                <td><?php echo $row['enrollment_number'];?></td>
                                                <td><?php echo $row['current_clg_id'];  ?></td>
                                                <td><?php echo $row['transferred_clg_id'];  ?></td>

                                            
                                            <?php
                                                }
                                          ?>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th>
                                                201290116020
                                            </th>
                                            <td>GMIT</td>
                                            <td>GMIU</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <th>
                                                201290116033
                                            </th>
                                            <td>GMIT</td>
                                            <td>S.S.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
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