<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Google reCAPTCHA API key configuration
$siteKey     = '6LeBvKElAAAAAKRliKzByXqfflfgRRWqIfOEOdX6';
$secretKey     = '6LeBvKElAAAAALUSJAUXYYdPLptOdiV2eiwHjEkp';

// Email configuration
$toEmail = 'admin@example.com';
$fromName = 'Sender Name';
$formEmail = 'sender@example.com';

$postData = $statusMsg = $valErr = '';
$status = 'error';

// If the form is submitted
if (isset($_POST['submit'])) {
    // Get the submitted form data
    $postData = $_POST;
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $subject = ($_POST['subject']);
    $message = ($_POST['message']);
    $output = "<html>
<body>
    <table style='width:600px;'>
        <tbody>
            <tr>
                <td style='width:150px'><strong>Name: </strong></td>
                <td style='width:400px'>$name</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Email ID: </strong></td>
                <td style='width:400px'>$email</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Subject: </strong></td>
                <td style='width:400px'>$subject</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Message: </strong></td>
                <td style='width:400px'>$message</td>
            </tr>
        </tbody>
    </table>
</body>
</html>";
    $body = $output;

    // Validate reCAPTCHA box
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

        // Verify the reCAPTCHA response
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

        // Decode json data
        $responseData = json_decode($verifyResponse);

        // If reCAPTCHA response is valid
        if ($responseData->success) {

            $body = $output;

            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';

            $mail = new PHPMailer(true);
            //Server settings
            //    $mail->SMTPDebug = SMTP::DEBUG_SERVER;    
            $mail->SMTPDebug = false;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; //your host
            $mail->SMTPAuth = true;
            $mail->Username = 'enquiry.ship@gmail.com'; //SENDER MAIL ID
            $mail->Password = 'vkrujsnmndwhmvba'; //PASSWORD
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            //Recipients
            $mail->setFrom('enquiry.ship@gmail.com', 'Ship Tech Web Site'); //SENDER MAIL ID
            $mail->addAddress('jerryaksa97@gmail.com'); //RECIVER MAIL ID
            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $postData = '';
            if ($mail->send()) {
                $_SESSION["mailstatus"] = "success";
                echo '<script>window.location = "index.php";</script>';
            } else {
                $_SESSION["mailstatus"] = "not";
                echo '<script>window.location = "index.php";</script>';
            }
        } else {
            $statusMsg = 'Robot verification failed, please try again.';
        }
    } else {
        $statusMsg = 'Please check on the reCAPTCHA box.';
    }
}