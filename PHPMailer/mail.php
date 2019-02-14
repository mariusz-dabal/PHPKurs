<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '/home/vagrant/code/vendor/autoload.php';

$mail = new PHPMailer(true);
try {

    $mail->setFrom('mariusz9dabal@gmail.com');
    $mail->addAddress('olek+'); 

    $mail->isSMTP();
    $mail->Host = 'smtp.mailgun.org';
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'bai@simple-systems.pl';
    $mail->Password = 'bai123';
    $mail->Port = 587;

    $mail->Subject = 'Test';
    $mail->Body    = '';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}