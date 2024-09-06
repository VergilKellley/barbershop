<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM contact_form_message;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $contact_form_name = $row['contact_form_name'];
    $contact_form_phone = $row['contact_form_phone'];
    $contact_form_email = $row['contact_form_email'];
    $business_state = $row['business_state'];
    $contact_form_message = $row['contact_form_message'];
    }
}