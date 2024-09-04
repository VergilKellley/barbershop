<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM services_images;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // $logo = $row['logo'];
        $services_header_image = $row['services_header_image'];
        // $services_header_image_alt = $row['services_header_image_alt'];
        $services_image_1 = $row['services_image_1'];
        $services_image_1_alt = $row['services_image_1_alt'];
        $services_image_2 = $row['services_image_2'];
        $services_image_2_alt = $row['services_image_2_alt'];
        $services_image_3 = $row['services_image_3'];
        $services_image_3_alt = $row['services_image_3_alt'];
        $services_image_4 = $row['services_image_4'];
        $services_image_4_alt = $row['services_image_4_alt'];
        $services_image_5 = $row['services_image_5'];
        $services_image_5_alt = $row['services_image_5_alt'];
        $services_image_6 = $row['services_image_6'];
        $services_image_6_alt = $row['services_image_6_alt'];
        $services_image_7 = $row['services_image_7'];
        $services_image_7_alt = $row['services_image_7_alt'];
    }
}