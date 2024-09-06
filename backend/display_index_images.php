<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM index_images;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $logo = $row['logo'];
        $index_header_image = $row['index_header_image'];
        $index_header_image_alt = $row['index_header_image_alt'];
        $index_image_1 = $row['index_image_1'];
        $index_image_1_alt = $row['index_image_1_alt'];
        $index_image_2 = $row['index_image_2'];
        $index_image_2_alt = $row['index_image_2_alt'];
        $index_image_3 = $row['index_image_3'];
        $index_image_3_alt = $row['index_image_3_alt'];
        $index_image_4 = $row['index_image_4'];
        $index_image_4_alt = $row['index_image_4_alt'];
        $index_image_5 = $row['index_image_5'];
        $index_image_5_alt = $row['index_image_5_alt'];
        $index_image_6 = $row['index_image_6'];
        $index_image_6_alt = $row['index_image_6_alt'];
        $index_image_7 = $row['index_image_7'];
        $index_image_7_alt = $row['index_image_7_alt'];
        $index_image_8 = $row['index_image_8'];
        $index_image_8_alt = $row['index_image_8_alt'];
        $index_image_9 = $row['index_image_9'];
        $index_image_9_alt = $row['index_image_9_alt'];
        $index_image_10 = $row['index_image_10'];
        $index_image_10_alt = $row['index_image_10_alt'];
        $index_image_11 = $row['index_image_11'];
        $index_image_11_alt = $row['index_image_11_alt'];
        $index_image_12 = $row['index_image_12'];
        $index_image_12_alt = $row['index_image_12_alt'];
        $index_image_13 = $row['index_image_13'];
        $index_image_13_alt = $row['index_image_13_alt'];
        $index_image_14 = $row['index_image_14'];
        $index_image_14_alt = $row['index_image_14_alt'];
        $index_image_15 = $row['index_image_15'];
        $index_image_15_alt = $row['index_image_15_alt'];
        $index_image_16 = $row['index_image_16'];
        $index_image_16_alt = $row['index_image_16_alt'];
        $index_image_17 = $row['index_image_17'];
        $index_image_17_alt = $row['index_image_17_alt'];
        $index_image_18 = $row['index_image_18'];
        $index_image_18_alt = $row['index_image_18_alt'];
    }
}