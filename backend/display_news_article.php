<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM news_article;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $news_article_img = $row['news_article_img'];
        $news_article_img_alt = $row['news_article_img_alt'];
        $news_article_title = $row['news_article_title'];
        $news_article_credits = $row['news_article_credits'];
        $news_article_text = $row['news_article_text'];
        $news_article_read_more = $row['news_article_read_more'];
        $news_article_read_more_link = $row['news_article_read_more_link'];
        // $news_article_read_more_title = $row['news_article_read_more_title'];
    }
}