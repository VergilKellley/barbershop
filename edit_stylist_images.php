<?php
session_start();
require "backend/db.php";
// if (!isset($_SESSION["useruid"])) {

//     header("Location: index.php");
// }
require "backend/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    input {
        padding: 12px 18px;
        font-size: 16px;
    }

    textarea {
        padding: 20px;
    }

    a {
        text-decoration: none;
        line-height: normal !important;
        text-align: center
    }

    .nth-child-bkgd-color:nth-child(even) {
        background-color: #ededed;
    }

    .btn {
        width: 100px;
        padding: 12px 16px;
        border-radius: 5px;
    }

    .btn-blk {
        background-color: #333;
        color: #fff;
    }

    .btn-blk:hover {
        background-color: #fff;
        color: #333;
    }

    .btn-edit {
        background-color: green;
        color: #fff;
    }

    .btn-edit:hover {
        background-color: #fff;
        color: green;
        border: 1px solid green
    }

    .btn-delete {
        background-color: red;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #fff;
        color: red;
        border: 1px solid red;
        cursor: pointer;
    }

    @media (max-width: 670px) {
    #gallery-edits {
        flex-direction: column !important;
    }
    .mobile-edit-photos {
        width: 100%;
        padding: 0 20px;
    }
    .mobile-edit-photos span img {
        width: 100% !important;
    }
    .form-container {
        width: 100% !important;
    }
}

    @media (max-width:550px) {
        .form-container {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>

    <section id='gallery-edits' class="stylist_info_container;"
        style="display:flex; justify-content:center; place-items:center;">
        
        <div class='form-container' style="display: flex; gap:4rem; padding: 20px">
            
            <form action="backend/add_new_stylist_images.php" class="stylist_form" method="POST"
                enctype="multipart/form-data">
                <div>
                <a href="about.php">Back</a>
            </div>
            <br>
                <div>
                    <h2>add image</h2>
                </div>
                <br>
                <div style="display:flex; flex-direction:column; gap:1rem">

                    <input type="hidden" value='<?= $gallery_category; ?>' name='gallery_category'>


                    <label for="services_description">image</label>
                    <input type="file" name="image">

                    <label for="stylist_img_alt">image description</label>
                    <input type="text" name="stylist_img_alt">

                    <label for="stylist_name">technician's name</label>
                    <input type="text" name="stylist_name" id="stylist_name" placeholder="tommy two-hands">

                    <label for="stylist_title">title</label>
                    <input type="text" name="stylist_title" id="stylist_title">
                    <button name="update_stylist_images" class="btn btn-blk">SAVE</button>
                </div>
            </form>
        </div>
        <br>
        <div class='mobile-edit-photos'>
            <div>
                <h2>edit photos</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; height: 500px; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $stylist_img_query = "SELECT * FROM stylist_images ORDER BY stylist_name ASC";
                    $stylist_img_result = mysqli_query($conn, $stylist_img_query);
                    ?>
                <?php while ($stylist_img = mysqli_fetch_assoc($stylist_img_result)) : ?>
                <div class='nth-child-bkgd-color' style='border:1px solid #333; padding:10px; line-height: 1.5'>
                    <input type="hidden" name="id" value="<?= $stylist_img['id'] ?>">
                    <?php
                            GLOBAL $stylist_id;
                            $stylist_id = $stylist_img['id'];
                            ?>

                    <br>
                    <td>
                        <span style="display:flex; flex-direction:column; align-items:center; font-weight:bold">image:
                            <img style='width:200px' src='uploads/<?= $stylist_img['stylist_img'] ?>'
                                alt="<?= $stylist_img['stylist_img_alt'] ?>">
                        </span>
                    </td>
                    <br>
                    
                    <td><span style='font-weight:bold'>name: <?= $stylist_img['stylist_name']; ?></span>
                    </td>
                    <br>
                    <td><span style='font-weight:bold'>title: <?= $stylist_img['stylist_title']; ?></span>
                    </td>
                    <br>
                    <td><span style='font-weight:bold'>image description: <?= $stylist_img['stylist_img_alt']; ?></span>
                    </td>
                    <?php
                    
                        echo "<br><br>
                        <div style='display:flex'>
                        <td><a class='btn btn-edit' href='backend/update_stylist_images_info.php?id=" . $stylist_img['id'] . "'>Edit</a></td>

                        <form action='backend/delete_stylist_images_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_stylist_img_btn' value='" . $stylist_img['id'] . "'> Delete</button>
                                    </form>
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        </div>
        <div>
        </div>
        </div>
    </section>
    <script src="js/closeModals.js" defer></script>
</body>

</html>