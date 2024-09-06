<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM business_hours_tue;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$tue_hour_from = $row['tue_hour_from'];
$tue_min_from = $row['tue_min_from'];
$tue_hour_to = $row['tue_hour_to'];
$tue_min_to = $row['tue_min_to'];
$tue_ampm_from = $row['tue_ampm_from'];
$tue_ampm_to = $row['tue_ampm_to'];
    }
}