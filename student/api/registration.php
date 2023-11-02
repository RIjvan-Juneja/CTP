<?php
include "../../Database/connect.php";
// Read JSON data from the request
$jsonData = file_get_contents('php://input');

$data = json_decode($jsonData, true);
$enr_num = mysqli_real_escape_string($con, $data['enrollment']);

    $stmt = $con->prepare("INSERT INTO `tbl_students`(enrollment_number) VALUES (?)");
    $stmt->bind_param("s", $enr_num);
    $result = $stmt->execute();
    if ($result) {
        $response = [
            'status' => 200,
            'message' => 'Record Inserted Successfully!'
        ];
    } else {
        $response = [
            'status' => 400,
            'message' => $con->error
        ];
    }

echo json_encode($response);

$con->close();
?>
