<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    //     echo('hello jett');
    //    print_r('Jerry Sabu');
    //    exit();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = "Enquiry From $name";
    $message = $_POST['message'];

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
                <td style='width:150px'><strong>Email ID: </strong></td>
                <td style='width:400px'>$phone</td>
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
    $mail->Username = 'contactusinfinio@gmail.com'; //SENDER MAIL ID
    $mail->Password = 'ackiipcergrwuina'; //PASSWORD
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    //Recipients
    $mail->setFrom('contactusinfinio@gmail.com', 'Ship Tech Web Site'); //SENDER MAIL ID
    $mail->addAddress('jerryaksa97@gmail.com'); //RECIVER MAIL ID
    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    if ($mail->send()) {
        echo '<script>alert("Form Submitted Successfully")</script>';
        echo '<script>window.location = "../index.php";</script>';
    } else {
        echo '<script>alert("Something went wrong")</script>';
        echo '<script>window.location = "../index.php";</script>';
    }
}
