<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM contact_images;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // $logo = $row['logo'];
        $contact_header_image = $row['contact_header_image'];
    }
}