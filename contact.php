<?php
require_once 'header.php';
  require_once 'backend/display_contact_images.php';
  require_once 'backend/display_contact_form.php';
?>

<section class="sectionFirst">
    <div
        style="background-image: url('<?= $contact_header_image; ?>'); width: 100%; height: 100%; position:absolute; top: 0; background-position: center; background-size: cover; background-repeat: no-repeat; z-index: -1;">
    </div>
    <!-- <h1>Contact</h1> -->

    <section class="transform-img">
        <img src="uploads/curved-bkgd.svg" alt="curved background" />
    </section>
</section>

<!-- SECOND SECTION -->
<section class="formMap">
    <div class="form">
        <div style='color: <?= $accent_color; ?>' class="f-head"><?= $contact_form_title; ?></div>
        <p class="f-para p-font-size"><?= $contact_form_text; ?></p>
        <form action="backend/add_contact_form_message.php" method="post">
            <input type="text" name="contact_form_name" id="" placeholder="Name" required>
            <input type="number" name="contact_form_phone" id="" placeholder="Phone" required>
            <input type="email" name="contact_form_email" id="" placeholder="Email" required>

            <!-- <select name="" id="">
                <option value="" disabled>Select Services</option>
                <option value="">Nail Art</option>
                <option value="">Manicure</option>
                <option value="">Pedicure</option>
            </select> -->

            <textarea name="contact_form_message" id="" cols="30" rows="10" style="resize: none;"></textarea>
            <button
                style='background:<?= $seondary_color; ?>; border:1px solid <?= $accent_color; ?>; color: <?= $accent_color; ?>' name="submit_contact_form"
                type="submit">Send</button>
        </form>
    </div>

    <div id='google-map' class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d104516.96198620103!2d-80.89799113341115!3d35.0528621413139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x88569dc18cf2005b%3A0x3d5a0637ca24bdbd!2s8610%20Camfield%20St%20G%2C%20Charlotte%2C%20NC%2028277!3m2!1d35.05289!2d-80.81559!5e0!3m2!1sen!2sus!4v1720213707279!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php if (isset($user)): ?>
<div id='contact'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; margin-bottom:10vh; padding:0 20px">

    <!--------- CONTACT PAGE INPUTS ----------->

    <div class='update-inputs' id='contact-inputs'
        style="border:1px solid #1a1a1a;background:#d3d3d3; border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_contact_form.php" method="post">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                get in touch form
            </h3>
            <br>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">
                <div style='margin-bottom:20px; padding:10px'>
                    <div>
                        <label for="contact_form_title">title</label>
                    </div>
                    <div>
                        <textarea name="contact_form_title" id="contact_form_title" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $contact_form_title; ?></textarea>
                    </div>
                    <br>
                    <div>
                        <label for="contact_form_text">text</label>
                    </div>
                    <div>
                        <textarea name="contact_form_text" id="contact_form_text" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $contact_form_text; ?></textarea>
                    </div>
                    <br>
                    <!-- <div>
                        <label for="contact_form_name">name</label>
                    </div>
                    <div>
                        <input style="padding:8px 10px; border-radius:5px;" type="text"
                            id="contact_form_name" name="contact_form_name"
                            value="<?= $contact_form_name; ?>">
                    </div>
                    <br>
                    <div>
                        <label for="contact_form_phone">phone</label>
                    </div>
                    <div>
                        <input style="padding:8px 10px; border-radius:5px;" type="text"
                            id="contact_form_phone" name="contact_form_phone"
                            value="<?= $contact_form_phone; ?>">
                    </div>
                    <br>
                    <div>
                        <label for="contact_form_email">email</label>
                    </div>
                    <div>
                        <input style="padding:8px 10px; border-radius:5px;" type="text"
                            id="contact_form_email" name="contact_form_email"
                            value="<?= $contact_form_email; ?>">
                    </div> -->
                </div>
                <button class="update-btns" type="submit" name="update_contact_form">SAVE</button>
            </div>
        </form>
    </div>
</div>
<?php endif; ?>

<?php
  require_once 'footer.php';
?>