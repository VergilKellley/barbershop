<?php
session_start();
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tue_hour_from = filter_var($_POST['tue_hour_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $tue_hour_to = filter_var($_POST['tue_hour_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $tue_min_from = filter_var($_POST['tue_min_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $tue_min_to = filter_var($_POST['tue_min_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $tue_ampm_from = filter_var($_POST['tue_ampm_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $tue_ampm_to = filter_var($_POST['tue_ampm_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE business_hours_tue SET tue_hour_from = '$tue_hour_from', tue_hour_to = '$tue_hour_to', tue_min_from = '$tue_min_from', tue_min_to = '$tue_min_to', tue_ampm_from = '$tue_ampm_from', tue_ampm_to = '$tue_ampm_to'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php');
        die();
    }
} else {
    // redirect to index.php
    // $_SESSION_['color_not_updated'] = "Color not updated. Please try again. If problem persists, please contact your website administrator.";
header('location: index.php');
die();
}
