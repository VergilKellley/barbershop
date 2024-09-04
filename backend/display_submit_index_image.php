<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM submit_index_image;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // $logo = $row['logo'];
        $submit_index_image = $row['submit_index_image'];
    }
}