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

                <di v class="card">
                    <div class="card-header">
                        <h4 class="card-title">Upload NOC</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form custom_file_input">
                            <form action="#">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
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