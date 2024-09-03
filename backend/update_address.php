<?php

session_start();
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $street_address = filter_var($_POST['street_address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $suite_unit = filter_var($_POST['suite_unit'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $city = filter_var($_POST['city'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_state = filter_var($_POST['business_state'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_state = filter_var($_POST['business_state'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $zip = filter_var($_POST['zip'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "UPDATE business_address SET  street_address = '$street_address', suite_unit = '$suite_unit', city = '$city', business_state = '$business_state', zip = '$zip'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php');
        die();
    }
} else {
    // redirect to index.php
    $_SESSION_['color_not_updated'] = "Color not updated. Please try again. If problem persists, please contact your website administrator.";
header('location: index.php');
die();
}