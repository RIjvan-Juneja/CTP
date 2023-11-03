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
                <div class="col-lg-12">
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
                                        <tr>
                                            <th>1</th>
                                            <th>
                                                201290116025
                                            </th>
                                            <td>S.S.</td>
                                            <td>Man thyu etle</td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th>
                                                201290116020
                                            </th>
                                            <td>GMIT</td>
                                            <td>Document nathi eni pase badha</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <th>
                                                201290116033
                                            </th>
                                            <td>GMIT</td>
                                            <td>Ene 10 SPI che ee amare tya j rese</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <script src="../assets/admin_assets/vendor/global/global.min.js"></script>
    <script src="../assets/admin_assets/js/quixnav-init.js"></script>
    <script src="../assets/admin_assets/js/custom.min.js"></script>

</body>

</html>