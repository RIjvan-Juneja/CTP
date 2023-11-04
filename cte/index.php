<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './include/importhead.php';
    include '../Database/connect.php';
     ?>
    
    
    <title>CTE PORTAL</title>
<?php
     $stmtcmd = $con->prepare("SELECT * FROM tbl_stu_application");
    $stmtcmd->execute();
    $result = $stmtcmd->get_result();
    $total_count = $result->num_rows;
     
    $stmtcmd = $con->prepare("SELECT app_status FROM tbl_stu_application WHERE app_status='approved' ");
    $stmtcmd->execute();
    $result = $stmtcmd->get_result();
    $approved = $result->num_rows;

    $stmtcmd = $con->prepare("SELECT app_status FROM tbl_stu_application WHERE app_status='rejected' ");
    $stmtcmd->execute();
    $result = $stmtcmd->get_result();
    $rejected = $result->num_rows;

    $stmtcmd = $con->prepare("SELECT app_status FROM tbl_stu_application WHERE app_status='pending' ");
    $stmtcmd->execute();
    $result = $stmtcmd->get_result();
    $pending = $result->num_rows;

   

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
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Applications </div>
                                    <div class="stat-digit"><?php echo"$total_count " ?></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Transfer Approved Applications</div>
                                    <div class="stat-digit"><?php echo"$approved " ?></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Transfer Reject</div>
                                    <div class="stat-digit"><?php echo"$rejected " ?></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">College Approval Pending</div>
                                    <div class="stat-digit"><?php echo"$pending " ?></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Applications </div>
                                    <div class="stat-digit">30</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Transfer Approved Applications</div>
                                    <div class="stat-digit">22</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Transfer Reject</div>
                                    <div class="stat-digit">2</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">College Approval Pending</div>
                                    <div class="stat-digit">11</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Applications </div>
                                    <div class="stat-digit">30</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Transfer Approved Applications</div>
                                    <div class="stat-digit">22</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Transfer Reject</div>
                                    <div class="stat-digit">2</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">College Approval Pending</div>
                                    <div class="stat-digit">11</div>
                                </div>
                            </div>
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
    <?php include './include/importjs.php'; ?>

</body>

</html>