<?php 
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif ($_POST['news_article_title'] == "") {
    header("Location: ../edit_news_article.php");  
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_news_article'])) {
    $news_article_img_alt = $_POST["news_article_img_alt"];
    $news_article_title = $_POST["news_article_title"];
    $news_article_credits = $_POST["news_article_credits"];
    $news_article_text = htmlspecialchars($_POST["news_article_text"]
    , ENT_QUOTES);
    // $groupname = htmlspecialchars($_POST['user'], ENT_QUOTES);
    // $news_article_text = $_POST["news_article_text"];
    $news_article_read_more = $_POST["news_article_read_more"];
    $news_article_read_more_link = $_POST["news_article_read_more_link"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $sql = "INSERT INTO news_article (news_article_img, news_article_img_alt, news_article_title, news_article_credits, news_article_text, news_article_read_more, news_article_read_more_link) VALUES ('$fileName', '$news_article_img_alt', '$news_article_title', '$news_article_credits', '$news_article_text', '$news_article_read_more', '$news_article_read_more_link')";
            if(mysqli_query($conn, $sql)){
                // echo "Your image has been uploaded";
                header("Location: ../edit_news_article.php");
            } else {
                echo "Image was not uploadedddd";
            }
        }else {
            echo "File is not uploaded";
        }
    } else {
        echo "File type not allowed";
    }
} 