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
        if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {

            //  -------------------------
            // Assigning variables for mail
            // -------------------------

            $to = "contact@futeragroup.com";
            $subject = "Website Query for " . $selctedProject;
            $Message = $userName . "Has sent a new message -- " . $userMessage;
            $header = "From " . $userName . "with this mail "  . $userEmail . "Mobile no" . $userNo;


            if (mail($to, $subject, $Message, $header)) {
                //  -------------------------
                // SuccessFull Redirection
                // -------------------------
                $successMessage = "Mail sent successfully !! We will connect you shortly .";
                header('Location:' . $url . '?successMessage=' . $successMessage);
            }
        }
    }

    //  -------------------------
    // Redirection to home page 
    // -------------------------
    else {
        $error = "Some Fields are empty !! Please retry";
        header('Location:' . $url . '?error=' . $error);
    }
}

//  -------------------------
// Redirection to home page 
// -------------------------
else {
    $error = "Please fill the details";
    header('Location:' . $url . '?error=' . $error);
}

// Handle response on home page and add js to managae titlle