<?php
function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}
//  -------------------------
// Getting the user data 
// -------------------------

$userName = $_POST['username'];
$userNo = $_POST['usermobile'];
$userMessage = $_POST['usermessage'];
$submitBtn = $_POST['submitbtn'];

//  -------------------------
// IF Submit btn is clicked
// -------------------------
if (isset($submitBtn)) {

    //  -------------------------
    // Fields shouln't be vacened 
    // -------------------------
    if (!empty($userName) && !empty($userNo) && !empty($userMessage)) {


        //  -------------------------
        // Validation mobile
        // -------------------------
        if (filter_var($userNo, FILTER_VALIDATE_EMAIL)) {

            //  -------------------------
            // Assigning variables for mail
            // -------------------------

            $to = "contact@futeragroup.com";
            $subject = "Website Query";
            $Message = $userName . "Has sent a new message -- " . $userMessage;
            $header = "From " . $userName;


            if (mail($to, $subject, $Message, $header)) {
                //  -------------------------
                // SuccessFull Redirection
                // -------------------------
                $successMessage = "Mail sent successfully !! We will connect you shortly .";
                header('Location:contact.php?successMessage=' . $successMessage);
            }
        }
    }

    //  -------------------------
    // Redirection to home page 
    // -------------------------
    else {
        $error = "Some Fields are empty !! Please retry";
        header('Location:contact.php?error=' . $error);
    }
}

//  -------------------------
// Redirection to home page 
// -------------------------
else {
    $error = "Please fill the details";
    header('Location:contact.php?error=' . $error);
}

// Handle response on home page and add js to managae titlle