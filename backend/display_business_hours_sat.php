<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM business_hours_sat;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$sat_hour_from = $row['sat_hour_from'];
$sat_min_from = $row['sat_min_from'];
$sat_hour_to = $row['sat_hour_to'];
$sat_min_to = $row['sat_min_to'];
$sat_ampm_from = $row['sat_ampm_from'];
$sat_ampm_to = $row['sat_ampm_to'];
    }
}