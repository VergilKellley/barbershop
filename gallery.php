<?php
  require_once 'header.php';
//   require_once 'backend/display_gallery_images.php';
?>

<section class="sectionFirst">
    <div
        style="background-image: url('uploads/<?= $gallery_header_img; ?>'); width: 100%; height: 100%; position:absolute; top: 0; background-position: center; background-size: cover; background-repeat: no-repeat; z-index: -1;">
    </div>
    <!-- <h1>Gallery</h1> -->

    <section class="transform-img">
        <img src="uploads/curved-bkgd.svg" alt="curved background" />
    </section>
</section>

<?php if (isset($user)): ?>
<div id='gallery-header'
    style=" width:100vw; display:flex;justify-content:center; flex-wrap:wrap; gap: 2rem; margin-bottom:10vh; padding:0 20px">

    <!--------- GALLERY PAGE HEADER IMG ----------->

    <div class='update-inputs' id='services-gallery' style="border:1px solid #1a1a1a;background:#d3d3d3; border-radius: 5px; margin-top: 5vh">
        <form action="backend/update_gallery_page.php" method="post" enctype="multipart/form-data">
            <h3
                style="text-align:center; background:#fff; border-top-left-radius:5px; border-top-right-radius:5px; padding: 5px ">
                gallery page header image</h3>
            <div
                style="background:#d3d3d3; border-top-left-radius:0; border-top-right-radius:0; border-bottom-right-radius:5px; border-bottom-left-radius:5px;">

                <div style="padding: 10px">
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="gallery_header_img">image</label>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        <input style="padding:8px 10px; border-radius:5px" type="file" id="gallery_header_img"
                            name="image" value="<?= $gallery_header_img; ?>">
                    </div>
                    <div style='margin-bottom:20px'>
                        <div>
                            <label for="gallery_header_img_description">description</label>
                        </div>
                        <input style="padding:8px 10px; border-radius:5px" type="text"
                            id="gallery_header_img_description" name="gallery_header_img_description"
                            value="<?= $gallery_header_img_description; ?>">
                    </div>
                </div>
            </div>
            <button class="update-btns" type="submit" name="update_gallery_header_img">SAVE</button>
        </form>
    </div>
</div>
<?php endif; ?>

<!-- GALLERY -->
<section class="gallery">
    <div class="container">
        <div class="row" style='background: <?= $accent_color; ?>; color:<?= $secondary_color; ?>'>
            <div class="gallery-filter">
                <span class="filter-item active" data-filter="all">All</span>

                <!-- GET ALL THE CATEGORIES -->
                <?php $category_query = "SELECT * FROM gallery_categories";
                
                $category_info = mysqli_query($conn, $category_query);
        ?>
                <?php while ($category = mysqli_fetch_assoc($category_info)) : ?>
                <span class="filter-item"
                    data-filter="<?= $category['gallery_category']; ?>"><?= $category['gallery_category']; ?></span>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="row" style='height:450px; overflow:scroll; border:2px solid <?= $accent_color; ?>'>

            <!-- GALLERY ITEM START GET ALL THE IMAGES -->

            <?php $gallery_query = "SELECT * FROM gallery_images_and_categories";
                
                $gallery_info = mysqli_query($conn, $gallery_query);
        ?>
            <?php while ($gallery = mysqli_fetch_assoc($gallery_info)) : ?>
            <div class="gallery-item <?= $gallery['gallery_category']; ?>">
                <!-- <input type="hidden" value="<?= $gallery['gallery_category']; ?>"> -->
                <div class="gallery-item-inner">
                    <img class="filter-img" src="uploads/<?= $gallery['gallery_img']; ?>"
                        alt="<?= $gallery['gallery_img_alt']; ?>">
                </div>
            </div>
            <?php endwhile; ?>
            <!-- GALLERY ITEM END -->

        </div>
    </div>
</section>

<script>
// GALLERY PAGE

const filterContainer = document.querySelector(".gallery-filter"),
    galleryItems = document.querySelectorAll(".gallery-item");

filterContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("filter-item")) {
        // deactivate existing active 'filter-item'
        filterContainer.querySelector(".active").classList.remove("active");
        // activate new 'filter-item'
        event.target.classList.add("active");
        const filterValue = event.target.getAttribute("data-filter");
        galleryItems.forEach((item) => {
            if (item.classList.contains(filterValue) || filterValue === 'all') {
                item.classList.remove("hide");
                item.classList.add("show");
            } else {
                item.classList.remove("show");
                item.classList.add("hide");
            }
        })
    }
});
</script>

<?php
      require_once 'footer.php';
?>