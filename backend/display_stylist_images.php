<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM stylist_images;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $stylist_image_alt = $row['services_image_1_alt'];
        $stylist_image_alt = $row['services_image_1_alt'];
        $stylist_image_alt = $row['services_image_1_alt'];
        
    }
}