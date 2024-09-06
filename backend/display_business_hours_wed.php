<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM business_hours_wed;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$wed_hour_from = $row['wed_hour_from'];
$wed_min_from = $row['wed_min_from'];
$wed_hour_to = $row['wed_hour_to'];
$wed_min_to = $row['wed_min_to'];
$wed_ampm_from = $row['wed_ampm_from'];
$wed_ampm_to = $row['wed_ampm_to'];
    }
}