<?php
require 'db.php';
//DISPLAY IMAGES
$sql = "SELECT * FROM vip_services;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $services_text = $row['services_text'];
        $vip_service_title = $row['vip_service_title'];
        $vip_service_subtitle = $row['vip_service_subtitle'];
        $vip_service_description = $row['vip_service_description'];
        $vip_img = $row["vip_img"];
        $vip_img_description = $row['vip_img_description'];
    }
}