<?php
include "../../Database/connect.php";
include "../../common/function.php";
// Read JSON data from the request
$jsonData = file_get_contents('php://input');

$data = json_decode($jsonData, true);
$enr_num = mysqli_real_escape_string($con, $data['enrollment']);
$cmd = $con->prepare('SELECT * FROM tbl_stu_application WHERE enrollment_number = ?');
$cmd->bind_param("s", $enr_num);
$cmd->execute();
$ex = $cmd->get_result();
if ($ex->num_rows == 1) {
    $response = [
        'status' => 400,
        'message' => 'alredy applyed'
    ];
} else{
    $application_id = generate_application_id($enr_num);
    $stmt = $con->prepare("INSERT INTO `tbl_stu_application`(application_id,enrollment_number) VALUES (?,?)");
    $stmt->bind_param("ss", $application_id,$enr_num);
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
}
    

echo json_encode($response);

$con->close();
?>
