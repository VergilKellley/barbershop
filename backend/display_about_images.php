<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM about_images;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // $logo = $row['logo'];
        $about_header_image = $row['about_header_image'];
        // $about_header_image_alt = $row['about_header_image_alt'];
        $about_image_1 = $row['about_image_1'];
        $about_image_1_alt = $row['about_image_1_alt'];
        $about_image_2 = $row['about_image_2'];
        $about_image_2_alt = $row['about_image_2_alt'];
        $about_image_3 = $row['about_image_3'];
        $about_image_3_alt = $row['about_image_3_alt'];
        $about_image_4 = $row['about_image_4'];
        $about_image_4_alt = $row['about_image_4_alt'];
    }
}