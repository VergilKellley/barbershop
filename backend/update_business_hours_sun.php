<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sun_hour_from = filter_var($_POST['sun_hour_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sun_hour_to = filter_var($_POST['sun_hour_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sun_min_from = filter_var($_POST['sun_min_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sun_min_to = filter_var($_POST['sun_min_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sun_ampm_from = filter_var($_POST['sun_ampm_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sun_ampm_to = filter_var($_POST['sun_ampm_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE business_hours_sun SET sun_hour_from = '$sun_hour_from', sun_hour_to = '$sun_hour_to', sun_min_from = '$sun_min_from', sun_min_to = '$sun_min_to', sun_ampm_from = '$sun_ampm_from', sun_ampm_to = '$sun_ampm_to'";

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
