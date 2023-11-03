<?php
include '../Database/connect.php';
session_start();
if (isset($_SESSION['enrollment_number'])) {
    $enrollment_number = $_SESSION['enrollment_number'];
} else {
    header("Location: login.php");
    // exit();
    // echo "Enrollment";
}
if (isset($_POST["b-submit"])) {

    $u_first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $u_middle_name = mysqli_real_escape_string($con, $_POST['middle_name']);
    $u_last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $u_mobile_number = mysqli_real_escape_string($con, $_POST['mobile_number']);
    $u_enrollment_number = mysqli_real_escape_string($con, $_POST['enrollment_number']);
    $u_email = mysqli_real_escape_string($con, $_POST['email']);
    $u_gender = mysqli_real_escape_string($con, $_POST['gender']);
    $u_cast = mysqli_real_escape_string($con, $_POST['cast']);
    $u_dob = mysqli_real_escape_string($con, $_POST['dob']);
    $u_stmt = $con->prepare("UPDATE `tbl_stu_application` SET first_name = ?,middle_name = ?,last_name = ?,email= ?,mobile_number= ?,dob=?,gender= ?,cast = ? WHERE enrollment = ? ");
    $u_stmt->bind_param("sssssiss", $u_first_name, $u_middle_name, $u_last_name, $u_email, $u_mobile_number, $u_dob, $u_gender, $u_cast,$enrollment_number);
    $result = $stmt->execute();
    if ($result) {
        echo "<script>alert('insertd')</script>";
    } else {
        echo "<script>alert('not insertd')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../college/include/importhead.php'; ?>
    <link rel="stylesheet" href="../assets/student_assets/application.css">

    <title>Document</title>
</head>

<body>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title application-heading">Transfer Application</h4>
        </div>
        <div class="card-body application-body">
            <!-- Nav tabs -->
            <div class="default-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link steps-application active" data-toggle="tab" href="#basic">BASIC DETAILS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link steps-application" data-toggle="tab" href="#academic"
                            id="secondAnchor">ACADEMIC DETAILS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link steps-application" data-toggle="tab" href="#document">DOCUMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link steps-application" data-toggle="tab" href="#application-submit">APPLICATION
                            SUBMIT</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- BASIC DETAIL SECTION START -->
                    <div class="tab-pane fade active show" id="basic" role="tabpanel">
                        <form action="application.php" method="POST">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">First Name*</label>
                                            <input type="text" name="first_name" class="form-control error"
                                                placeholder="Your Name" required="">
                                            <label id="firstName-error" class="error" for="firstName">validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Middle Name*</label>
                                            <input type="text" name="middle_name" class="form-control error"
                                                placeholder="Father Name" required=""><label id="MiddleName-error"
                                                class="error" for="MiddleName">validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Last Name*</label>
                                            <input type="text" name="last_name" class="form-control error"
                                                placeholder="Surename" required=""><label id="lastName-error"
                                                class="error" for="lastName">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Enrollment Number*</label>
                                            <input type="number" name="enrollment_number" class="form-control error"
                                                placeholder="" required=""><label id="enr_num-error" class="error"
                                                for="enr_num">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Mobile Number*</label>
                                            <input type="number" name="mobile_number" class="form-control error"
                                                placeholder="" required=""><label id="mobile_num-error" class="error"
                                                for="mobile_num">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Email*</label>
                                            <input type="email" name="email" class="form-control error" placeholder=""
                                                required=""><label id="email_num-error" class="error"
                                                for="email_num">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Date Of Birth*</label>
                                            <input type="date" name="dob" class="form-control error" placeholder=""
                                                required=""><label id="dob-error" class="error"
                                                for="dob">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Gender*</label>
                                            <select class="form-control" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select><label id="gender-error" class="error"
                                                for="gender">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Cast*</label>
                                            <select class="form-control" name="cast">
                                                <option>OBC</option>
                                                <option>OPEN</option>
                                                <option>ST/SC</option>
                                            </select><label id="cast-error" class="error" for="cast">Validation</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <!-- <a class="btn btn-light form-btn" target="_blank" href="#">Previous</a>
                                    <a class="btn btn-primary form-btn" target="_blank" data-toggle="tab"
                                        id="firstAnchor">Save & Next</a> -->
                                    <button type="submit" class="btn btn-primary" name="b-submit">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- BASIC DETAIL SECTION END  -->

                    <div class="tab-pane fade" id="academic">
                        <form action="application.php" method="POST">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Current College*</label>
                                            <select class="form-control" name="current_clg_id">
                                                <option value="1">GYANMANJARI INVOTIVE UNIVERSITY</option>
                                                <option value="1">GTU</option>
                                                <option value="1">SSIP</option>
                                            </select>
                                            <label id="current-college-error" class="error"
                                                for="current-college">validation</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Want Transfred College*</label>
                                            <select class="form-control" name="transferred_clg_id">
                                                <option value="1">GYANMANJARI INVOTIVE UNIVERSITY</option>
                                                <option value="1">GTU</option>
                                                <option value="1">SSIP</option>
                                            </select>
                                            <label id="current-college-error" class="error"
                                                for="current-college">validation</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Course*</label>
                                            <select class="form-control" name="course">
                                                <option value="B.E">B.E</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>
                                            <label id="current-college-error" class="error"
                                                for="current-college">validation</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Branch*</label>
                                            <select class="form-control" name="branch">
                                                <option value="IT">IT</option>
                                                <option value="Diploma">Diploma</option>
                                            </select>
                                            <label id="current-college-error" class="error"
                                                for="current-college">validation</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Previous Semester*</label>
                                            <select class="form-control" name="previous_sem">
                                                <option value="1">3</option>
                                                <option value="1">5</option>
                                                <option value="1">7</option>
                                            </select>
                                            <label id="current-college-error" class="error"
                                                for="current-college">validation</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Previous SEM SPI*</label>
                                            <input type="number" name="previous_sem_spi" class="form-control error"
                                                placeholder="" required=""><label id="email_num-error" class="error"
                                                for="email_num">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Previous SEM CPI*</label>
                                            <input type="number" name="cpi_till_now" class="form-control error"
                                                placeholder="" required=""><label id="email_num-error" class="error"
                                                for="email_num">Validation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Current Backlog*</label>
                                            <input type="number" name="current_backlog" class="form-control error"
                                                placeholder="" required=""><label id="email_num-error" class="error"
                                                for="email_num">Validation</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Student has UFM*</label>
                                            <select class="form-control" name="stu_has_ufm">
                                                <option value="1">Yes</option>
                                                <option value="0">NO</option>
                                            </select>
                                            <label id="current-college-error" class="error"
                                                for="current-college">validation</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="text-label">Student has Detained*</label>
                                            <select class="form-control" name="stu_detained">
                                                <option value="1">Yes</option>
                                                <option value="0">NO</option>
                                            </select>
                                            <label id="current-college-error" class="error"
                                                for="current-college">validation</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="a-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="document">
                        <div class="pt-4">
                            <h4>This is contact title</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.
                            </p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="application-submit">
                        <div class="pt-4">
                            <h4>This is message title</h4>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor.
                            </p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        // Get references to the anchor tags
        var firstAnchor = document.getElementById("firstAnchor");
        var secondAnchor = document.getElementById("secondAnchor");

        // Define a function to be called when the first anchor tag is clicked
        function handleClickOnFirstAnchor() {
            // Perform any desired actions when the first anchor is clicked

            // Trigger a click event on the second anchor
            var clickEvent = new MouseEvent("click", {
                bubbles: true,
                cancelable: true,
                view: window
            });
            secondAnchor.dispatchEvent(clickEvent);
        }

        // Add a click event listener to the first anchor tag
        firstAnchor.addEventListener("click", handleClickOnFirstAnchor);

        // Define a function to be called when the second anchor tag is clicked
        function handleClickOnSecondAnchor() {
            // Perform any desired actions when the second anchor is clicked
            alert("Second anchor clicked!");
        }

        // Add a click event listener to the second anchor tag
        secondAnchor.addEventListener("click", handleClickOnSecondAnchor);

    </script> -->
    <?php include '../college/include/importjs.php'; ?>

</body>

</html>