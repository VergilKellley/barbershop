<?php 
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif ($_POST['gallery_category'] == "" ) {
    header("Location: ../edit_gallery.php");  
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_gallery_category_name'])) {

    GLOBAL $gallery_category;
    $gallery_category = mysqli_real_escape_string($conn, $_POST['gallery_category']);

    $check_if_category_exists = "SELECT * FROM gallery_categories";
    $result = mysqli_query($conn, $check_if_category_exists);
    // $resultCheck = mysqli_num_rows($result);

        echo "<table border = '1px'>";
        while ($row = mysqli_fetch_array($result)) { 
                
                $get_category_id = $row[0];
                $get_gallery_category = $row[1];
                echo "<tr>";
                echo "<td> {$get_category_id} </td>";
                echo "<td> $get_gallery_category </td>"; 
                if ($get_gallery_category == $gallery_category) {
                    echo $get_gallery_category . "equals" . $gallery_category;
                    header("Location: ../edit_gallery.php");
                    exit();
                }        
                echo "</tr>";
                
                
            }  echo "</table>";
            // echo "gallery again: " . $get_gallery_category;
            // exit();
             if ($get_gallery_category == $gallery_category) {
            
                // echo $get_gallery_category . "already exits";
                // header('location: ../edit_gallery.php');
             
        }else {
                $gallery_category = mysqli_real_escape_string($conn, $_POST['gallery_category']);
                $sql = "INSERT INTO gallery_categories (gallery_category) VALUES ('$gallery_category')";
                $result = mysqli_query($conn, $sql);
                header("location: ../edit_gallery.php");
            }
        }

    

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_new_category_info'])) {

    $gallery_category = mysqli_real_escape_string($conn, $_POST['gallery_category']);
    
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    $gallery_img_alt = mysqli_real_escape_string($conn, $_POST['gallery_img_alt']);
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {

            $query = "INSERT INTO gallery_images_and_categories (category_id, gallery_category, gallery_img, gallery_img_alt) VALUES ('$category_id ', '$gallery_category', '$fileName', '$gallery_img_alt')";

            // $query = "UPDATE gallery_images_and_categories SET gallery_category = '$gallery_category', gallery_img = '$fileName', gallery_img_alt = '$gallery_img_alt'";

            // $query = "UPDATE gallery_page SET gallery_header_img = '$fileName', gallery_header_img_description = '$gallery_header_img_description'";
            if(mysqli_query($conn, $query)){
                // echo "Your image has been uploaded";
                header("Location: ../edit_gallery.php#gallery-edits");
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
    