<?php
require 'db.php';
//Display Paragraphs
$sql = "SELECT * FROM index_page_welcome_to;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $para_one = $row['para_one'];
    $para_two = $row['para_two'];
    }
}