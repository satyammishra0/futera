<?php

//  -------------------------
// Getting the user data 
// -------------------------

$url = $_POST['pageurl'];
$userName = $_POST['username'];
$userNo = $_POST['usermobile'];
$userMessage = $_POST['usermessage'];
$userEmail = $_POST['useremail'];
$selctedProject = $_POST['Projects'];


$output = [];


//  -------------------------
// Fields shouln't be vacened 
// -------------------------
if (!empty($userName) && !empty($userNo) && !empty($userMessage) && !empty($userEmail)) {
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) && strlen($userNo) == 10) {
        $from = $userEmail;
        $to = "satyam.mishra@saaol.co.in";
        $subject = "Website Query for " . $selctedProject;
        $Message = "" . $userName . " has sent a new message: " . $userMessage . " and his contact number is :" .  $userNo . "</br>";
        $header = "From: " . $from . "\r\n";
        if (true) {
            $successMessage = "Mail sent successfully !! We will connect you shortly .";
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
    $error = "Last error";
    $output["status"] = 0;
    $output["message"] = $error;
    echo json_encode($output);
}


// mail($to, $subject, $Message, $header)
// $to = "contact@futeragroup.com";