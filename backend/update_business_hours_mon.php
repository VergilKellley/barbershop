<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mon_hour_from = filter_var($_POST['mon_hour_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mon_hour_to = filter_var($_POST['mon_hour_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mon_min_from = filter_var($_POST['mon_min_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mon_min_to = filter_var($_POST['mon_min_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mon_ampm_from = filter_var($_POST['mon_ampm_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mon_ampm_to = filter_var($_POST['mon_ampm_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE business_hours_mon SET mon_hour_from = '$mon_hour_from', mon_min_from = '$mon_min_from', mon_hour_to = '$mon_hour_to', mon_min_to = '$mon_min_to', mon_ampm_from = '$mon_ampm_from', mon_ampm_to = '$mon_ampm_to'";

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