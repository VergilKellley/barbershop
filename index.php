<?php
  require_once 'header.php';

//   session_start();

  if (isset($_SESSION["user_id"])) {

    require "backend/db.php";
    $msqli = $conn;
    // $msqli = require __DIR__ . "backend/db.php";

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $msqli->query($sql);

    $user = $result->fetch_assoc();
}

?>



<script src='js/reviews.js'></script>
<script>
function check(monClosed) {
    document.getElementById("closed-on-mon").value = monClosed;
}
</script>
<section class="sectionFirst">
    <div
        style="background-image: url('uploads/<?= $header_img; ?>'); width: 100%; height: 100%; position:absolute; top: 0; background-position: center; background-size: cover; background-repeat: no-repeat; z-index: -1;">
    </div>
    <div class="frontPage home-content">
        <!-- <div class="address">555 Sherman Ave, Evanston, IL</div> -->
        <h2 style='font-size:2.3rem'><?= $business_name; ?></h2>
        <a href="tel:+19803351233" class='p-font-size' style=' color:#fff; text-decoration : none;'><?= $phone; ?></a>

        <h2><span style="font-size: 2rem;" class="multiple-text"></span></h2>

        <h1 style='font-size: 24px; margin-top:0'><span id='typewriter'></span><span id='cursor'>|</span></h1>

        <a href="contact.php#google-map" class='p-font-size' style='color:#fff; text-decoration: none'>
            <p class='p-font-size'><?= $street_address; ?></p>
            <!-- <p class='p-font-size' class="address">8610 Camfield Street</p> -->
            <p class='p-font-size'><?= $city; ?>, <?= $business_state; ?> <?= $zip; ?></p>
        </a>
        <div style="display:flex; gap: 3rem">
            <div style="display:flex;flex-direction:column; gap:10px; line-height:.75">
                <!-- MONDAY OPEN -->
                <small id="mon">Mon</small>
                <small><?= $mon_hour_from; ?>:<?= $mon_min_from; ?> <?= $mon_ampm_from; ?>
                    <?= $mon_hour_to; ?>:<?= $mon_min_to; ?> <?= $mon_ampm_to; ?></small>

                <!-- MONDAY CLOSED -->
                <small id="closed-mon">Mon: closed</small>

                <script>
                const closedMon = document.getElementById("mon").innerHTML;

                if (closedMon.includes("closed")) {
                    document.getElementById("closed-mon").style.display = "block";
                    document.getElementById("mon").style.display = "none";
                } else {
                    document.getElementById("closed-mon").style.display = "none";
                    document.getElementById("mon").style.display = "block";
                }
                </script>

                <!-- TUESDAY OPEN -->

                <small id='tue'> Tue </small>
                <small><?= $tue_hour_from; ?>:<?= $tue_min_from; ?> <?= $tue_ampm_from; ?> -
                    <?= $tue_hour_to; ?>:<?= $tue_min_to; ?> <?= $tue_ampm_to; ?></small>

                <!-- TUESDAY CLOSED -->
                <small id="closed-tue">Tue: closed</small>

                <script>
                const closedTue = document.getElementById("tue").innerHTML;

                if (closedTue.includes("closed")) {
                    document.getElementById("closed-tue").style.display = "block";
                    document.getElementById("tue").style.display = "none";
                } else {
                    document.getElementById("closed-tue").style.display = "none";
                    document.getElementById("tue").style.display = "block";
                }
                </script>

                <!-- WEDNEDAY OPEN -->

                <small id='wed'> Wed </small>
                <small><?= $wed_hour_from; ?>:<?= $wed_min_from; ?> <?= $wed_ampm_from; ?> -
                    <?= $wed_hour_to; ?>:<?= $wed_min_to; ?> <?= $wed_ampm_to; ?></small>

                <!-- WEDNESDAY CLOSED -->

                <small id="closed-wed">Wed: closed</small>

                <script>
                const closedWed = document.getElementById("wed").innerHTML;

                if (closedWed.includes("closed")) {
                    document.getElementById("closed-wed").style.display = "block";
                    document.getElementById("wed").style.display = "none";
                } else {
                    document.getElementById("closed-wed").style.display = "none";
                    document.getElementById("wed").style.display = "block";
                }
                </script>

                <!-- THURSDAY OPEN -->

                <small id='thurs'> Thurs </small>
                <small><?= $thurs_hour_from; ?>:<?= $thurs_min_from; ?> <?= $thurs_ampm_from; ?> -
                    <?= $thurs_hour_to; ?>:<?= $thurs_min_to; ?> <?= $thurs_ampm_to; ?></small>

                <!-- THURSDAY CLOSED -->

                <small id="closed-thurs">Thurs: closed</small>

                <script>
                const closedThurs = document.getElementById("thurs").innerHTML;

                if (closedThurs.includes("closed")) {
                    document.getElementById("closed-thurs").style.display = "block";
                    document.getElementById("thurs").style.display = "none";
                } else {
                    document.getElementById("closed-thurs").style.display = "none";
                    document.getElementById("thurs").style.display = "block";
                }
                </script>
            </div>

            <div style="display:flex;flex-direction:column; gap:10px; line-height:.75">

                <!-- FRIDAY OPEN -->
                <small id='fri'> Fri </small>
                <small><?= $fri_hour_from; ?>:<?= $fri_min_from; ?> <?= $fri_ampm_from; ?> -
                    <?= $fri_hour_to; ?>:<?= $fri_min_to; ?> <?= $fri_ampm_to; ?></small>

                <!-- FRIDAY CLOSED -->

                <small id="closed-fri">Fri: closed</small>

                <script>
                const closedFri = document.getElementById("fri").innerHTML;

                if (closedFri.includes("closed")) {
                    document.getElementById("closed-fri").style.display = "block";
                    document.getElementById("fri").style.display = "none";
                } else {
                    document.getElementById("closed-fri").style.display = "none";
                    document.getElementById("fri").style.display = "block";
                }
                </script>

                <!-- SATURDAY OPEN -->
                <small id='sat'> Sat </small>
                <small><?= $sat_hour_from; ?>:<?= $sat_min_from; ?> <?= $sat_ampm_from; ?> -
                    <?= $sat_hour_to; ?>:<?= $sat_min_to; ?> <?= $sat_ampm_to; ?></small>

                <!-- SATURDAY CLOSED -->

                <small id="closed-sat">Sat: closed</small>

                <script>
                const closedSat = document.getElementById("sat").innerHTML;

                if (closedSat.includes("closed")) {
                    document.getElementById("closed-sat").style.display = "block";
                    document.getElementById("sat").style.display = "none";
                } else {
                    document.getElementById("closed-sat").style.display = "none";
                    document.getElementById("sat").style.display = "block";
                }
                </script>

                <!-- SUNDAY OPEN -->

                <small id='sun'> Sun </small>
                <small><?= $sun_hour_from; ?>:<?= $sun_min_from; ?> <?= $sun_ampm_from; ?> -
                    <?= $sun_hour_to; ?>:<?= $sun_min_to; ?> <?= $sun_ampm_to; ?></small>

                <!-- SUNDAY CLOSED -->

                <small id="closed-sun">Sun: closed</small>

                <script>
                const closedSun = document.getElementById("sun").innerHTML;

                if (closedSun.includes("closed")) {
                    document.getElementById("closed-sun").style.display = "block";
                    document.getElementById("sun").style.display = "none";
                } else {
                    document.getElementById("closed-sun").style.display = "none";
                    document.getElementById("sun").style.display = "block";
                }
                </script>
            </div>
        </div>



        <div class="btn">
            <a class='book-now-btn ' style='background: <?= $accent_color; ?>' href="book_appointment_4.php">Book Now</a>

            <a style='border:1px solid <?= $accent_color; ?>; background: <?= $secondary_color; ?>; color:<?= $accent_color; ?>'
                href="gallery.php">Photo Gallery</a>
        </div>
    </div>
    <section class="transform-img">
        <img src="uploads/curved-bkgd.svg" alt="curved background" />
    </section>
    <!-- <?php if (isset($_SESSION['color_updated'])) {

echo "<div style='background:transparent; padding-top:200px; text-align:center; position:relative; z-index:999999; color:#333'>" . $_SESSION['color_updated'] . "</div";
unset($_SESSION['color_updated']);

} elseif (isset($_SESSION['color_not_updated'])) {

echo "<div>" . $_SESSION['color_not_updated'] . "</div>";
}
?> -->
</section>
<?php if (isset($user)): ?>

<div id="header" style=" width:100vw; display:flex; justify-content:center; flex-wrap:wrap; gap: 2rem">

    <!-- HEADER IMAGE -->
    <!-- https://www.youtube.com/watch?v=K_W5ZqwEcqs -->
    <div class='update-inputs' id="header-image" style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius:    5px; margin-top: 5vh">
        <form action="backend/update_header_img.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                header image</h3>
            <div
                style=" border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="header_img">image</label>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <input style="padding:8px 10px; border-radius:5px" type="file" id="header_img" name="image"
                        value="<?= $header_img; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="header_img_description">image description</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="header_img_description"
                        name="header_img_description" value="<?= $header_img_description; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_header_img">SAVE</button>
        </form>
    </div>

    <!-- WEBSITE COLORS -->
    <div class="update-inputs" style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top:5vh;">
        <form action="backend/update_website_colors.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                website colors</h3>
            <div
                style=" border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="primary_color">main color</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="primary_color"
                        name="primary_color" value="<?= $primary_color; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="secondary_color">secondary color</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="secondary_color"
                        name="secondary_color" value="<?= $secondary_color; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="accent_color">accent color</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="accent_color" name="accent_color"
                        value="<?= $accent_color; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_website_colors">SAVE</button>
        </form>
    </div>

    <div class='update-inputs' style="border:1px solid #1a1a1a; background:#d3d3d3; border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_contact_info.php
        " method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                contact info</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="business_name">name</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="business_name"
                        name="business_name" value="<?= $business_name; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="business_phone">phone</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="tel" id="phone" name="phone"
                        value="<?= $phone; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="email">email</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="email" id="email" name="email"
                        value="<?= $email; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_contact_info">SAVE</button>
        </form>
    </div>


    <div class='update-inputs' style="border:1px solid #1a1a1a; background:#d3d3d3; border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_address.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                address</h3>
            <div
                style=" border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="street_address">street address</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="street_address"
                        name="street_address" value="<?= $street_address; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="suite_unit">suite/unit</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="suite_unit" name="suite_unit"
                        value="<?= $suite_unit; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="city">city</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="city" name="city"
                        value="<?= $city; ?>">
                </div>
                <div style="padding: 10px">
                    <div style="display:flex; justify-content:space-between">
                        <label for="state">state</label>
                        <label style="margin-right: 45px" for="city">zip</label>
                    </div>
                    <select style="padding:8px 10px; border-radius:5px" id="state" name='business_state'>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                    <input style="padding:8px 10px; border-radius:5px; width: 80px" type="text" id="zip" name="zip"
                        value="<?= $zip; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_address">SAVE</button>
        </form>
    </div>
</div>

<!------------- BUSINESS HOURS --------->
<div style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap:2rem; padding: 0 20px">
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <!--------- MONDAY ----------->

        <form action="backend/update_business_hours_mon.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                monday</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <h4>from:</h4>
                        <label for="mon_hour_from">hour</label>
                        <label style="margin-left: 70px" for="mon_hour_from
                            ">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="mon_hour_from"
                        name="mon_hour_from" value="<?= $mon_hour_from; ?>" min='1' max='12'>

                    <input style="margin-left: 20px; padding:8px 10px; border-radius:5px" type="number"
                        id="mon_min_from" name="mon_min_from" value="<?= $mon_min_from; ?>" min='0' max='59'>
                    <select style="margin-left: 10px; padding:8px 10px;" name="mon_ampm_from" id="mon_ampm_from">
                        <option value="" disabled>select</option>
                        <option value="closed">Closed</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                    <br>
                    <br>
                    <div>
                        <h4>to:</h4>
                        <label for="mon_hour_to">hour</label>
                        <label style="margin-left: 70px" for="mon_min_to">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="mon_hour_to"
                        name="mon_hour_to" value="<?= $mon_hour_to; ?>" min='1' max='12'>

                    <input style="padding:8px 10px; margin-left: 20px; border-radius:5px" type="number" id="mon_min_to"
                        name="mon_min_to" value=" <?= $mon_min_to; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="mon_ampm_to" id="mon_ampm_from">
                        <option value="" disabled>select</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_hours">SAVE</button>
        </form>
    </div>

    <!--------- TUESDAY -------------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_business_hours_tue.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                tuesday</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <h4>from:</h4>
                        <label for="tue_hour_from">hour</label>
                        <label style="margin-left: 70px" for="tue_hour_to
                            ">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="tue_hour_from"
                        name="tue_hour_from" value="<?= $tue_hour_from; ?>" min='1' max='12'>

                    <input style="margin-left: 20px; padding:8px 10px; border-radius:5px" type="number"
                        id="tue_min_from" name="tue_min_from" value="<?= $tue_min_from; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="tue_ampm_from" id="am_pm_from">
                        <option disabled>select</option>
                        <option value="closed">closed</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                    <br>
                    <br>
                    <div>
                        <h4>to:</h4>
                        <label for="tue_hour_to">hour</label>
                        <label style="margin-left: 70px" for="tue_min_to">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="tue_hour_to"
                        name="tue_hour_to" value="<?= $tue_hour_to; ?>" min='1' max='12'>

                    <input style="padding:8px 10px; margin-left: 20px; border-radius:5px" type="number" id="tue_min_to"
                        name="tue_min_to" value="<?= $tue_min_to; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="tue_ampm_to" id="am_pm_to">
                        <option disabled>select</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_hours">SAVE</button>
        </form>
    </div>

    <!--------- WEDNESDAY -------------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_business_hours_wed.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                wednesday</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <h4>from:</h4>
                        <label for="wed_hour_from">hour</label>
                        <label style="margin-left: 70px" for="wed_hour_from
                            ">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="wed_hour_from"
                        name="wed_hour_from" value="<?= $wed_hour_from; ?>" min='1' max='12'>

                    <input style="margin-left: 20px; padding:8px 10px; border-radius:5px" type="number"
                        id="wed_min_from" name="wed_min_from" value="<?= $wed_min_from; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="wed_ampm_from" id="wed_am_pm_from">
                        <option disabled>select</option>
                        <option value="closed">closed</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                    <br>
                    <br>
                    <div>
                        <h4>to:</h4>
                        <label for="wed_hour_to">hour</label>
                        <label style="margin-left: 70px" for="wed_min_to">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="wed_hour_to"
                        name="wed_hour_to" value="<?= $wed_hour_to; ?>" min='1' max='12'>

                    <input style="padding:8px 10px; margin-left: 20px; border-radius:5px" type="number" id="wed_min_to"
                        name="wed_min_to" value="<?= $wed_min_to; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="wed_ampm_to" id="wed_am_pm_to">
                        <option disabled>select</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_hours">SAVE</button>
        </form>
    </div>


    <!--------- THURSDAY -------------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_business_hours_thurs.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                thursday</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <h4>from:</h4>
                        <label for="thurs_hour_from">hour</label>
                        <label style="margin-left: 70px" for="thurs_hour_from
                            ">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="thurs_hour_from"
                        name="thurs_hour_from" value="<?= $thurs_hour_from; ?>" min='1' max='12'>

                    <input style="margin-left: 20px; padding:8px 10px; border-radius:5px" type="number"
                        id="thurs_min_from" name="thurs_min_from" value="<?= $thurs_min_from; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="thurs_ampm_from" id="thurs_am_pm_from">
                        <option disabled>select</option>
                        <option value="closed">closed</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                    <br>
                    <br>
                    <div>
                        <h4>to:</h4>
                        <label for="thurs_hour_to">hour</label>
                        <label style="margin-left: 70px" for="thurs_min_to">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="thurs_hour_to"
                        name="thurs_hour_to" value="<?= $thurs_hour_to; ?>" min='1' max='12'>

                    <input style="padding:8px 10px; margin-left: 20px; border-radius:5px" type="number"
                        id="thurs_min_to" name="thurs_min_to" value="<?= $thurs_min_to; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="thurs_ampm_to" id="thurs_am_pm_from">
                        <option disabled>select</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_hours">SAVE</button>
        </form>
    </div>

    <!--------- FRIDAY -------------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_business_hours_fri.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                friday</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <h4>from:</h4>
                        <label for="fri_hour_from">hour</label>
                        <label style="margin-left: 70px" for="fri_hour_from
                            ">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="fri_hour_from"
                        name="fri_hour_from" value="<?= $fri_hour_from; ?>" min='1' max='12'>

                    <input style="margin-left: 20px; padding:8px 10px; border-radius:5px" type="number"
                        id="fri_min_from" name="fri_min_from" value="<?= $fri_min_from; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="fri_ampm_from" id="fri_am_pm_from">
                        <option disabled>select</option>
                        <option value="closed">closed</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                    <br>
                    <br>
                    <div>
                        <h4>to:</h4>
                        <label for="fri_hour_to">hour</label>
                        <label style="margin-left: 70px" for="fri_min_to">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="fri_hour_to"
                        name="fri_hour_to" value="<?= $fri_hour_to; ?>" min='1' max='12'>

                    <input style="padding:8px 10px; margin-left: 20px; border-radius:5px" type="number" id="fri_min_to"
                        name="fri_min_to" value="<?= $fri_min_to; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="fri_ampm_to" id="fri_am_pm_to">
                        <option disabled>select</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_hours">SAVE</button>
        </form>
    </div>

    <!--------- SATURDAY -------------->


    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_business_hours_sat.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                saturday</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <h4>from:</h4>
                        <label for="sat_hour_from">hour</label>
                        <label style="margin-left: 70px" for="sat_hour_from
                            ">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="sat_hour_from"
                        name="sat_hour_from" value="<?= $sat_hour_from; ?>" min='1' max='12'>

                    <input style="margin-left: 20px; padding:8px 10px; border-radius:5px" type="number"
                        id="sat_min_from" name="sat_min_from" value="<?= $sat_min_from; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="sat_ampm_from" id="sat_am_pm_from">
                        <option disabled>select</option>
                        <option value="closed">closed</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                    <br>
                    <br>
                    <div>
                        <h4>to:</h4>
                        <label for="sat_hour_to">hour</label>
                        <label style="margin-left: 70px" for="sat_min_to">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="sat_hour_to"
                        name="sat_hour_to" value="<?= $sat_hour_to; ?>" min='1' max='12'>

                    <input style="padding:8px 10px; margin-left: 20px; border-radius:5px" type="number" id="sat_min_to"
                        name="sat_min_to" value="<?= $sat_min_to; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="sat_ampm_to" id="sat_am_pm_to">
                        <option disabled>select</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_hours">SAVE</button>
        </form>
    </div>

    <!--------- SUDDAY -------------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_business_hours_sun.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                sunday</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <h4>from:</h4>
                        <label for="sun_hour_from">hour</label>
                        <label style="margin-left: 70px" for="sun_hour_from
                            ">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="sun_hour_from"
                        name="sun_hour_from" value="<?= $sun_hour_from; ?>" min='1' max='12'>

                    <input style="margin-left: 20px; padding:8px 10px; border-radius:5px" type="number"
                        id="sun_min_from" name="sun_min_from" value="<?= $sun_min_from; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="sun_ampm_from" id="sun_am_pm_from">
                        <option disabled>select</option>
                        <option value="closed">closed</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                    <br>
                    <br>
                    <div>
                        <h4>to:</h4>
                        <label for="sun_hour_to">hour</label>
                        <label style="margin-left: 70px" for="sun_min_to">minutes</label>
                    </div>

                    <input style="padding:8px 10px; border-radius:5px;" type="number" id="sun_hour_to"
                        name="sun_hour_to" value="<?= $sun_hour_to; ?>" min='1' max='12'>

                    <input style="padding:8px 10px; margin-left: 20px; border-radius:5px" type="number" id="sun_min_to"
                        name="sun_min_to" value="<?= $sun_min_to; ?>" min='0' max='59'>

                    <select style="margin-left: 10px; padding:8px 10px;" name="sun_ampm_to" id="sun_am_pm_from">
                        <option disabled>select</option>
                        <option value="am">am</option>
                        <option value="pm">pm</option>
                    </select>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_business_hours">SAVE</button>
        </form>
    </div>
</div>
</div>

<?php endif; ?>
<!-- SECOND SECTION -->
<section class="sectionSecond">
    <div class="fourImg">
        <img src="uploads/<?= $welcome_to_img_one; ?>" alt="<?= $welcome_to_img_one_description; ?>" />
        <img src="uploads/<?= $welcome_to_img_two; ?>" alt="<?= $welcome_to_img_two_description; ?>" />
        <img src="uploads/<?= $welcome_to_img_three; ?>" alt="<?= $welcome_to_img_three_description; ?>" />
        <img src="uploads/<?= $welcome_to_img_four; ?>" alt="<?= $welcome_to_img_four_description; ?>" />
    </div>
    <div class="textInfo">
        <div>


            <p class='p-font-size' class="greet p-font-size">Welcome To</p>


        </div>
        <div style='display:flex; flex-direction: column; justify-content: center'>
            <h2 class="title" style='font-size: 2.3rem; color:<?= $accent_color; ?>'><?= $business_name; ?></h2>
            <a href="news.php" class='p-font-size' style=' background:#fff; color: var(--global-color-1);'>Hair Care News</a>
        </div>
        <p class='p-font-size'><?= $para_one; ?></p>
        <p class='p-font-size'><?= $para_two; ?></p>
        <!-- <p class='p-font-size'> We use safe and gentle techniques for our children's haircuts, ensuring that your child is
            comfortable
            and
            happy throughout the entire process.</p> -->
        <p class='p-font-size'>To View Photo Gallery <a href="gallery.php" style='color: var(--global-color-1)'>click here</a>.</p>
        </p>
    </div>
</section>

<?php if (isset($user)): ?>
<div id='welcome-to' style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; padding:20px">

    <!--------- WELCOME TO PARAGRAPH ONE----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_index_page_welcome_to.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                welcome to</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="mon_hour_from">paragraph one</label>
                    </div>

                    <textarea name="para_one" id="paragraph-one" rows='5' cols='50'
                        style='resize:none; padding:10px'><?= $para_one; ?></textarea>
                    <br>
                    <br>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_index_page_welcome_to_para_one">SAVE</button>
        </form>
    </div>

    <!--------- WELCOME TO PARAGRAPH TWO ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_index_page_welcome_to.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                welcome to</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="mon_hour_from">paragraph two</label>
                    </div>

                    <textarea name="para_two" id="paragraph-one" rows='5' cols='50'
                        style='resize:none; padding:10px'><?= $para_two; ?></textarea>
                    <br>
                    <br>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_index_page_welcome_to_para_two">SAVE</button>
        </form>
    </div>

    <!--------- WELCOME TO IMAGE ONE ----------->

    <div class='update-inputs' id="welcome-to" style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius:    5px; margin-top: 5vh">
        <form action="backend/update_welcome_to_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                welcome to</h3>
            <div
                style=" border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_one">image one</label>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <input style="padding:8px 10px; border-radius:5px" type="file" id="welcome_to_img_one" name="image"
                        value="<?= $welcome_to_img_one; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_one_description">image description</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="welcome_to_img_one_description"
                        name="welcome_to_img_one_description" value="<?= $welcome_to_img_one_description; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_welcome_to_img_one">SAVE</button>
        </form>
    </div>
    <!--------- WELCOME TO IMAGE TWO ----------->

    <div class='update-inputs' id="welcome-to" style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius:    5px; margin-top: 5vh">
        <form action="backend/update_welcome_to_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                welcome to</h3>
            <div
                style=" border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_two">image two</label>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <input style="padding:8px 10px; border-radius:5px" type="file" id="welcome_to_img_two" name="image"
                        value="<?= $welcome_to_img_two; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_two_description">image description</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="welcome_to_img_two_description"
                        name="welcome_to_img_two_description" value="<?= $welcome_to_img_two_description; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_welcome_to_img_two">SAVE</button>
        </form>
    </div>
    <!--------- WELCOME TO IMAGE THREE ----------->

    <div class='update-inputs' id="welcome-to" style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius:    5px; margin-top: 5vh">
        <form action="backend/update_welcome_to_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                welcome to</h3>
            <div
                style=" border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_three">image three</label>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <input style="padding:8px 10px; border-radius:5px" type="file" id="welcome_to_img_three"
                        name="image" value="<?= $welcome_to_img_three; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_three_description">image description</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="welcome_to_img_three_description"
                        name="welcome_to_img_three_description" value="<?= $welcome_to_img_three_description; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_welcome_to_img_three">SAVE</button>
        </form>
    </div>
    <!--------- WELCOME TO IMAGE FOUR ----------->

    <div class='update-inputs' id="welcome-to" style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius:    5px; margin-top: 5vh">
        <form action="backend/update_welcome_to_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                welcome to</h3>
            <div
                style=" border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_four">image four</label>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <input style="padding:8px 10px; border-radius:5px" type="file" id="welcome_to_img_four" name="image"
                        value="<?= $welcome_to_img_four; ?>">
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="welcome_to_img_four_description">image description</label>
                    </div>
                    <input style="padding:8px 10px; border-radius:5px" type="text" id="welcome_to_img_four_description"
                        name="welcome_to_img_four_description" value="<?= $welcome_to_img_four_description; ?>">
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_welcome_to_img_four">SAVE</button>
        </form>
    </div>
</div>
<?php endif; ?>

<!-- SECTION THREE -->
<section class="sectionThree">
    <h2 style='color:<?= $accent_color; ?>'><?= $styles_title; ?></h2>
    <p class='p-font-size' style='font-style: italic; font-weight:500'><?= $styles_subtitle; ?></p>
    <div class="servicesBox">
        <div class="box">
            <img style='width: 100%; margin-bottom:1rem' src="uploads/<?= $img_one; ?>" alt="<?= $img_one_description ?>">
            <h2><?= $img_one_title; ?></h2>
            <p class='p-font-size'><?= $img_one_text; ?></p>
        </div>
        <div class="box">
            <img style='width: 100%; margin-bottom:1rem' src="uploads/<?= $img_two; ?>" alt="<?= $img_two_description ?>">
            <h2><?= $img_two_title; ?></h2>
            <p class='p-font-size'>
                <?= $img_two_text; ?>
            </p>
        </div>
        <div class="box">
            <img style='width: 100%; margin-bottom:1rem' src="uploads/<?= $img_three; ?>" alt="<?= $img_three_description ?>">
            <h2><?= $img_three_title; ?></h2>
            <p class='p-font-size'>
                <?= $img_three_text; ?>
            </p>
        </div>
        <div class="box">
            <img style='width: 100%; margin-bottom:1rem' src="uploads/<?= $img_four; ?>" alt="<?= $img_four_description ?>">
            <h2><?= $img_four_title; ?></h2>
            <p class='p-font-size'>
                <?= $img_four_text; ?>
            </p>
        </div>
    </div>
</section>

<?php if (isset($user)): ?>
<div id='styles'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; margin-bottom:10vh; padding:0 20px">
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh;">

        <!--------- STYLES FOR EVERY OCCASION ----------->

        <form action="backend/update_index_page_styles_section.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                style titles</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="styles_title">title</label>
                    </div>
                    <input style='width:300px; padding:10px' type="text" name='styles_title'
                        value='<?= $styles_title; ?>'>
                    <br>
                </div>
                <div style="padding: 10px">
                    <div>
                        <label for="styles_subtitle">subtitle</label>
                    </div>
                    <input style='width:300px; padding:10px' type="text" name='styles_subtitle'
                        value='<?= $styles_subtitle; ?>'>
                    <br>
                    <br>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_index_page_styles_titles">SAVE</button>
        </form>
    </div>

    <!--------- STYLES IMAGE ONE----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_styles_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image one</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_one">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="img_one" name="image" value="<?= $img_one; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_one_description">image description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="img_one_description"
                            name="img_one_description" value="<?= $img_one_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_styles_image_one">SAVE</button>
        </form>
    </div>

    <!--------- STYLES IMAGE ONE TITLE AND TEXT ----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_index_page_styles_section.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image one</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="img_one_title">title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_one_title" type="text" name='img_one_title'
                            value='<?= $img_one_title; ?>'>
                        <br>
                        <label for="img_one_text">text</label>
                        <textarea id="img_one_text" name="img_one_text" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $img_one_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_index_page_styles_images_one">SAVE</button>
        </form>
    </div>

    <!--------- STYLES IMAGE TWO ----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a; background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_styles_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image two</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_two">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="img_two" name="image" value="<?= $img_one; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_two_description">image description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="img_two_description"
                            name="img_two_description" value="<?= $img_two_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_styles_image_two">SAVE</button>
        </form>
    </div>

    <!--------- STYLES IMAGE TWO TITLE AND TEXT ----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_index_page_styles_section.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image two</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="img_two_title">title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_two_title" type="text" name='img_two_title'
                            value='<?= $img_two_title; ?>'>
                        <br>
                        <label for="img_two_text">text</label>
                        <textarea id="img_two_text" name="img_two_text" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $img_two_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_index_page_styles_images_two">SAVE</button>
        </form>
    </div>
    <!--------- STYLES IMAGE THREE ----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_styles_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image three</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_three">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="img_two" name="image" value="<?= $img_one; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_three_description">image description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="img_three_description"
                            name="img_three_description" value="<?= $img_two_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_styles_image_three">SAVE</button>
        </form>
    </div>

    <!--------- STYLES IMAGE THREE TITLE AND TEXT ----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_index_page_styles_section.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image three</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="img_three_title">title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_three_title" type="text" name='img_three_title'
                            value='<?= $img_three_title; ?>'>
                        <br>
                        <label for="img_three_text">text</label>
                        <textarea id="img_three_text" name="img_three_text" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $img_three_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_index_page_styles_images_three">SAVE</button>
        </form>
    </div>
    <!--------- STYLES IMAGE four ----------->
<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_styles_images.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image four</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_four">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="img_two" name="image" value="<?= $img_one; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="img_four_description">image description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="img_four_description"
                            name="img_four_description" value="<?= $img_two_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_styles_image_four">SAVE</button>
        </form>
    </div>

    <!--------- STYLES IMAGE FOUT TITLE AND TEXT ----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_index_page_styles_section.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                styles image four</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div>
                        <label for="img_four_title">title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_four_title" type="text" name='img_four_title'
                            value='<?= $img_four_title; ?>'>
                        <br>
                        <label for="img_four_text">text</label>
                        <textarea id="img_four_text" name="img_four_text" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $img_four_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_index_page_styles_images_four">SAVE</button>
        </form>
    </div>
</div>
<?php endif; ?>

    </div>
<!-- REVIEWS -->
<section
    style='min-height:60vh; max-width:600px; margin:0 auto; display:flex; align-items:center; justify-content:center; background:<?= $primary_color; ?>'>
    <div class="reviews-container">
        <h3 style="font-size: 2.5rem; text-align: center;color:<?= $secondary_color; ?>"><?= $reviews_title; ?></h3>
        <div class="slide-container active">
            <div class="slide">
                <i style='color: <?= $accent_color; ?>' class="fas fa-quote-right icon"></i>
                <div class="user">
                    <img src="img/randl105.png" alt="">
                    <div class="user-info">
                        <h3><?= $reviewers_name_1; ?></h3>
                        <div style='color: <?= $accent_color; ?>' class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa fa-star"></i>
                            <!-- <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <p style='font-size:16px'><?= $reviewers_comments_1; ?></p>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <i style='color: <?= $accent_color; ?>' class="fas fa-quote-right icon"></i>
                <div class="user">
                    <img src="img/randl101.png" alt="">
                    <div class="user-info">
                        <h3><?= $reviewers_name_2; ?></h3>
                        <div style='color: <?= $accent_color; ?>' class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa fa-star"></i>
                            <!-- <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <p style='font-size:16px'><?= $reviewers_comments_2; ?></p>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <i style='color: <?= $accent_color; ?>' class="fas fa-quote-right icon"></i>
                <div class="user">
                    <img src="img/randl104.png" alt="">
                    <div class="user-info">
                        <h3><?= $reviewers_name_3; ?></h3>
                        <div style='color: <?= $accent_color; ?>' class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa fa-star"></i>
                            <!-- <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <p style='font-size:16px'><?= $reviewers_comments_3; ?></p>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <i style='color: <?= $accent_color; ?>' class="fas fa-quote-right icon"></i>
                <div class="user">
                    <img src="img/randl105.png" alt="">
                    <div class="user-info">
                        <h3><?= $reviewers_name_4; ?></h3>
                        <div style='color: <?= $accent_color; ?>' class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa fa-star"></i>
                            <!-- <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <p style='font-size:16px'><?= $reviewers_comments_4; ?></p>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <i style='color: <?= $accent_color; ?>' class="fas fa-quote-right icon"></i>
                <div class="user">
                    <img src="img/randl105.png" alt="">
                    <div class="user-info">
                        <h3><?= $reviewers_name_5; ?></h3>
                        <div style='color: <?= $accent_color; ?>' class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa fa-star"></i>
                            <!-- <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <p style='font-size:16px'><?= $reviewers_comments_5; ?></p>
            </div>
        </div>
        <div id="next" class="fas fa-chevron-right" onclick="next()"></div>
        <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
    </div>
</section>

<?php if (isset($user)): ?>
<div id='reviews'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap:2rem; margin-bottom:10vh; padding:0 20px">

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <!--------- REVIEWS TITLE ----------->

        <form action="backend/update_reviews.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                reviews title</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="reviews_title">title</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <input style='padding:10px' id="reviews_title" type="text" name='reviews_title'
                            value='<?= $reviews_title; ?>'>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_reviews_title">SAVE</button>
        </form>
    </div>
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <!--------- REVIEWS ONE----------->

        <form action="backend/update_reviews.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                review one</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="reviewers_name_1">name</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="reviewers_name_1" type="text" name='reviewers_name_1'
                            value='<?= $reviewers_name_1; ?>'>
                        <br>
                        <label for="reviewers_comments_1">review</label>
                        <textarea id="reviewers_comments_1" name="reviewers_comments_1" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $reviewers_comments_1; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_reviewers_comments_1">SAVE</button>
        </form>
    </div>

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <!--------- REVIEWS TWO ----------->

        <form action="backend/update_reviews.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                review two</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="reviewers_name_2">name</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="reviewers_name_2" type="text" name='reviewers_name_2'
                            value='<?= $reviewers_name_2; ?>'>
                        <br>
                        <label for="reviewers_comments_2">review</label>
                        <textarea id="reviewers_comments_2" name="reviewers_comments_2" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $reviewers_comments_2; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_reviewers_comments_2">SAVE</button>
        </form>
    </div>
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <!--------- REVIEWS THREE ----------->

        <form action="backend/update_reviews.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                review three</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="reviewers_name_3">name</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="reviewers_name_1" type="text" name='reviewers_name_3'
                            value='<?= $reviewers_name_3; ?>'>
                        <br>
                        <label for="reviewers_comments_3">review</label>
                        <textarea id="reviewers_comments_3" name="reviewers_comments_3" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $reviewers_comments_3; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_reviewers_comments_3">SAVE</button>
        </form>
    </div>
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <!--------- REVIEWS FOUR ----------->

        <form action="backend/update_reviews.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                review four</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="reviewers_name_4">name</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="reviewers_name_1" type="text" name='reviewers_name_4'
                            value='<?= $reviewers_name_4; ?>'>
                        <br>
                        <label for="reviewers_comments_4">review</label>
                        <textarea id="reviewers_comments_4" name="reviewers_comments_4" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $reviewers_comments_4; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_reviewers_comments_4">SAVE</button>
        </form>
    </div>
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <!--------- REVIEWS FIVE ----------->

        <form action="backend/update_reviews.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                review five</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="reviewers_name_5">name</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="reviewers_name_5" type="text" name='reviewers_name_5'
                            value='<?= $reviewers_name_5; ?>'>
                        <br>
                        <label for="reviewers_comments_5">review</label>
                        <textarea id="reviewers_comments_5" name="reviewers_comments_5" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $reviewers_comments_5; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_reviewers_comments_5">SAVE</button>
        </form>
    </div>
</div>
<?php endif; ?>


<!-- REVIEWS SLIDER -->
<script>
let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active')
}

function prev() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active')
}
</script>

<!-- SECTION FIVE -->
<div  style="width: 100vw; text-align:center; margin: 0 auto;">
    <div style='max-width:800px; margin: 100px auto 0'>
        <p class='p-font-size' style='text-align:center; padding: 0 20px; font-size:1.5rem'><?= $services_text; ?></p>
    </div>
    <div style="display: flex; justify-content:center; padding:20px">
        <div id='vip-container'
            style="display:flex; justify-content:center; gap:3rem; width: 800px; align-items:center; margin-top:50px">
            <div style='width:50%'>
                <img id='vip-image-desk-top' style='width:100%' class="img-border-radius" src="uploads/<?= $vip_img; ?>"
                    alt="<?= $vip_img_description; ?>">
            </div>
            <div id='vip-mobile-container'
                style='width:50%; height: 100%; display: flex; width: 50%;flex-direction: column; justify-content: center;'>
                <h2 style='color: <?= $accent_color; ?>' class='h2-font-size'><?= $vip_service_title; ?></h2>
                <small style='font-style:italic; font-weight:600'><?= $vip_service_subtitle; ?></small>
                <p class='p-font-size' style='margin-bottom:40px'><?= $vip_service_description; ?></p>
                <img id='vip-image-mobile' style='width:100%' class="img-border-radius" src="<?= $index_image_9; ?>"
                    alt="<?= $index_image_9_alt ?>">
                <a style='background: <?= $accent_color; ?>' class="book-now-btn" href="book_appointment_4.php">Book
                    Now</a>
            </div>
        </div>
    </div>
</div>

<?php if (isset($user)): ?>
<div id='services'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; margin-bottom:10vh; padding:0 20px">

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <!--------- SERVICES TEXT ----------->

        <form action="backend/update_services.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                services text</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_text">services text</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>
                        <!-- <input style='padding:10px' id="services_text" type="text" name='services_text'
                            value='<?= $services_text; ?>'> -->

                            <textarea id="services_text" name="services_text" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $services_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_text">SAVE</button>
        </form>
    </div>

            <!--------- VIP SERVICES TEXT----------->
    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">

        <form action="backend/update_services.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                vip services</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="vip_service_title">vip service title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="vip_service_title" type="text" name='vip_service_title'
                            value='<?= $vip_service_title; ?>'>
                        <br>
                        <label for="vip_service_subtitle">vip service subtitle</label>

                        <input style='padding:10px' id="vip_service_subtitle
                        " type="text" name='vip_service_subtitle' value='<?= $vip_service_subtitle; ?>'>

                        <br>
                        <label for="vip_service_description">vip service description</label>

                        <textarea id="vip_service_description" name="vip_service_description" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $vip_service_description; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_vip_service">SAVE</button>
        </form>
    </div>

        <!--------- VIP SERVICES IMG ----------->
        <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
            
        <form action="backend/update_services.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                vip image</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="vip_img">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="vip_img" name="image" value="<?= $vip_img; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="vip_img_description">image description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="vip_img_description"
                            name="vip_img_description" value="<?= $vip_img_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="vip_img">SAVE</button>
        </form>
    </div>
</div>
<?php endif; ?>

<section class="sectionFive">
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_one_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px"><?= $services_gallery_img_one_text; ?></p>
        <img class="img-border-radius" src="uploads/<?= $services_gallery_img_one; ?>" alt="<?= $services_gallery_img_one_description; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_two_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px;"><?= $services_gallery_img_two_text; ?></p>
        <img class="img-border-radius" src="uploads/<?= $services_gallery_img_two; ?>" alt="<?= $services_gallery_img_two_description; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_three_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px;"><?= $services_gallery_img_three_text; ?></p>
        <img class="img-border-radius" src="uploads/<?= $services_gallery_img_three; ?>" alt="uploads/<?= $services_gallery_img_three; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_four_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px;"><?= $services_gallery_img_four_text; ?></p>
        <img class="img-border-radius" src="uploads/<?= $services_gallery_img_four; ?>" alt="<?= $services_gallery_img_four_description; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_five_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px"><?= $services_gallery_img_five_text; ?></p>
        <img class="img-border-radius" src="uploads/<?= $services_gallery_img_five; ?>" alt="<?= $services_gallery_img_five_description; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_six_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px"><?= $services_gallery_img_six_text; ?></p>
        <img class="img-border-radius" src="uploads/<?= $services_gallery_img_six; ?>" alt="<?= $services_gallery_img_six_description; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_seven_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px"><?= $services_gallery_img_seven_text; ?></p>
        <img style='margin-bottom: 20px' class="img-border-radius" src="uploads/<?= $services_gallery_img_seven; ?>"
            alt="<?= $services_gallery_img_seven_description; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_eight_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px"><?= $services_gallery_img_eight_text; ?></p>
        <img style='margin-bottom: 20px' class="img-border-radius" src="uploads/<?= $services_gallery_img_eight; ?>"
            alt="<?= $services_gallery_img_eight_description; ?>">
    </div>
    <div class="beautySolutions">
        <h2 style="font-size: 1.3rem; color:<?= $accent_color; ?>"><?= $services_gallery_img_nine_title; ?></h2>
        <p class='p-font-size' style="margin-bottom: 15px"><?= $services_gallery_img_nine_text; ?></p>
        <img style='margin-bottom: 20px' class="img-border-radius" src="uploads/<?= $services_gallery_img_nine; ?>" alt="<?= $services_gallery_img_nine_description; ?>">
    </div>
</section>


<!-- SERVICES GALLERY -->
<?php if (isset($user)): ?>
<div id='services-gallery'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; margin-bottom:10vh; padding:0 20px">

    <!--------- SERVICES GALLERY IMGS ONE TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh;">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image one</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_one_title">title</label>
                    </div>
                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_one_title" type="text" name='services_gallery_img_one_title'
                            value='<?= $services_gallery_img_one_title; ?>'>
                        <br>
                        <label for="services_gallery_img_one_text">text</label>
                        <textarea id="services_gallery_img_one_text" name="services_gallery_img_one_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_one_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_one_text">SAVE</button>
        </form>
    </div>

        <!--------- SERVICES GALLERY IMGS ONE IMG ----------->

        <div class='update-inputs' id='services-gallery' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top:5vh;">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image one</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_one">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_one" name="image" value="<?= $services_gallery_img_one; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_one_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_one_description"
                            name="services_gallery_img_one_description" value="<?= $services_gallery_img_one_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_one">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMG TWO TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image two</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_two_title">image two title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="services_gallery_img_two_title" type="text"
                            name='services_gallery_img_two_title' value='<?= $services_gallery_img_two_title; ?>'>
                        <br>
                        <label for="services_gallery_img_two_text">image two text</label>
                        <textarea id="services_gallery_img_two_text" name="services_gallery_img_two_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_two_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_two">SAVE</button>
        </form>
    </div>

        <!--------- SERVICES GALLERY IMGS TWO IMG ----------->

<div class='update-inputs' id='services-gallery' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image two</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_twog">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_two" name="image" value="<?= $services_gallery_img_two; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_two_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_two_description"
                            name="services_gallery_img_two_description" value="<?= $services_gallery_img_two_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_two">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMG THREE TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image three</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_three_title">image three title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="services_gallery_img_three_title" type="text"
                            name='services_gallery_img_three_title' value='<?= $services_gallery_img_three_title; ?>'>
                        <br>
                        <label for="services_gallery_img_three_text">image three text</label>
                        <textarea id="services_gallery_img_three_text" name="services_gallery_img_three_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_three_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_three_text">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMGS THREE IMG ----------->

<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image three</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_threeg">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_three" name="image" value="<?= $services_gallery_img_three; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_three_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_three_description"
                            name="services_gallery_img_three_description" value="<?= $services_gallery_img_three_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_three">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMG FOUR TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image four</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_four_title">image four title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_four_title" type="text"
                            name='services_gallery_img_four_title' value='<?= $services_gallery_img_four_title; ?>'>
                        <br>
                        <label for="services_gallery_img_four_text">image four text</label>
                        <textarea id="services_gallery_img_four_text" name="services_gallery_img_four_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_four_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_four_text">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMGS FOUR IMG ----------->

<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image four</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_fourg">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_four" name="image" value="<?= $services_gallery_img_four; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_four_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_four_description"
                            name="services_gallery_img_four_description" value="<?= $services_gallery_img_four_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_four">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMG FIVE TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image five</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_five_title">image five title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_five_title" type="text"
                            name='services_gallery_img_five_title' value='<?= $services_gallery_img_five_title; ?>'>
                        <br>
                        <label for="services_gallery_img_five_text">image five text</label>
                        <textarea id="services_gallery_img_five_text" name="services_gallery_img_five_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_five_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_five_text">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMGS FIVE IMG ----------->

<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image five</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_fiveg">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_five" name="image" value="<?= $services_gallery_img_five; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_five_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_five_description"
                            name="services_gallery_img_five_description" value="<?= $services_gallery_img_five_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_five">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMG SIX TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image six</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_six_title">image six title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_six_title" type="text" name='services_gallery_img_six_title'
                            value='<?= $services_gallery_img_six_title; ?>'>
                        <br>
                        <label for="services_gallery_img_six_text">image six text</label>
                        <textarea id="services_gallery_img_six_text" name="services_gallery_img_six_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_six_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_six_text">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMGS SIX IMG ----------->

<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image six</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_sixg">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_six" name="image" value="<?= $services_gallery_img_six; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_six_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_six_description"
                            name="services_gallery_img_six_description" value="<?= $services_gallery_img_six_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_six">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMG SEVEN  TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image seven</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_seven_title">image seven title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_seven_title" type="text"
                            name='services_gallery_img_seven_title' value='<?= $services_gallery_img_seven_title; ?>'>
                        <br>
                        <label for="services_gallery_img_seven_text">image seven text</label>
                        <textarea id="services_gallery_img_seven_text" name="services_gallery_img_seven_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_seven_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_seven_text">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMGS SEVEN IMG ----------->

<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image seven</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_seveng">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_seven" name="image" value="<?= $services_gallery_img_seven; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_seven_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_seven_description"
                            name="services_gallery_img_seven_description" value="<?= $services_gallery_img_seven_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_seven">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMG EIGHT TITLE AND TEXT ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image eight</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_eight_title">image eight title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_eight_title" type="text"
                            name='services_gallery_img_eight_title' value='<?= $services_gallery_img_eight_title; ?>'>
                        <br>
                        <label for="services_gallery_img_eight_text">image eight text</label>
                        <textarea id="services_gallery_img_eight_text" name="services_gallery_img_eight_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_eight_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_eight_text">SAVE</button>
        </form>
    </div>

     <!--------- SERVICES GALLERY IMGS EIGHT IMG ----------->

 <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image eight</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_eightg">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_eight" name="image" value="<?= $services_gallery_img_eight; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_eight_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_eight_description"
                            name="services_gallery_img_eight_description" value="<?= $services_gallery_img_eight_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_eight">SAVE</button>
        </form>
    </div>


    <!--------- SERVICES GALLERY IMG NINE TITLE AND TEXT  ----------->

    <div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image nine</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <!-- <img style='width: 150px' src="img/logo.png" alt=""> -->
                    <div>
                        <label for="services_gallery_img_nine_title">image nine title</label>
                    </div>

                    <div style='display:flex; flex-direction:column'>

                        <input style='padding:10px' id="img_nine_title" type="text"
                            name='services_gallery_img_nine_title' value='<?= $services_gallery_img_nine_title; ?>'>
                        <br>
                        <label for="services_gallery_img_nine_text">image nine text</label>
                        <textarea id="services_gallery_img_nine_text" name="services_gallery_img_nine_text" rows='5'
                            cols='50'
                            style='resize:none; padding:10px'><?= $services_gallery_img_nine_text; ?></textarea>
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_nine_text">SAVE</button>
        </form>
    </div>

    <!--------- SERVICES GALLERY IMGS NINE IMG ----------->

<div class='update-inputs' style="border:1px solid #1a1a1a;background:#d3d3d3;  border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_services_gallery.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery image nine</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_nineg">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="services_gallery_img_nine" name="image" value="<?= $services_gallery_img_nine; ?>">
                    </div>

                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="services_gallery_img_nine_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text" id="services_gallery_img_nine_description"
                            name="services_gallery_img_nine_description" value="<?= $services_gallery_img_nine_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_services_gallery_img_nine">SAVE</button>
        </form>
    </div>
</div>
<?php endif; ?>
<div
    style='display:flex; flex-direction:column; justify-content:center; align-items: center; gap: 1rem; margin-bottom: 50px'>
    <p class='p-font-size'>View More Photos</p>
    <div class='light-bkgd-btn'>
        <a style='transition: all .4s ease;font-weight: 400;border-radius: 5px;padding: 17px 60px;color:<?= $accent_color; ?>; text-decoration: none; border: 1px solid <?= $accent_color; ?>'
            href="gallery.php">Photo Gallery</a>
    </div>
</div>

<script>
//////// TYPEWRITER TEXT ANIMATION
//////// https://www.youtube.com/watch?v=R846J8LJ6os
function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
}

const phrases = ["Full-Service", "Grooming Lounge", "Walk-Ins Welcome"];
const el = document.getElementById("typewriter");

let sleepTime = 100;

let curPhraseIndex = 0;

const writeLoop = async () => {
    while (true) {
        let curWord = phrases[curPhraseIndex];

        for (let i = 0; i < curWord.length; i++) {
            el.innerText = curWord.substring(0, i + 1);
            await sleep(sleepTime);
        }
        await sleep(sleepTime * 10);

        for (let i = curWord.length; i > 0; i--) {
            el.innerText = curWord.substring(0, i - 1);
            await sleep(sleepTime);
        }
        await sleep(sleepTime * 5);

        if (curPhraseIndex === phrases.length - 1) {
            curPhraseIndex = 0
        } else {
            curPhraseIndex++;
        }
    }
};

writeLoop();
</script>
<?php
      require_once 'footer.php';
?>