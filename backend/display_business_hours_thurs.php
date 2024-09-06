<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM business_hours_thurs;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$thurs_hour_from = $row['thurs_hour_from'];
$thurs_min_from = $row['thurs_min_from'];
$thurs_hour_to = $row['thurs_hour_to'];
$thurs_min_to = $row['thurs_min_to'];
$thurs_ampm_from = $row['thurs_ampm_from'];
$thurs_ampm_to = $row['thurs_ampm_to'];
    }
}