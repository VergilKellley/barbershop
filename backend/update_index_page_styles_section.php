<?php
session_start();
require 'db.php';

// STYLES TITLE AND SUBTITLE

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_index_page_styles_titles'])) {
    $styles_title = filter_var($_POST['styles_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $styles_subtitle = filter_var($_POST['styles_subtitle'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE index_page_styles_section SET styles_title = '$styles_title', styles_subtitle = '$styles_subtitle'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#styles');
        die();
    }
}

// IMAGE ONE TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_index_page_styles_images_one'])) {
    $img_one_title = filter_var($_POST['img_one_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $img_one_text = filter_var($_POST['img_one_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE index_page_styles_section SET img_one_title = '$img_one_title', img_one_text = '$img_one_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#styles');
        die();
    }
}

// IMAGE TWO TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_index_page_styles_images_two'])) {
    $img_two_title = filter_var($_POST['img_two_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $img_two_text = filter_var($_POST['img_two_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE index_page_styles_section SET img_two_title = '$img_two_title', img_two_text = '$img_two_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#styles');
        die();
    }
}

// IMAGE THREE TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_index_page_styles_images_three'])) {
    $img_three_title = filter_var($_POST['img_three_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $img_three_text = filter_var($_POST['img_three_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE index_page_styles_section SET img_three_title = '$img_three_title', img_three_text = '$img_three_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#styles');
        die();
    }
}
// IMAGE FOUR TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_index_page_styles_images_four'])) {
    $img_four_title = filter_var($_POST['img_four_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $img_four_text = filter_var($_POST['img_four_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE index_page_styles_section SET img_four_title = '$img_four_title', img_four_text = '$img_four_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#styles');
        die();
    }
} else {
    // redirect to index.php
    // $_SESSION_['color_not_updated'] = "Color not updated. Please try again. If problem persists, please contact your website administrator.";
header('location: ../index.php');
die();
}