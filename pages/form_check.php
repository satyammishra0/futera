<?php
function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}


$userName = $_POST['username'];
$userNo = $_POST['useremail'];
$userMessage = $_POST['usermessage'];
$submitBtn = $_POST['submitbtn'];

if (isset($submitBtn)) {
    if (!empty($userName) && !empty($userNo) && !empty($userMessage)) {
        if (filter_var($userNo, FILTER_VALIDATE_EMAIL)) {
            $to = "contact@futeragroup.com";
            $subject = "Website Query";
            $Message = $userName . "Has sent a new message -- " . $userMessage;
            $header = "From " . $userName;


            if (mail($to, $subject, $Message, $header)) {
                $successMessage = "Mail sent successfully !! We will connect you shortly .";
                header('Location:contact.php?successMessage=' . $successMessage);
            }
        } else {
            $error = "Not a valid email";
            header('Location:./contact.php?error=' . $error);
        }
    } else {
        $error = "Some Fields are empty !! Please retry";
        header('Location:./contact.php?error=' . $error);
    }
} else {
    $error = "Please fill the details";
    header('Location:./contact.php?error=' . $error);
}
