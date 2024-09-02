<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $thurs_hour_from = filter_var($_POST['thurs_hour_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thurs_hour_to = filter_var($_POST['thurs_hour_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thurs_min_from = filter_var($_POST['thurs_min_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thurs_min_to = filter_var($_POST['thurs_min_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thurs_ampm_from = filter_var($_POST['thurs_ampm_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thurs_ampm_to = filter_var($_POST['thurs_ampm_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE business_hours_thurs SET thurs_hour_from = '$thurs_hour_from', thurs_hour_to = '$thurs_hour_to', thurs_min_from = '$thurs_min_from', thurs_min_to = '$thurs_min_to', thurs_ampm_from = '$thurs_ampm_from', thurs_ampm_to = '$thurs_ampm_to'";

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
