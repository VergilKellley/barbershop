<?php
require 'db.php';
// https://www.youtube.com/watch?v=adMjzWiG21U

// WELCOME TO IMG ONE
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_welcome_to_img_one'])) {
    $welcome_to_img_one_description = $_POST["welcome_to_img_one_description"];
    $welcome_to_img_one = $_FILES["welcome_to_img_one"]["name"];

    $ext = pathinfo($welcome_to_img_one, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["welcome_to_img_one"]["tmp_name"];
    $targetPath = "../uploads/".$welcome_to_img_one;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE welcome_to_images SET welcome_to_img_one = '$welcome_to_img_one'";
            if(mysqli_query($conn, $query)){
                // echo "Your welcome_to_img_one has been uploaded";
                header("Location: ../index.php#welcome-to");
            } else {
                echo "welcome_to_img_one was not uploaded";
            }
        }else {
            echo "File is not uploaded";
        }
    } else {
        echo "File type not allowed";
    }
}

// WELCOME TO IMG TWO
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_welcome_to_img_two'])) {
    $welcome_to_img_two_description = $_POST["welcome_to_img_two_description"];
    $welcome_to_img_two = $_FILES["welcome_to_img_two"]["name"];

    $ext = pathinfo($welcome_to_img_two, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $welcome_to_img_two_tempName = $_FILES["welcome_to_img_two"]["tmp_name"];
    $targetPath = "../uploads/".$welcome_to_img_two;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($welcome_to_img_two_tempName, $targetPath)) {
            $query = "UPDATE welcome_to_images SET welcome_to_img_two = '$welcome_to_img_two'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#welcome-to");
            } else {
                echo "image was not uploaded";
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
// if ($_FILES["welcome_to_img_two"]["error"] !== UPLOAD_ERR_OK) {
//     switch ($_FILES["welcome_to_img_two"]["error"]) {
//         case UPLOAD_ERR_PARTIAL:
//             exit("File only partially uploaded");
//             break;
//         case UPLOAD_ERR_NO_FILE:
//             exit("No file was uploaded");
//             break;
//         case UPLOAD_ERR_EXTENSION:
//             exit("File upload stopped by a PHP extension");
//             break;
//         case UPLOAD_ERR_FORM_SIZE:
//             exit("File exceeds MAX_FILE_SIZE in the HTML form");
//             break;
//         case UPLOAD_ERR_INI_SIZE:
//             exit("File exceeds upload_max_filesize in php.ini");
//         case UPLOAD_ERR_NO_TMP_DIR:
//             exit("Temporary folder not found");
//             break;
//         case UPLOAD_ERR_CANT_WRITE:
//             exit("Faild to write file");
//             break;
//         default:
//             exit("Uknown upload error");
//             break;
//     }
// }

// if ($_FILES["welcome_to_img_two"]["size"] > 1048576) {
//     exit("File too large (max 1MB)");
// }

// // mime type can be spuffed so we should get mime type using $finfo below
// $finfo = new finfo(FILEINFO_MIME_TYPE);
// $mime_type = $finfo->file($_FILES["welcome_to_img_two"]["tmp_name"]);



// $mime_types = ["welcome_to_img_two/gif", "welcome_to_img_two/png", "welcome_to_img_two/jpeg", "welcome_to_img_two/jpg"];

// if ( ! in_array($_FILES["welcome_to_img_two"]["type"], $mime_types)) {
//     exit("Invalid file type");
// }
// print_r($_FILES);