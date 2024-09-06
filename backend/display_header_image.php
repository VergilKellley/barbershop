<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM header_image;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $header_img_description = $row['header_img_description'];
        $header_img = $row['header_img'];
    }
}