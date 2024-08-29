<?php
require 'db.php';

// min part 2 min 6:51:10
// fetch stylist data from database if id is set
if (isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $chosen_service_info_query = "SELECT * FROM services_chosen WHERE id = $id";
  $chosen_service_info_result = mysqli_query($conn, $chosen_service_info_query);
  $chosen_service = mysqli_fetch_assoc($chosen_service_info_result);
} else {
  header('location: ../index.php');
  die();
}
?>

<!DOCTYPE php>
<php lang="en">
  <head>
    <!-- https://www.youtube.com/watch?v=izWc4pL_esc&list=PLFzi7Iy-LHGOTKhjjihNpnELb4go8q7JK&index=2 -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media-query.css" />
    <!-- fontawesome  -->
    <script
      src="https://kit.fontawesome.com/7a6c6b42a6.js"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>
  <body>

    <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
        <div style='width: 100%; max-width: 525px;'>
            <a style='font-size:18px' href="../services_chosen_edit.php"><-- Back</a>
            <h2 style='font-size:22px; padding: 30px;'>Edit <?= $chosen_service['service_title'] ?></h2>
            <form style="text-align: center; display:flex; flex-direction:column; gap 1rem; width:100%"
                action="update_chosen_service_logic.php" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">
                <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $chosen_service['id'] ?>" />

                <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">
                    <label for="service_title">Service Title</label>
                    <input style="padding:10px; font-size: 22px" type="text" name="service_title" id="stylist_name"
                        value="<?= $chosen_service['service_title'] ?>" />



                    <label for="services_description">Service Description</label>
                    <textarea style='resize:none; font-size: 22px;' name="services_description"
                        id="services_description" cols="30"
                        rows="10"><?= $chosen_service['services_description'] ?></textarea>

                    <label for="service_price">Price</label>
                    <input style=" font-size: 22px; padding:10px" type="text" name="service_price"
                        id="service_price" value="<?= $chosen_service['service_price'] ?>" />

                    <label for="services_price">Time</label>
                    <input style=" font-size:22px; padding:10px" type="text" name="service_time" id="service_time"
                        value="<?= $chosen_service['service_time'] ?>" />
                    <button style=" font-size: 22px" type="submit" name="submit_update_chosen_service_info">Update
                        <?= $chosen_service['service_title'] ?> Info</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>





<!-- <section style='max-width: 300px'>

    <div style="width:100%;">

        <a style='font-size:5vw' href="../stylist_info.php">
            <-- Back</a>
                <h2 style='font-size:7.5vw;
    font-size: 3rem; padding: 30px;'>Edit <?= $chosen_service['service_title'] ?></h2>

                <div>
                    <div>
                        <form style="text-align: center; display:flex; flex-direction:column; gap 1rem" action="update_chosen_service_logic.php"
                            enctype="multipart/form-data" method="POST">

                            <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">
                            <input style="margin-bottom:1rem" type="hidden" name="id"
                                value="<?= $chosen_service['id'] ?>" />

                            <div style="display: flex; flex-direction:column; font-size:50px">
                                <label  for="service_title">Service Title</label>
                                <input style="padding:20px; font-size: 50px" type="text" name="service_title" id="stylist_name"
                                    value="<?= $chosen_service['service_title'] ?>" />

                                

                                <label for="services_description">Service Description</label>
                                <textarea style='resize:none; font-size: 50px;' name="services_description" id="services_description" cols="30" rows="10"><?= $chosen_service['services_description'] ?></textarea>
                                
                                <label for="service_price">Price</label>
                                <input style=" font-size: 50px; padding:20px" type="text" name="service_price" id="service_price"
                                    value="<?= $chosen_service['service_price'] ?>" />
                               
                                <label for="services_price">Time</label>
                                <input style=" font-size: 50px; padding:20px" type="text" name="service_time" id="service_time"
                                    value="<?= $chosen_service['service_time'] ?>" />
                                <button style=" font-size: 50px" type="submit" name="submit_update_chosen_service_info" >Update
                                    <?= $chosen_service['service_title'] ?> Info</button>
                            </div>
                        </div>
                    </form>
</section> -->