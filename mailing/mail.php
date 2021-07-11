<?php

define("APPPATH","./");
include APPPATH . "PHPMailer.php";
include APPPATH . "Exception.php";
include APPPATH . "OAuth.php";
include APPPATH . "POP3.php";
include APPPATH . "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['action'])) {
    //#1
    $receiver = $_POST['receiver'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //#2
    $mail = new PHPMailer;
    $mail->isSMTP();
    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'j.thien1551@gmail.com';
    $mail->Password = '';
    $mail->FromName = "Demo Send Mail";

    //#3
    $mail->setFrom('j.thien1551@gmail.com');
    $mail->addAddress($receiver);
    $mail->Subject = $subject;
    $mail->msgHTML($message);

    //#4
    if(!$mail->send()){
        $error = "Lỗi: ".$mail->ErrorInfo;
        echo '<p>'.$error.'</p>';
    }
    else{
        echo '<p>Đã gửi</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo gửi Email</title>
</head>
<body>
    
</body>
</html>