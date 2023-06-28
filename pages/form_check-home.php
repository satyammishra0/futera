<?php

$url = $_POST['pageurl'];
$userName = $_POST['username'];
$userNo = $_POST['usermobile'];
$userMessage = $_POST['usermessage'];
$userEmail = $_POST['useremail'];
$selctedProject = $_POST['Projects'];


$output = [];

if (!empty($userName) && !empty($userNo) && !empty($userMessage) && !empty($userEmail)) {
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) && strlen($userNo) == 10) {
        $from = $userEmail;
        $to = "contact@futeragroup.com";
        $subject = "Futera Website Enquiry for " . $selctedProject;
        $Message = "" . $userName . " has sent a new message: " . $userMessage . " and his contact number is :" .  $userNo . "</br>";
        $header = "From: " . $from . "\r\n";
        if (true) {
            $successMessage = "Message sent successfully! Our team will contact at the earliest.";
            $output["status"] = 1;
            $output["message"] = $successMessage;
            echo json_encode($output);
        } else {
            $error = "Details Error";
            $output["status"] = 0;
            $output["message"] = $error;
            echo json_encode($output);
        }
    } else {
        $error = "Some Fields are empty !! Please retry";
        $output["status"] = 0;
        $output["message"] = $error;
        echo json_encode($output);
    }
} else {
    $error = "Please recheck the entered details";
    $output["status"] = 0;
    $output["message"] = $error;
    echo json_encode($output);
}
