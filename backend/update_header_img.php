<?php
require 'db.php';
// https://www.youtube.com/watch?v=adMjzWiG21U
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_header_img'])) {
    $header_img_description = $_POST["header_img_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "INSERT INTO header_image (header_img, header_img_description) VALUES ('$fileName', '$header_img_description')";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../home#header-image");
            } else {
                echo "Image was not uploaded";
            }
        }else {
            echo "File is not uploaded";
        }
    } else {
        echo "File type not allowed";
    }
}

// check if php.ini is set to on
if (empty($_FILES)) {
    exit('$_FILES is empty - is file_uploads enabled in php.ini?');
}

// check for file upload errors
if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
    switch ($_FILES["image"]["error"]) {
        case UPLOAD_ERR_PARTIAL:
            exit("File only partially uploaded");
            break;
        case UPLOAD_ERR_NO_FILE:
            exit("No file was uploaded");
            break;
        case UPLOAD_ERR_EXTENSION:
            exit("File upload stopped by a PHP extension");
            break;
        case UPLOAD_ERR_FORM_SIZE:
            exit("File exceeds MAX_FILE_SIZE in the HTML form");
            break;
        case UPLOAD_ERR_INI_SIZE:
            exit("File exceeds upload_max_filesize in php.ini");
        case UPLOAD_ERR_NO_TMP_DIR:
            exit("Temporary folder not found");
            break;
        case UPLOAD_ERR_CANT_WRITE:
            exit("Faild to write file");
            break;
        default:
            exit("Uknown upload error");
            break;
    }
}

// if ($_FILES["image"]["size"] > 1048576) {
//     exit("File too large (max 1MB)");
// }

// mime type can be spuffed so we should get mime type using $finfo below
// $finfo = new finfo(FILEINFO_MIME_TYPE);
// $mime_type = $finfo->file($_FILES["image"]["tmp_name"]);



// $mime_types = ["image/gif", "image/png", "image/jpeg", "image/jpg"];

// if ( ! in_array($_FILES["image"]["type"], $mime_types)) {
//     exit("Invalid file type");
// }

// print_r($_FILES);