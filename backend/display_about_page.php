<?php
require 'db.php';
//DISPLAY ABOUT PAGE
$sql = "SELECT * FROM about_page;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $about_header_img = $row['about_header_img'];
        $about_header_img_description = $row['about_header_img_description'];
        $about_since_year = $row['about_since_year'];
        $about_paragraph_one = $row['about_paragraph_one'];
        $about_paragraph_two = $row['about_paragraph_two'];
        $about_owner_manager_name = $row['about_owner_manager_name'];
        $about_owner_manager_title = $row['about_owner_manager_title'];
        $about_owner_manager_phone = $row['about_owner_manager_phone'];
        $about_owner_manager_email = $row['about_owner_manager_email'];
        $about_owner_manager_img = $row['about_owner_manager_img'];
        $about_owner_manager_img_description = $row['about_owner_manager_img_description'];
        $about_solutions_title = $row['about_solutions_title'];
        $about_solutions_subtitle = $row['about_solutions_subtitle'];
        $about_stylist_img_one = $row['about_stylist_img_one'];
        $about_stylist_img_one_description = $row['about_stylist_img_one_description'];
        $about_stylist_img_one_name = $row['about_stylist_img_one_name'];
        $about_stylist_img_one_title = $row['about_stylist_img_one_title'];
        $about_stylist_img_two = $row['about_stylist_img_two'];
        $about_stylist_img_two_description = $row['about_stylist_img_two_description'];
        $about_stylist_img_two_name = $row['about_stylist_img_two_name'];
        $about_stylist_img_two_title = $row['about_stylist_img_two_title'];
        $about_stylist_img_three = $row['about_stylist_img_three'];
        $about_stylist_img_three_description = $row['about_stylist_img_three_description'];
        $about_stylist_img_three_name = $row['about_stylist_img_three_name'];
        $about_stylist_img_three_title = $row['about_stylist_img_three_title'];
        $about_products_text = $row['about_products_text'];
    }
}