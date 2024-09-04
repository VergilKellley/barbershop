<?php
require 'db.php';
//DISPLAY SERVICES GALLERY
$sql = "SELECT * FROM services_gallery;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $services_gallery_img_one_title = $row['services_gallery_img_one_title'];
        $services_gallery_img_one_text = $row['services_gallery_img_one_text'];
        $services_gallery_img_one = $row['services_gallery_img_one'];
        $services_gallery_img_one_description = $row['services_gallery_img_one_description'];

        $services_gallery_img_two_title = $row['services_gallery_img_two_title'];
        $services_gallery_img_two_text = $row['services_gallery_img_two_text'];
        $services_gallery_img_two = $row['services_gallery_img_two'];
        $services_gallery_img_two_description = $row['services_gallery_img_two_description'];

        $services_gallery_img_three_title = $row['services_gallery_img_three_title'];
        $services_gallery_img_three_text = $row['services_gallery_img_three_text'];
        $services_gallery_img_three = $row['services_gallery_img_three'];
        $services_gallery_img_three_description = $row['services_gallery_img_three_description'];

        $services_gallery_img_four_title = $row['services_gallery_img_four_title'];
        $services_gallery_img_four_text = $row['services_gallery_img_four_text'];
        $services_gallery_img_four = $row['services_gallery_img_four'];
        $services_gallery_img_four_description = $row['services_gallery_img_four_description'];

        $services_gallery_img_five_title = $row['services_gallery_img_five_title'];
        $services_gallery_img_five_text = $row['services_gallery_img_five_text'];
        $services_gallery_img_five = $row['services_gallery_img_five'];
        $services_gallery_img_five_description = $row['services_gallery_img_five_description'];

        $services_gallery_img_six_title = $row['services_gallery_img_six_title'];
        $services_gallery_img_six_text = $row['services_gallery_img_six_text'];
        $services_gallery_img_six = $row['services_gallery_img_six'];
        $services_gallery_img_six_description = $row['services_gallery_img_six_description'];

        $services_gallery_img_seven_title = $row['services_gallery_img_seven_title'];
        $services_gallery_img_seven_text = $row['services_gallery_img_seven_text'];
        $services_gallery_img_seven = $row['services_gallery_img_seven'];
        $services_gallery_img_seven_description = $row['services_gallery_img_seven_description'];

        $services_gallery_img_eight_title = $row['services_gallery_img_eight_title'];
        $services_gallery_img_eight_text = $row['services_gallery_img_eight_text'];
        $services_gallery_img_eight = $row['services_gallery_img_eight'];
        $services_gallery_img_eight_description = $row['services_gallery_img_eight_description'];

        $services_gallery_img_nine_title = $row['services_gallery_img_nine_title'];
        $services_gallery_img_nine_text = $row['services_gallery_img_nine_text'];
        $services_gallery_img_nine = $row['services_gallery_img_nine'];
        $services_gallery_img_nine_description = $row['services_gallery_img_nine_description'];
    }
}