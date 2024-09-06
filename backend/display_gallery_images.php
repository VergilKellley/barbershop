<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM gallery_images;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // $logo = $row['logo'];
        $gallery_header_image = $row['gallery_header_image'];
        // $gallery_header_image_alt = $row['gallery_header_image_alt'];
        $gallery_image_1 = $row['gallery_image_1'];
        $gallery_image_1_alt = $row['gallery_image_1_alt'];
        $gallery_image_2 = $row['gallery_image_2'];
        $gallery_image_2_alt = $row['gallery_image_2_alt'];
        $gallery_image_3 = $row['gallery_image_3'];
        $gallery_image_3_alt = $row['gallery_image_3_alt'];
        $gallery_image_4 = $row['gallery_image_4'];
        $gallery_image_4_alt = $row['gallery_image_4_alt'];
        $gallery_image_5 = $row['gallery_image_5'];
        $gallery_image_5_alt = $row['gallery_image_5_alt'];
        $gallery_image_6 = $row['gallery_image_6'];
        $gallery_image_6_alt = $row['gallery_image_6_alt'];
        $gallery_image_7 = $row['gallery_image_7'];
        $gallery_image_7_alt = $row['gallery_image_7_alt'];
        $gallery_image_8 = $row['gallery_image_8'];
        $gallery_image_8_alt = $row['gallery_image_8_alt'];
        $gallery_image_9 = $row['gallery_image_9'];
        $gallery_image_9_alt = $row['gallery_image_9_alt'];
        $gallery_image_10 = $row['gallery_image_10'];
        $gallery_image_10_alt = $row['gallery_image_10_alt'];
        $gallery_image_11 = $row['gallery_image_11'];
        $gallery_image_11_alt = $row['gallery_image_11_alt'];
        $gallery_image_12 = $row['gallery_image_12'];
        $gallery_image_12_alt = $row['gallery_image_12_alt'];
        $gallery_image_13 = $row['gallery_image_13'];
        $gallery_image_13_alt = $row['gallery_image_13_alt'];
        $gallery_image_14 = $row['gallery_image_14'];
        $gallery_image_14_alt = $row['gallery_image_14_alt'];
        $gallery_image_15 = $row['gallery_image_15'];
        $gallery_image_15_alt = $row['gallery_image_15_alt'];
        $gallery_image_16 = $row['gallery_image_16'];
        $gallery_image_16_alt = $row['gallery_image_16_alt'];
        $gallery_image_17 = $row['gallery_image_17'];
        $gallery_image_17_alt = $row['gallery_image_17_alt'];
        $gallery_image_18 = $row['gallery_image_18'];
        $gallery_image_18_alt = $row['gallery_image_18_alt'];
        $gallery_image_19 = $row['gallery_image_19'];
        $gallery_image_19_alt = $row['gallery_image_19_alt'];
        $gallery_image_20 = $row['gallery_image_20'];
        $gallery_image_20_alt = $row['gallery_image_20_alt'];
        $gallery_image_21 = $row['gallery_image_21'];
        $gallery_image_21_alt = $row['gallery_image_21_alt'];
        $gallery_image_22 = $row['gallery_image_22'];
        $gallery_image_22_alt = $row['gallery_image_22_alt'];
    }
}