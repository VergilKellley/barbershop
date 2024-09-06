<?php
require 'db.php';
//Display Paragraphs
$sql = "SELECT * FROM index_page_styles_section;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $styles_title = $row['styles_title'];
    $styles_subtitle = $row['styles_subtitle'];

    $img_one_title = $row['img_one_title'];
    $img_one_text = $row['img_one_text'];
    $img_one = $row['img_one'];
    $img_one_description = $row['img_one_description'];

    $img_two_title = $row['img_two_title'];
    $img_two_text = $row['img_two_text'];
    $img_two = $row['img_two'];
    $img_two_description = $row['img_two_description'];

    $img_three_title = $row['img_three_title'];
    $img_three_text = $row['img_three_text'];
    $img_three = $row['img_three'];
    $img_three_description = $row['img_three_description'];

    $img_four_title = $row['img_four_title'];
    $img_four_text = $row['img_four_text'];
    $img_four = $row['img_four'];
    $img_four_description = $row['img_four_description'];
    }
}