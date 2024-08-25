<?php
  require_once 'header.php';
?>


<section class="sectionFirst">
    <div
        style="background-image: url('uploads/<?= $about_header_img; ?>'); width: 100%; height: 100%; position:absolute; top: 0; background-position: center; background-size: cover; background-repeat: no-repeat; z-index: -1;">
    </div>
    <!-- <h1>About</h1> -->

    <section class="transform-img">
        <img src="uploads/curved-bkgd.svg" alt="curved background" />
    </section>
</section>

<!-- SECOND SECTION -->
<section class="aboutUsDetail">
    <span class="img">
        <img src="uploads/<?= $about_owner_manager_img; ?>" alt="<?= $about_owner_manager_img_description; ?>" />
    </span>

    <div id='since' class="infoAboutUs">
        <h2 style='color:<?= $accent_color; ?>'>Our Story</h2>
        <p class='p-font-size'>Since <?= $about_since_year; ?></p>
        <p class='p-font-size'><?= $about_paragraph_one; ?></p>
        <!-- <p class="para"><?= $about_paragraph_one; ?></p> -->
        <p class='p-font-size'><?= $about_paragraph_two; ?></p>
        <h2><?= $about_owner_manager_name; ?> <p class='p-font-size' >
                <?= $about_owner_manager_title; ?></p></h2>
        <div class="iconLink">
            <i class="fa-solid fa-phone">
                <a href="tel:+<?= $about_owner_manager_phone; ?>"><?= $about_owner_manager_phone; ?></a>
            </i>
            <i class="fa-solid fa-envelope">
                <a href="#"><?= $about_owner_manager_email; ?></a>
            </i>
        </div>
    </div>
</section>

<?php if (isset($user)): ?>
<div id='services-gallery'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; margin-bottom:10vh; padding:0 20px">

    <!--------- ABOUT PAGE HEADER IMG ----------->

    <div class='update-inputs' id='services-gallery'
        style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_about_page.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
               about page header image</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_header_img">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="about_header_img"
                            name="image" value="<?= $about_header_img; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_header_img_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text"
                            id="about_header_img_description" name="about_header_img_description"
                            value="<?= $about_header_img_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_about_header_img">SAVE</button>
        </form>
    </div>

    <!--------- SINCE YEAR AND PARAGRAPHS ONE AND TWO ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_about_page.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                our story</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="about_since_year">year</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="about_since_year" type="text" name='about_since_year'
                            value='<?= $about_since_year; ?>'>
                    </div>
                    <br>
                    <div>
                        <label for="about_paragraph_one">paragraph one</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <textarea id="about_paragraph_one" name="about_paragraph_one" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $about_paragraph_one; ?></textarea>
                        <br>
                        <label for="about_paragraph_two">paragraph two</label>
                        <textarea id="about_paragraph_two" name="about_paragraph_two" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $about_paragraph_two; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_about_paragraphs_and_since_year">SAVE</button>
        </form>
    </div>

    <!-- OWNER/MANAGER NAME TITLE PHONE EMAIL -->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_about_page.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                our story</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="about_owner_manager_name">owner/manager name</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="about_owner_manager_name" type="text"
                            name='about_owner_manager_name' value='<?= $about_owner_manager_name; ?>'>
                    </div>
                    <br>
                    <div>
                        <label for="about_owner_manager_title">owner/manager title </label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="about_owner_manager_title" type="text"
                            name='about_owner_manager_title' value='<?= $about_owner_manager_title; ?>'>
                    </div>
                    <br>
                    <div>
                        <label for="about_owner_manager_phone">owner/manager phone </label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="about_owner_manager_phone" type="text"
                            name='about_owner_manager_phone' value='<?= $about_owner_manager_phone; ?>'>
                    </div>
                    <br>
                    <div>
                        <label for="about_owner_manager_name">owner/manager email</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="about_owner_manager_email" type="email"
                            name='about_owner_manager_email' value='<?= $about_owner_manager_email; ?>'>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_about_owner_manager_name_email">SAVE</button>
        </form>
    </div>

    <!--------- OUR STORY OWNER/MANAGER IMG ----------->

    <div class='update-inputs' id='services-gallery'
        style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_about_page.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                our story</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_owner_manager_img">owner/manager image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="about_owner_manager_img"
                            name="image" value="<?= $about_owner_manager_img; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_owner_manager_img_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text"
                            id="about_owner_manager_img_description" name="about_owner_manager_img_description"
                            value="<?= $about_owner_manager_img_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_about_owner_manager_img">SAVE</button>
        </form>
    </div>
</div>
<?php endif; ?>

<!-- SECTION THREE -->
<section id='solutions' class="aboutTeamInfo">
    <div class="teamText">
        <!-- <div class="t-team">Our Awesome Team</div> -->
        <h2 style='color:<?= $accent_color; ?>' class="t-heading"><?= $about_solutions_title; ?></h2>
        <p class='p-font-size'><?= $about_solutions_subtitle; ?></p>
        <!-- <p class="t-lines"><?= $about_solutions_subtitle; ?></p> -->
    </div>


    <div class="teamImgInfo">

        <?php
            $get_stylist_img_query = "SELECT * FROM stylist_images ORDER BY stylist_name ASC";

            $get_stylist_img_result = mysqli_query($conn, $get_stylist_img_query);
        ?>
        <?php while ($stylist_img = mysqli_fetch_assoc($get_stylist_img_result)) : ?>
        <div class="box">
            <div class="img">
                <img src="uploads/<?= $stylist_img['stylist_img']; ?>" alt="<?= $stylist_img['stylist_img_alt']; ?>">
                <p class='p-font-size'><?= $stylist_img['stylist_name']; ?></p>
                <p class='p-font-size'><?= $stylist_img['stylist_title']; ?></p>
                <!-- <p class="t-name"><?= $stylist_img['stylist_name']; ?></p>
                <p class="t-name"><?= $stylist_img['stylist_title']; ?></p> -->
            </div>
        </div>
        <?php endwhile; ?>
        <!-- <div class="box">
            <div class="img">
                <img src="uploads/<?= $about_stylist_img_two; ?>" alt="<?= $about_stylist_img_two_description; ?>">
            </div>
            <div class="t-name"><?= $about_stylist_img_two_name; ?></div>
            <div class="t-position"><?= $about_stylist_img_two_title; ?></div>
        </div>
        <div class="box">
            <div class="img">
                <img src="uploads/<?= $about_stylist_img_three; ?>" alt="<?= $about_stylist_img_three_description; ?>">
            </div>
            <div class="t-name"><?= $about_stylist_img_three_name; ?></div>
            <div class="t-position"><?= $about_stylist_img_three_title; ?></div>
        </div> -->

        <div class="box fourthBox"
            style="display:flex; flex-direction:column; align-items: center; justify-content: center; padding:0 20px; height:auto; min-height:550px; background:<?= $accent_color; ?>">
            <p class='p-font-size' style='font-size: 24px; color: #fff; margin-bottom: 30px; font-weight:600'><?= $about_products_text; ?>
            </p>

            <!--<a href="book_appointment_4.php" style ='font-size: 18px; color:#fff; border: 1px solid #fff; padding: 10px 8px; text-decoration: none'>Book Appointment</a>-->

            <div class="btn" style='text-align:center; margin-bottom: 50px'>
                <a href="https://reports.appheaven.us/online/go2.php?merchantid=9FRQ6BGWVKGS1">Book Now</a>
            </div>
            <!--<div class="ak-disc" style='text-align:center'>-->
            <!--    Book Your Appointment Now And Get 25% Off-->
            <!--</div>-->
            <!--<div class="ak-sale" style='text-align:center'>Summer Sale! 25% off On Select Products</div>-->
            <!--<div class="btn" style='text-align:center'>-->
            <!--    <a href="#">Book Appointment</a>-->
            <!--</div>-->

        </div>

        <!-- <div class="box fourthBox">
            <div class="ak-disc">
                Book Your Appointment Now And Get 25% Off
            </div>
            <div class="ak-sale">Summer Sale! 25% off On Select Products</div>
            <div class="btn">
                <a href="#">Book Appointment</a>
            </div>
        </div> -->
    </div>
    </div>
</section>

<?php if (isset($user)): ?>
<div id='services-gallery'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; margin-bottom:10vh; padding:0 20px">

    <!-- WE HAVE SOLUTIONS TITLE AND SUBTITLE-->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_about_page.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                we have solutions</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="about_solutions_title">title</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="about_solutions_title" type="text" name='about_solutions_title'
                            value='<?= $about_solutions_title; ?>'>
                    </div>
                    <br>
                    <div>
                        <label for="about_solutions_subtitle">subtitle </label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="about_solutions_subtitle" type="text"
                            name='about_solutions_subtitle' value='<?= $about_solutions_subtitle; ?>'>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_about_solutions">SAVE</button>
        </form>
    </div>

    <!--------- OUR STORY STYLIST IMG ONE ----------->

    <!-- <div class='update-inputs' id='services-gallery'
        style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_stylist_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                add stylist image</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_stylist_img_one">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="stylist_img"
                            name="image">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="stylist_img_alt">image description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text"
                            id="stylist_img_alt" name="stylist_img_alt"
                            >
                        <br>
                        <br>
                        <div>
                            <label for="stylist_name">name</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="stylist_name"
                            name="stylist_name">
                    </div>
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="stylist_title">title</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="stylist_title"
                            name="stylist_title">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_stylist_images">SAVE</button>
        </form>
    </div> -->
    <!--------- OUR STORY STYLIST IMG TWO ----------->

    <!-- <div class='update-inputs' id='services-gallery'
        style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_about_page.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                stylist two</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_stylist_img_two">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="about_stylist_img_two"
                            name="image" value="<?= $about_stylist_img_two; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_stylist_img_two_description">image description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text"
                            id="about_stylist_img_two_description" name="about_stylist_img_two_description"
                            value="<?= $about_stylist_img_two_description; ?>">
                        <br>
                        <br>
                        <div>
                            <label for="about_stylist_img_two_name">name</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="about_stylist_img_two_name"
                            name="about_stylist_img_two_name" value="<?= $about_stylist_img_two_name; ?>">
                    </div>
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_stylist_img_two_title">title</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="about_stylist_img_two_title"
                            name="about_stylist_img_two_title" value="<?= $about_stylist_img_two_title; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_about_stylist_img_two">SAVE</button>
        </form>
    </div> -->
    <!--------- OUR STORY STYLIST IMG THREE ----------->

    <!-- <div class='update-inputs' id='services-gallery'
        style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_about_page.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                stylist three</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="about_stylist_img_three">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="about_stylist_img_three"
                            name="image" value="<?= $about_stylist_img_three; ?>">
                    </div>
                    <div>
                        <label for="about_stylist_img_three_description">image description</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text"
                        id="about_stylist_img_three_description" name="about_stylist_img_three_description"
                        value="<?= $about_stylist_img_three_description; ?>">
                    <div>
                        <br>
                        <div>
                            <label for="about_stylist_img_three_name">name</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="about_stylist_three_name"
                            name="about_stylist_img_three_name" value="<?= $about_stylist_img_three_name ?>">
                        <br>
                        <br>
                        <div style='margin-bottom:20px'>
                            <div>
                                <label for="about_stylist_img_three_title">title</label>
                            </div>
                            <input style="padding:8px 10px; border-radius:5px" type="text"
                                id="about_stylist_img_three_title" name="about_stylist_img_three_title"
                                value="<?= $about_stylist_img_three_title; ?>">
                        </div>
                    </div>
                </div>
                <button class="update-btns" type="submit" name="update_about_stylist_img_three">SAVE</button>
        </form>
    </div>
</div> -->
<!-- ABOUT PRODUCTS -->

<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
    <form action="backend/update_about_page.php" method="post">
        <h3
            style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
            Products</h3>
        <div
            style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

            <div style="padding: 10px">
                <div>
                    <label for="about_products_text">text</label>
                </div>
                <div style='display:flex; flex-direction:column'>
                    <textarea id="about_products_text" name="about_products_text" rows='5' cols='50'
                        style='resize:none; padding:10px'><?= $about_products_text; ?></textarea>
                </div>
            </div>
        </div>
        <button class="update-btns" type="submit" name="update_about_products_text">SAVE</button>
    </form>
</div>
</div>
<?php endif ?>

<?php
      require_once 'footer.php';
?>