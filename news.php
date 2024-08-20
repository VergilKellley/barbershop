<?php
    require_once 'backend/db.php';
  require_once 'header.php';
?>


<section class="sectionFirst">
    <div
        style="background-image: url('uploads/<?= $about_header_img; ?>'); width: 100%; height: 100%; position:absolute; top: 0; background-position: center; background-size: cover; background-repeat: no-repeat; z-index: -1;">
    </div>
    <!-- <h1>About</h1> -->

    <div class="transform-img">
        <img src="uploads/curved-bkgd.svg" alt="curved background" />
    </div>
</section>
<section id='article' style='padding-top:10vh; width: 70%; margin:0 auto'>
    <div style='display:flex; justify-content:center'>
        <div style='display:flex; flex-wrap:wrap;'>
            <div style='width:100%'>

                <?php $news_article_query = "SELECT * FROM news_article ORDER BY article_date DESC" ;
                
                $news_article_info = mysqli_query($conn, $news_article_query);
        ?>
                <?php while ($news_article = mysqli_fetch_assoc($news_article_info)) : ?>
                <div class ="news-article-container">
                        <div class="article" >
                            <h1><?= $news_article['news_article_title']; ?></h1>
                            <small><?= $news_article['news_article_credits']; ?></small>
                            <br>
                            <br>
                            <p><?= $news_article['news_article_text']; ?></p>
                            <br>
                            <p><?= $news_article['news_article_read_more']; ?> <a
                                    href="<?= $news_article['news_article_read_more_link']; ?>" target="_blank">click here.</a>
                            </p>
                        </div>

                    <div class="article-img">
                            <img style="max-width:100%" src="uploads/<?= $news_article['news_article_img']; ?>"
                                alt="<?= $news_article['news_article_img_alt']; ?>">
                        </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>


<?php
      require_once 'footer.php';
?>