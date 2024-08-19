<?php
session_start();
require_once 'backend/display_about_page.php';
require_once 'backend/display_about_images.php';
require_once 'backend/display_business_address.php';
require_once 'backend/display_business_hours_mon.php';
require_once 'backend/display_business_hours_tue.php';
require_once 'backend/display_business_hours_wed.php';
require_once 'backend/display_business_hours_thurs.php';
require_once 'backend/display_business_hours_fri.php';
require_once 'backend/display_business_hours_sat.php';
require_once 'backend/display_business_hours_sun.php';
require_once 'backend/display_contact_info.php';
// require_once 'bacend/display_gallery_images_and_categories.php';
require_once 'backend/display_gallery_page.php';
require_once 'backend/display_header_image.php';
require_once 'backend/display_index_images.php';
require_once 'backend/display_index_page_styles_section.php';
require_once 'backend/display_index_page_welcome_to.php';
require_once 'backend/display_navigation.php';
require_once 'backend/display_news_article.php';
require_once 'backend/display_reviews.php';
require_once 'backend/display_services_gallery.php';
require_once 'backend/display_vip_services.php';
require_once 'backend/display_website_colors.php';
require_once 'backend/display_welcome_to_images.php';


  if (isset($_SESSION["user_id"])) {

    require "backend/db.php";
    $msqli = $conn;
    // $msqli = require __DIR__ . "backend/db.php";

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $msqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE php>
<php lang="en">

    <head>
        <!-- https://www.youtube.com/watch?v=izWc4pL_esc&list=PLFzi7Iy-LHGOTKhjjihNpnELb4go8q7JK&index=2 -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- water css -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/reviews.css">
        <link rel="stylesheet" href="css/media-query.css" />
        



        <!-- form validation CDN -->
        <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>

        <script src="js/validation.js" defer></script>

        <!-- fontawesome  -->
        <script src="https://kit.fontawesome.com/7a6c6b42a6.js" crossorigin="anonymous"></script>
        <script src='js/script.js' defer></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- favicon cross-browser -->
        <link rel="shortcut icon" href="/uploads/logo.png">
        <link rel="shortcut icon" href="img/pic1.jpg">

        <!-- favicon IOS devices -->
        <!-- <link rel="apple-touch-icon" href="./uploads/logo.png"> -->
        <link rel="apple-touch-icon" href="/uploads/logo.png">
        <title><?= $business_name; ?></title>
        


    <body>
        <header style='background: <?= $primary_color; ?>'>
            <a href="index.php"><img style='height:80px;border-radius:5px' src="uploads/<?= $logo; ?>"
                    alt="<?= $logo_image_alt; ?>"></a>
            <!-- <a class="logo" href="#">Nail Salon</a> -->

            <!-- <div class="social-media" style="display: flex; justify-content:center">
            <a style="color: <?php echo $secondary_color; ?>" href="https://www.facebook.com/RandLBarbershopNC/" target="_blank"><img style="height: 60px; width:60px; margin-right: 20px" src="uploads/qr-code.png"></a>
            <a style="color: <?php echo $secondary_color; ?>" href="https://www.instagram.com/randlbarbershop/ " target="_blank"><img style="height: 60px; width:60px" src="uploads/qr-code-instg.png"></a>
        </div> -->
            <div class="menuToggle"></div>
            <nav style='background: <?= $primary_color; ?>'>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="book_appointment_4.php">Book Now</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="news.php">News</a>
                    </li>
                    <li>
                        <a href="gallery.php">Photo Gallery</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <?php if (isset($user)): ?>
                    <li>
                        <a style="color:<?= $accent_color; ?>">Hello <?= htmlspecialchars($user["name"]) ?></a>
                    </li>
                    <li>
                        <a href="stylist_info.php">Edit Technicians</a>
                    </li>
                    <li>
                        <a href="appointments-view-edit.php">Edit Appointments</a>
                    </li>
                    <li>
                        <a href="edit_news_article.php">Edit News</a>
                    </li>
                    <li>
                        <a href="services_chosen_edit.php">Edit Services</a>
                    </li>
                    <li>
                        <a href="edit_gallery.php">Edit Photo Gallery</a>
                    </li>
                    <li>
                        <a href="edit_stylist_images.php">Edit Stylist Photos</a>
                    </li>
                    <li>
                        <a href="logout.php">log out</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>