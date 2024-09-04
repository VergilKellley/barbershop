<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM welcome_to_images;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $welcome_to_img_one_description = $row['welcome_to_img_one_description'];
        $welcome_to_img_one = $row['welcome_to_img_one'];

        $welcome_to_img_two_description = $row['welcome_to_img_two_description'];
        $welcome_to_img_two = $row['welcome_to_img_two'];

        $welcome_to_img_three_description = $row['welcome_to_img_three_description'];
        $welcome_to_img_three = $row['welcome_to_img_three'];

        $welcome_to_img_four_description = $row['welcome_to_img_four_description'];
        $welcome_to_img_four = $row['welcome_to_img_four'];
    }
}