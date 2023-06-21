<?php

//  -------------------------
// Getting the user data 
// -------------------------

$url = $_POST['pageurl'];
$userName = $_POST['username'];
$userNo = $_POST['usermobile'];
$userMessage = $_POST['usermessage'];
$userEmail = $_POST['useremail'];
$submitBtn = $_POST['submitbtn'];
echo $submitBtn;
$selctedProject = $_POST['Projects'];

//  -------------------------
// IF Submit btn is clicked
// -------------------------
if (isset($submitBtn)) {

    //  -------------------------
    // Fields shouln't be vacened 
    // -------------------------
    if (!empty($userName) && !empty($userNo) && !empty($userMessage) && !empty($userEmail)) {


        //  -------------------------
        // Validation mobile
        // -------------------------
        if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) && strlen($userNo) == 10) {

            //  -------------------------
            // Assigning variables for mail
            // -------------------------

            $from = $userEmail;
            // $to = "contact@futeragroup.com";
            $to = "satyam.mishra@saaol.co.in";
            $subject = "Website Query for " . $selctedProject;
            $Message = "" . $userName . " has sent a new message: " . $userMessage . " and his contact number is :" .  $userNo . "</br>";
            $header = "From: " . $from . "\r\n";

            echo $url . "<br>";

            if (true) {
                //  -------------------------
                // SuccessFull Redirection
                // -------------------------
                $successMessage = "Mail sent successfully !! We will connect you shortly .";

                // header('Location:' . $url);
                // header('Location:' . $url . '?successMessage=' . urlencode($successMessage));
            }
        } else {
            $error = "Details Error";
            echo $error;
            // header('Location:' . $url);
        }
    }

    //  -------------------------
    // Redirection to home page 
    // -------------------------
    else {
        $error = "Some Fields are empty !! Please retry";
        echo $error;
        // header('Location:' . $url);
    }
}

//  -------------------------
// Redirection to home page 
// -------------------------
else {
    $error = "Please fill the details";
    echo $error;
    // header('Location:' . $url . '?error=' . $error);
}

// Handle response on home page and add js to managae titlle