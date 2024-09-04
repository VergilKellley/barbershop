<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM navigation;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $logo_image = $row['logo_image'];
        $logo_image_alt = $row['logo_image_alt'];
        $nav_color = $row['nav_color'];
    }
}