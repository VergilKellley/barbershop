<?php
require 'db.php';
//Display business hours
$sql = "SELECT * FROM business_hours_fri;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$fri_hour_from = $row['fri_hour_from'];
$fri_min_from = $row['fri_min_from'];
$fri_hour_to = $row['fri_hour_to'];
$fri_min_to = $row['fri_min_to'];
$fri_ampm_from = $row['fri_ampm_from'];
$fri_ampm_to = $row['fri_ampm_to'];
    }
}