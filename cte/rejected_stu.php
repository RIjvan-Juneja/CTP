<?php

include "../Database/connect.php";

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
                <!-- <div class=""> -->
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
                                        <th scope="col">Rejected By</th>
                                        <th scope="col">Reason</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $status = "rejected";
                                    $cmd = $con->prepare("SELECT * FROM `tbl_stu_application` WHERE app_status= ?");
                                    $cmd->bind_param("s", $status);
                                    $cmd->execute();
                                    $result2 = $cmd->get_result();
                                    while ($row = $result2->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <th><?php echo $row['application_id']; ?></th>
                                            <th>
                                            <?php echo $row['enrollment_number']; ?>
                                            </th>
                                            <td>
                                                <?php 
                                                if(!empty($row['current_clg_reject_reason'])){
                                                    echo "current college";
                                                } else if(!empty($row['transferred_clg_reject_reason'])){
                                                    echo "transferred college Rejected";
                                                } else if(!empty($row['cte_reject_reason'])){
                                                    echo "CTE Rejected";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                            <?php 
                                                if(!empty($row['current_clg_reject_reason'])){
                                                    echo $row['current_clg_reject_reason'];
                                                } else if(!empty($row['transferred_clg_reject_reason'])){
                                                    echo $row['transferred_clg_reject_reason'];
                                                } else if(!empty($row['cte_reject_reason'])){
                                                    echo $row['cte_reject_reason'];
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
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