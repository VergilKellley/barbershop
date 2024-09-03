<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sat_hour_from = filter_var($_POST['sat_hour_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sat_hour_to = filter_var($_POST['sat_hour_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sat_min_from = filter_var($_POST['sat_min_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sat_min_to = filter_var($_POST['sat_min_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sat_ampm_from = filter_var($_POST['sat_ampm_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sat_ampm_to = filter_var($_POST['sat_ampm_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE business_hours_sat SET sat_hour_from = '$sat_hour_from', sat_hour_to = '$sat_hour_to', sat_min_from = '$sat_min_from', sat_min_to = '$sat_min_to', sat_ampm_from = '$sat_ampm_from', sat_ampm_to = '$sat_ampm_to'";

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
