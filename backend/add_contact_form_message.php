<?php 
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif ($_POST['contact_form_name'] == "") {
    header("Location: ../about.php");  
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_contact_form'])) {
    $contact_form_name = $_POST["contact_form_name"];
    $contact_form_phone = $_POST["contact_form_phone"];
    $contact_form_email = $_POST["contact_form_email"];
    $contact_form_message = $_POST["contact_form_message"];

            $sql = "INSERT INTO contact_form_message (contact_form_name, contact_form_phone, contact_form_email, contact_form_message) VALUES ('$contact_form_name', '$contact_form_phone', '$contact_form_email', '$contact_form_message')";
            if(mysqli_query($conn, $sql)){
                // echo "Your image has been uploaded";
                header("Location: ../contact.php");
            } else {
                header("Location: ../index.php");
            } 
}
