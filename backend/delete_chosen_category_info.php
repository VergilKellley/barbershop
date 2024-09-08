<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_category_btn'])) {
    $delete_category_id = $_POST['delete_category_btn'];

    $delete_category_query = "DELETE FROM gallery_categories WHERE category_id = '$delete_category_id'";

    $delete_category = mysqli_query($conn, $delete_category_query);

    if($delete_category) {
        header("Location: ../edit_gallery.php#gallery-edits");
        exit();
    } else {

        $_SESSION['can_not_delete'] = "Can not delete category. Must delete all images in this category first.";
        header("Location: ../edit_gallery.php");
    }
}

// DELETE IMG FROM GALLERY_IMAGES_AND_CATEGORIES
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_img_btn'])) {
    $delete_category_id = $_POST['delete_img_btn'];

    $delete_category_query = "DELETE FROM gallery_images_and_categories WHERE id = '$delete_category_id'";

    $delete_category = mysqli_query($conn, $delete_category_query);

    if($delete_category) {
        header("Location: ../edit_gallery.php#gallery-edits");
        exit();
    } else {
        echo "Something went wrong.";
    }
}