<?php
include "../Database/connect.php";
session_start();

$student_id = $_SESSION['enrollment_number'];

$valid_extensions = ["pdf", "jpeg", "jpg", "png"]; // valid extensions

if (!file_exists("uploads/" . $student_id)) {
    mkdir("uploads/" . $student_id, 0777, true);
  
}

$path = "uploads/" . $student_id . "/";
if (!empty($_POST["fileno"]) || $_FILES["image"]) {
    $img = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    $size = $_FILES["image"]["size"];

    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
   
    // can upload same image using rand function
    $final_image = $student_id . "_" . $_POST["fileno"] . "." . $ext;
    $final_image = strtolower($final_image);

    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . $final_image;
/* echo $path;
exit(); */
        if ($size < 5242880) {//size in bytes equivalent to 5 mb
            if (move_uploaded_file($tmp, $path)) {
                $name = $_POST["fileno"];

                //check entry is there or not
                $smt = $con->prepare("SELECT
                        `student_id` FROM `tbl_application_documents` WHERE student_id = ? ");
                $smt->bind_param("i", $student_id);
                $smt->execute();
                $ex = $smt->get_result();
                if ($ex->num_rows == 0) {
                    $insert = $con->prepare(
                        "INSERT tbl_application_documents (student_id) VALUES (?)"
                    );
                    $insert->bind_param("i", $student_id);
                    $result = $insert->execute();
                    if ($result) {
                        //update data
                        if ($name == "current_clg_noc") {
                            $update = $con->prepare(
                                "UPDATE tbl_application_documents SET current_clg_noc = ? WHERE student_id = ?"
                            );
                            $update->bind_param(
                                "si",
                                $final_image,
                                $student_id
                            );
                            $result = $update->execute();
                            if ($result) {
                                $response = [
                                    "status" => 200,
                                    "message" => "Record Updated Successfully!",
                                ];
                            } else {
                                $response = [
                                    "status" => 400,
                                    "message" => $con->error,
                                ];
                            }
                        } 
                    } else {
                        $response = [
                            "status" => 400,
                            "message" => $con->error,
                        ];
                    }
                } else {
                   if ($name == "Aadhar_card") {
                        $update = $con->prepare(
                            "UPDATE tbl_application_documents SET current_clg_noc = ? WHERE student_id = ?"
                        );
                        $update->bind_param("si", $final_image, $student_id);
                        $result = $update->execute();
                        if ($result) {
                            $response = [
                                "status" => 200,
                                "message" => "Record Updated Successfully!",
                            ];
                        } else {
                            $response = [
                                "status" => 400,
                                "message" => $con->error,
                            ];
                        }
                    }  
                }
            } else {
                $response = [
                    "status" => 300,
                    "message" => "Something Went Wrong",
                ];
            }
        } else {
            $response = [
                "status" => 400,
                "message" => "Invalid File Size",
            ];
        }
       
    }
    else
    {
        $response = [
            "status" => 500,
            "message" => "Invalid File type",
        ];
    }
    echo json_encode($response);
}