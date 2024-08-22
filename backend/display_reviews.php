<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM reviews;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reviews_title = $row['reviews_title'];
        $reviewers_name_1 = $row['reviewers_name_1'];
        $reviewers_comments_1 = $row['reviewers_comments_1'];
        $reviewers_name_2 = $row['reviewers_name_2'];
        $reviewers_comments_2 = $row['reviewers_comments_2'];
        $reviewers_name_3 = $row['reviewers_name_3'];
        $reviewers_comments_3 = $row['reviewers_comments_3'];
        $reviewers_name_4 = $row['reviewers_name_4'];
        $reviewers_comments_4 = $row['reviewers_comments_4'];
        $reviewers_name_5 = $row['reviewers_name_5'];
        $reviewers_comments_5 = $row['reviewers_comments_5'];
    }
}