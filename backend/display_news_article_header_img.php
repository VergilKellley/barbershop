<?php
require 'db.php';
//DISPLAY ABOUT PAGE
$sql = "SELECT * FROM news_article_header_img;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $news_article_header_img = $row['news_article_header_img'];
        $news_article_header_img_alt = $row['news_article_header_img_alt'];
    }
}