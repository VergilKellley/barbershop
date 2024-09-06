<?php

require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM gallery_images_and_categories;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $gallery_category = $row['gallery_category'];
        $gallery_img = $row['gallery_img'];
        $gallery_img_alt = $row['gallery_img_alt'];
    }
}