<?php
function generate_application_id($enr_num)
{
    $last6Digits = substr($enr_num, -6);
    $alphabetPart = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90));
    $year = date("Y");
    $applicationID = $last6Digits . $alphabetPart . $year;
    return $applicationID;
}

?>