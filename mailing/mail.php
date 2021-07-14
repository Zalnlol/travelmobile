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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="caption">Demo Send Mail</h1>
            </div>
            <div class="col-md-12">
                <form action="mail.php" method="POST">
                    <div class="form-group">
                        <label for="receiver">Người nhận</label>
                        <input type="email" class="form-control" id="receiver" name="receiver" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Tiêu đề</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Tiêu đề">
                    </div>
                    <div class="form-group">
                        <label for="message">Nội dung</label>
                        <textarea class="form control" name="message" id=",essage" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" name="action" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JS, Popper.js, and JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>


</body>
</html>