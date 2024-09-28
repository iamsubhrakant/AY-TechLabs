<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitContact'])) {

    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];



    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->isSMTP();                                            //Send using SMTP

        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'subhrakantbiswal2003@gmail.com';                     //SMTP username
        $mail->Password   = 'axwwkgzdajliorwt';                               //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('subhrakantbiswal2003@gmail.com', 'AYTECHLABS');
        $mail->addAddress('subhrakantbiswal2003@gmail.com', 'AYTECHLABS');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Enquiry - AYTECLABS Contact Form';
        $mail->Body    = '<h3>Hello , you got your new enquiry</h3
    <h4> Fullname: ' . $fullname . ' </h4>
    <h4> Email: ' . $email . ' </h4>
    <h4> Subject:  ' . $subject . '</h4>
    <h4> Message:  ' . $message . '</h4>
    ';


        if ($mail->send()) {

            $_SESSION['status']= "Thank you for contacting us- AYTECHLABS";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        } else {

            $_SESSION['status']= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header('Location: contact.php');
    exit(0);
}
