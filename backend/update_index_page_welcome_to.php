<?php
session_start();
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_index_page_welcome_to_para_one'])) {
    $para_one = filter_var($_POST['para_one'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE index_page_welcome_to SET para_one = '$para_one'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#welcome-to');
        die();
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_index_page_welcome_to_para_two'])) {
    $para_two = filter_var($_POST['para_two'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE index_page_welcome_to SET para_two = '$para_two'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#welcome-to');
        die();
    }
} else {
    // redirect to index.php
    // $_SESSION_['color_not_updated'] = "Color not updated. Please try again. If problem persists, please contact your website administrator.";
header('location: index.php');
die();
}