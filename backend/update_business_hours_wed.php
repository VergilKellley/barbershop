<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $wed_hour_from = filter_var($_POST['wed_hour_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $wed_hour_to = filter_var($_POST['wed_hour_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $wed_min_from = filter_var($_POST['wed_min_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $wed_min_to = filter_var($_POST['wed_min_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $wed_ampm_from = filter_var($_POST['wed_ampm_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $wed_ampm_to = filter_var($_POST['wed_ampm_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE business_hours_wed SET wed_hour_from = '$wed_hour_from', wed_hour_to = '$wed_hour_to', wed_min_from = '$wed_min_from', wed_min_to = '$wed_min_to', wed_ampm_from = '$wed_ampm_from', wed_ampm_to = '$wed_ampm_to'";

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
