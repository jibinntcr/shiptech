<?php
include('../includes/config.php');
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Google reCAPTCHA API key configuration
$siteKey     = '6LfxwbolAAAAAGL2aUjfgTnSK8-7rAPWc7EXSg_a';
$secretKey     = '6LfxwbolAAAAAOI1X3ti58JtatsDkFOwBQXk2aDV';


$postData = $statusMsg = $valErr = '';
$status = 'error';

// If the form is submitted
if (isset($_POST['submit'])) {
    // Get the submitted form data
    $username = ($_POST['username']);
    $password = md5($_POST['password']);

    // Validate reCAPTCHA box
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

        // Verify the reCAPTCHA response
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

        // Decode json data
        $responseData = json_decode($verifyResponse);

        // If reCAPTCHA response is valid
        if ($responseData->success) {
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            // print_r($sql);
            // exit();
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
                $_SESSION['alogin'] = $_POST['username'];
                echo "<script> location.href='announcements.php'; </script>";
                // echo "<script type='text/javascript'> document.location ='announcements.php; </script>";
            } else {
                echo "<script>alert('Invalid Password or Email!!');</script>";
            }
        } else {
            $statusMsg = 'Robot verification failed, please try again.';
        }
    } else {
        $statusMsg = 'Please check on the reCAPTCHA box.';
    }
}