<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM business_hours_sun;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$sun_hour_from = $row['sun_hour_from'];
$sun_min_from = $row['sun_min_from'];
$sun_hour_to = $row['sun_hour_to'];
$sun_min_to = $row['sun_min_to'];
$sun_ampm_from = $row['sun_ampm_from'];
$sun_ampm_to = $row['sun_ampm_to'];
    }
}