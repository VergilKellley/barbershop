<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM display_business_hours_mon;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $mon_hour_from = $row['mon_hour_from'];
    $mon_min_from = $row['mon_min_from'];
    $mon_hour_to = $row['mon_hour_to'];
    $mon_min_to = $row['mon_min_to'];
    $mon_ampm_from = $row['mon_ampm_from'];
    $mon_ampm_to = $row['mon_ampm_to'];

    $tue_hour_from = $row['tue_hour_from'];
    $tue_min_from = $row['tue_min_from'];
    $tue_hour_to = $row['tue_hour_to'];
    $tue_min_to = $row['tue_min_to'];
    $tue_ampm_from = $row['tue_ampm_from'];
    $tue_ampm_to = $row['tue_ampm_to'];

    $wed_hour_from = $row['wed_hour_from'];
    $wed_min_from = $row['wed_min_from'];
    $wed_hour_to = $row['wed_hour_to'];
    $wed_min_to = $row['wed_min_to'];
    $wed_ampm_from = $row['wed_ampm_from'];
    $wed_ampm_to = $row['wed_ampm_to'];

    $thurs_hour_from = $row['thurs_hour_from'];
    $thurs_min_from = $row['thurs_min_from'];
    $thurs_hour_to = $row['thurs_hour_to'];
    $thurs_min_to = $row['thurs_min_to'];
    $thurs_ampm_from = $row['thurs_ampm_from'];
    $thurs_ampm_to = $row['thurs_ampm_to'];

    $fri_hour_from = $row['fri_hour_from'];
    $fri_min_from = $row['fri_min_from'];
    $fri_hour_to = $row['fri_hour_to'];
    $fri_min_to = $row['fri_min_to'];
    $fri_ampm_from = $row['fri_ampm_from'];
    $fri_ampm_to = $row['fri_ampm_to'];

    $sat_hour_from = $row['sat_hour_from'];
    $sat_min_from = $row['sat_min_from'];
    $sat_hour_to = $row['sat_hour_to'];
    $sat_min_to = $row['sat_min_to'];
    $sat_ampm_from = $row['sat_ampm_from'];
    $sat_ampm_to = $row['sat_ampm_to'];

    $sun_hour_from = $row['sun_hour_from'];
    $sun_min_from = $row['sun_min_from'];
    $sun_hour_to = $row['sun_hour_to'];
    $sun_min_to = $row['sun_min_to'];
    $sun_ampm_from = $row['sun_ampm_from'];
    $sun_ampm_to = $row['sun_ampm_to'];
    }
}