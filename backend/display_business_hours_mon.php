<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM business_hours_mon;";
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
    }
}