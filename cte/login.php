<!DOCTYPE html>
<html lang="en">
<from>
<head>
    <?php include './include/importhead.php'; ?>
    <title>CTE PORTAL</title>
    <?php
session_start();
include "../Database/connect.php";



// Check if the form is submitted
if (isset($_POST['sign_in'])) {
    // Get the form data
    $email = $_POST['email_id'];
    $d_role = $_POST['role'];
    $password = $_POST['password'];

    // Update the SQL query to include the `role` column in the `SELECT` statement
    $query = "SELECT * FROM tbl_login WHERE email_id = ? AND password = ?";
    $stmt = $con->prepare($query);

    // Update the `bind_param()` method to bind the `role` variable to the SQL query
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows === 1) {
        // User is authenticated
        // Set the enrollment number in the session
        $_SESSION['email_id'] = $email;

        // Get the user's role
        $row = $result->fetch_assoc();
        $role = $row['user_type'];

        // You can perform further actions like redirecting
        // depending on the user's role
        if ($role == "CTE") {
            echo "<script>alert('login Succesfully')</script>";
            header("Location: index.php");
            
        } else if ($role == "college") {
            
            echo "<script>alert('login Succesfully')</script>";
            header("Location: ../college/index.php");
        }
        exit();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password')</script>";
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $con->close();
}
?>
</head>

<body class="h-100" data-typography="poppins" data-theme-version="light" data-layout="vertical"
    data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sibebarbg="color_1"
    data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr">
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end*-->
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 pt-5 mt-5 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Department Login</h4>
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Select Role</strong></label>
                                            <select class="form-control" id="val-skill" name="role">
                                                <option value="">Please select</option>
                                                <option value="asp">CTE</option>
                                                <option value="python">College</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="email" placeholder="email@cte.edu.in" class="form-control"
                                                value="" name="email_id">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" placeholder="Enter Your Password"
                                                class="form-control" name="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="sign_in" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</from>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../assets/admin_assets/vendor/global/global.min.js"></script>
    <script src="../assets/admin_assets/js/quixnav-init.js"></script>
    <script src="../assets/admin_assets/js/custom.min.js"></script>



</body>

</html>