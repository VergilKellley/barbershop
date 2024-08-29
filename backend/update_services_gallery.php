<?php
session_start();
require 'db.php';

// SERVICES GALLERY IMG ONE TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['services_gallery_img_one_text'])) {

    $services_gallery_img_one_title = filter_var($_POST['services_gallery_img_one_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_one_text = filter_var($_POST['services_gallery_img_one_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phone']);

    $sql = "UPDATE services_gallery SET services_gallery_img_one_title = '$services_gallery_img_one_title', services_gallery_img_one_text = '$services_gallery_img_one_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG ONE IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_one'])) {
    $services_gallery_img_one_description = $_POST["services_gallery_img_one_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_one = '$fileName', services_gallery_img_one_description = '$services_gallery_img_one_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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

// SERVICES GALLERY IMG TWO TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['services_gallery_img_two_text'])) {

    $services_gallery_img_two_title = filter_var($_POST['services_gallery_img_two_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_two_text = filter_var($_POST['services_gallery_img_two_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phtwo']);

    $sql = "UPDATE services_gallery SET services_gallery_img_two_title = '$services_gallery_img_two_title', services_gallery_img_two_text = '$services_gallery_img_two_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG TWO IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_two'])) {
    $services_gallery_img_two_description = $_POST["services_gallery_img_two_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_two = '$fileName', services_gallery_img_two_description = '$services_gallery_img_two_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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

// SERVICES GALLERY IMG THREE TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_three_text'])) {

    $services_gallery_img_three_title = filter_var($_POST['services_gallery_img_three_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_three_text = filter_var($_POST['services_gallery_img_three_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phthree']);

    $sql = "UPDATE services_gallery SET services_gallery_img_three_title = '$services_gallery_img_three_title', services_gallery_img_three_text = '$services_gallery_img_three_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG THREE IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_three'])) {
    $services_gallery_img_three_description = $_POST["services_gallery_img_three_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_three = '$fileName', services_gallery_img_three_description = '$services_gallery_img_three_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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

// SERVICES GALLERY IMG FOUR TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_four_text'])) {

    $services_gallery_img_four_title = filter_var($_POST['services_gallery_img_four_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_four_text = filter_var($_POST['services_gallery_img_four_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phfour']);

    $sql = "UPDATE services_gallery SET services_gallery_img_four_title = '$services_gallery_img_four_title', services_gallery_img_four_text = '$services_gallery_img_four_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG FOUR IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_four'])) {
    $services_gallery_img_four_description = $_POST["services_gallery_img_four_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_four = '$fileName', services_gallery_img_four_description = '$services_gallery_img_four_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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

// SERVICES GALLERY IMG FIVE TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_five_text'])) {

    $services_gallery_img_five_title = filter_var($_POST['services_gallery_img_five_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_five_text = filter_var($_POST['services_gallery_img_five_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phfive']);

    $sql = "UPDATE services_gallery SET services_gallery_img_five_title = '$services_gallery_img_five_title', services_gallery_img_five_text = '$services_gallery_img_five_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG FIVE IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_five'])) {
    $services_gallery_img_five_description = $_POST["services_gallery_img_five_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_five = '$fileName', services_gallery_img_five_description = '$services_gallery_img_five_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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

// SERVICES GALLERY IMG SIX TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_six_text'])) {

    $services_gallery_img_six_title = filter_var($_POST['services_gallery_img_six_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_six_text = filter_var($_POST['services_gallery_img_six_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phsix']);

    $sql = "UPDATE services_gallery SET services_gallery_img_six_title = '$services_gallery_img_six_title', services_gallery_img_six_text = '$services_gallery_img_six_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG SIX IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_six'])) {
    $services_gallery_img_six_description = $_POST["services_gallery_img_six_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_six = '$fileName', services_gallery_img_six_description = '$services_gallery_img_six_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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

// SERVICES GALLERY IMG SEVEN TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_seven_text'])) {

    $services_gallery_img_seven_title = filter_var($_POST['services_gallery_img_seven_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_seven_text = filter_var($_POST['services_gallery_img_seven_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phseven']);

    $sql = "UPDATE services_gallery SET services_gallery_img_seven_title = '$services_gallery_img_seven_title', services_gallery_img_seven_text = '$services_gallery_img_seven_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG SEVEN IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_seven'])) {
    $services_gallery_img_seven_description = $_POST["services_gallery_img_seven_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_seven = '$fileName', services_gallery_img_seven_description = '$services_gallery_img_seven_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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

// SERVICES GALLERY IMG EIGHT TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_eight_text'])) {

    $services_gallery_img_eight_title = filter_var($_POST['services_gallery_img_eight_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_eight_text = filter_var($_POST['services_gallery_img_eight_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['pheight']);

    $sql = "UPDATE services_gallery SET services_gallery_img_eight_title = '$services_gallery_img_eight_title', services_gallery_img_eight_text = '$services_gallery_img_eight_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG EIGHT IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_eight'])) {
    $services_gallery_img_eight_description = $_POST["services_gallery_img_eight_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_eight = '$fileName', services_gallery_img_eight_description = '$services_gallery_img_eight_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
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


// SERVICES GALLERY IMG NINE TITLE AND TEXT

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_nine_text'])) {

    $services_gallery_img_nine_title = filter_var($_POST['services_gallery_img_nine_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $services_gallery_img_nine_text = filter_var($_POST['services_gallery_img_nine_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //preg_replace("|(?mi-Us)[^0-9 \\-\\(\\)\\+\\/]|", '', $_REQUEST['phnine']);

    $sql = "UPDATE services_gallery SET services_gallery_img_nine_title = '$services_gallery_img_nine_title', services_gallery_img_nine_text = '$services_gallery_img_nine_text'";

    $sql_result = mysqli_query($conn, $sql);

    if(!mysqli_errno($conn)) {
        // redirect to index.php
        // $_SESSION['color_updated'] = "Color updated successfully";
        header('location: ../index.php#services-gallery');
        die();
    }
}

// SERVICES GALLERY IMG nine IMG
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_services_gallery_img_nine'])) {
    $services_gallery_img_nine_description = $_POST["services_gallery_img_nine_description"];
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $query = "UPDATE services_gallery SET services_gallery_img_nine = '$fileName', services_gallery_img_nine_description = '$services_gallery_img_nine_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../index.php#services-gallery");
            } else {
                echo "Image was not uploaded";
            }
        }else {
            echo "File is not uploaded";
        }
    } else {
        echo "File type not allowed";
    }
}  else {
    // redirect to index.php
    // $_SESSION_['color_not_updated'] = "Color not updated. Please try again. If problem persists, please contact your website administrator.";
        header('location: ../index.php#services-gallery');
        die();
}