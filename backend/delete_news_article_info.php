<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_news_article_btn'])) {
    $news_article_id = $_POST['delete_news_article_btn'];

    $delete_news_article_query = "DELETE FROM news_article WHERE id = '$news_article_id'";

    $delete_news_article = mysqli_query($conn, $delete_news_article_query);

    if($delete_news_article) {
        header("Location: ../edit_news_article.php");
        exit();
    } else {

        $_SESSION['can_not_delete'] = "Can not delete category. Must delete all images in this category first.";
        header("Location: ../edit_gallery.php");
    }
}

// DELETE IMG FROM GALLERY_IMAGES_AND_CATEGORIES
// if ($_SERVER["REQUEST_METHOD"] != "POST") {
//     exit("POST request method required");
// } elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_stylist_img_btn'])) {
//     $delete_stylist_img_id = $_POST['delete_stylist_img_btn'];

//     $delete_category_query = "DELETE FROM stylist_images WHERE id = '$delete_stylist_img_id'";

//     $delete_img = mysqli_query($conn, $delete_category_query);

//     if($delete_img) {
//         header("Location: update_stylist_images_info.php");
//         exit();
//     } else {
//         echo "Something went wrong.";
//     }
// }