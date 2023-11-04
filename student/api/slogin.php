<?php
    include "../../Database/connect.php";
    $enrollment_num=mysqli_real_escape_string($con,$_POST['enrollment_num']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

    session_start();
// Query the tbl_students table
    $student_query = "SELECT * FROM tbl_students WHERE password = '$password' AND enrollment_number = '$enrollment_num'";
    $student_result = $con->query($student_query);

    // Query the tbl_stu_application table
    $application_query = "SELECT * FROM tbl_stu_application WHERE enrollment_number = '$enrollment_num'";
    $application_result = $con->query($application_query);

    if ($student_result->num_rows > 0 && $application_result->num_rows > 0) {
        // Both password and enrollment number exist
        echo "<script>confirm('login succesfully');</script>";
        $_SESSION['enrollment_number'] = $enrollment_num;
        header('location:../application.php');

    } elseif ($student_result->num_rows > 0) {
        // Password exists, but enrollment number does not
        echo '<script>alert("First, apply for a transfer")</script>';
        header('location:../login.php');
    } elseif ($application_result->num_rows > 0) {
        // Enrollment number exists, but password does not
        echo '<script>alert("Invalid data")</script>';
        header('location:../login.php');
    } else {
        // Neither password nor enrollment number exists
        echo '<script>alert("Invalid data")</script>';
        header('location:../login.php');
    }

    // Close the database connection
    $con->close();
?>