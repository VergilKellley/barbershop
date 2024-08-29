<?php

session_start();
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $business_name = filter_var($_POST['business_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone = $_POST['phone'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE contact_info SET business_name = '$business_name', phone = '$phone', email = '$email'";

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