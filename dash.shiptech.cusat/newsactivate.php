<?php

session_start();
error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
    $idE = $_GET["idE"];
    $idD = $_GET["idD"];
    if (!empty($idE)) {
        $status = '0';
        $sql = "UPDATE  news SET status='$status' WHERE id = '$idE'";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0) {
            // echo '<script>alert("Post disabled")</script>';
            echo '<script>window.location = "news.php";</script>';
        } else {
            echo '<script>alert("Something went wrong please try again later")</script>';
            echo '<script>window.location = "news.php";</script>';
        }
    } elseif (!empty($idD)) {
        $status = '1';
        $sql = "UPDATE  news SET status='$status' WHERE id = '$idD'";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0) {
            // echo '<script>alert("Post Enabled")</script>';
            echo '<script>window.location = "news.php";</script>';
        } else {
            echo '<script>alert("Something went wrong please try again later")</script>';
            echo '<script>window.location = "news.php";</script>';
        }
    }
}