<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../college/include/importhead.php'; ?>

    <!-- Google Font: Source Sans Pro -->
    

    <style>
    .login-page {
        background-image: linear-gradient(0deg,
                rgba(1, 1, 1, 0.8),
                rgba(1, 1, 1, 0.3)), url('./clg bg new.webp');
        background-size: cover;
        height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .login-box{
        width: 409px;
    }
    .card-outline {
        border-top: 3px solid #ba2a21;
    }
    </style>
</head>

<body>

    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->

            <div class="card card-outline">
                <div class="card-header text-center">
                    <a href="./index.php" class="h3"><b>GMIU Website Portal</b></a>
                </div>
                <div class="card-body">
                    <!-- <p class="login-box-msg">Log in to start your session</p> -->

                    <form method="POST" id="quickForm" action="application.php">

                        <div class="input-group mb-3">

                            <select name="role" class="browser-default custom-select" required>
                                <option value="">--Please select--</option>
                             
                            

                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-user-tag"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-12">
                                <button type="submit" name="login" class="btn btn-primary btn-block"
                                    style="background-color: #ba2a21;">Log In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.login-box -->

    <?php include '../college/include/importjs.php'; ?>
</body>



</html>