<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fri_hour_from = filter_var($_POST['fri_hour_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fri_hour_to = filter_var($_POST['fri_hour_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fri_min_from = filter_var($_POST['fri_min_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fri_min_to = filter_var($_POST['fri_min_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fri_ampm_from = filter_var($_POST['fri_ampm_from'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fri_ampm_to = filter_var($_POST['fri_ampm_to'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "UPDATE business_hours_fri SET fri_hour_from = '$fri_hour_from', fri_hour_to = '$fri_hour_to', fri_min_from = '$fri_min_from', fri_min_to = '$fri_min_to', fri_ampm_from = '$fri_ampm_from', fri_ampm_to = '$fri_ampm_to'";

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
