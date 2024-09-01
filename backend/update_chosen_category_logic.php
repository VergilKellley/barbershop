 <?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_chosen_category_info'])) {

    $category_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $gallery_category = filter_var($_POST['gallery_category'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $gallery_img_alt = filter_var($_POST['gallery_img_alt'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fileName = $_FILES["image"]["name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../uploads/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_chosen_category_query = "UPDATE gallery_images_and_categories SET gallery_category = '$gallery_category',  gallery_img = '$fileName', gallery_img_alt = '$gallery_img_alt' WHERE id = $category_id;";

        $update_chosen_category_result = mysqli_query($conn, $update_chosen_category_query);

        if(!mysqli_errno($conn)) {

            header('location: ../edit_gallery.php#gallery-edits');
            die();
            }
        }
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_edit_category'])) {

    $category_id = filter_var($_POST['category_id'], FILTER_SANITIZE_NUMBER_INT);
    $gallery_category = filter_var($_POST['gallery_category'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

        
        $update_category_query = "UPDATE gallery_categories SET gallery_category = '$gallery_category' WHERE category_id = '$category_id';";

        $update_images_and_category_result = mysqli_query($conn, $update_category_query);

        if(!mysqli_errno($conn)) {
            // redirect to manage users page with success message
            // $_SESSION['add-user-success'] = "New user $firstname $lastname added successfully";
            header('location: ../edit_gallery.php#gallery-edits');
            die();
        }
} else {
    header('location: ../index.php');
    die();
        }


