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

            <form action="backend/add_news_article_info.php" class="stylist_form" method="POST"
                enctype="multipart/form-data">
                <div>
                    <a href="about.php">Back</a>
                </div>
                <br>
                <div>
                    <h2>add article</h2>
                </div>
                <br>
                <div style="display:flex; flex-direction:column; gap:1rem">

                    <!-- <input type="hidden" value='<?= $gallery_category; ?>' name='gallery_category'> -->


                    <label for="article_img">image</label>
                    <input id='news_article_img' type="file" name="image">

                    <label for="news_article_img_alt">image description</label>
                    <input type="text" name="news_article_img_alt">

                    <label for="news_article_title">article title</label>
                    <input type="text" name="news_article_title" id="news_article_title" placeholder="">

                    <label for="news_article_credits">article credits</label>
                    <input type="text" name="news_article_credits" id="news_article_credits" placeholder="">

                    <label for="news_article_text">article text</label>
                    <textarea id="news_article_text" name="news_article_text" value="news_article_text" rows='10'
                        cols='50' style='resize:none; padding:10px'></textarea>

                    <label for="news_article_read_more">read more</label>
                    <input type="text" name="news_article_read_more" id="news_article_read_more"
                        placeholder="To read the full artcle">

                    <label for="news_article_read_more_link">link to full article</label>
                    <input type="text" name="news_article_read_more_link" id="news_article_read_more_link"
                        placeholder="https://www.nbcnews.com/">

                    <!-- <label for="news_article_read_more_title"></label>
                    <input type="text" name="news_article_read_more_title" id="news_article_read_more_title" placeholder=""> -->
                    <button name="update_news_article" class="btn btn-blk">SAVE</button>
                </div>
            </form>
        </div>
        <br>
        <div class='mobile-edit-photos'>
            <div>
                <h2>edit article</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; height: 500px; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $news_article_query = "SELECT * FROM news_article";
                    $news_article_result = mysqli_query($conn, $news_article_query);
                    ?>
                <?php while ($news_article = mysqli_fetch_assoc($news_article_result)) : ?>
                <div class='nth-child-bkgd-color' style='border:1px solid #333; padding:10px; line-height: 1.5'>
                    <input type="hidden" name="id" value="<?= $news_article['id'] ?>">
                    <?php
                            GLOBAL $article_id;
                            $article_id = $news_article['id'];
                            ?>

                    <br>
                    <td>
                        <span style="display:flex; flex-direction:column; align-items:center; font-weight:bold">image:
                            <img style='width:200px' src='uploads/<?= $news_article['news_article_img'] ?>'
                                alt="<?= $news_article['news_article_img_alt'] ?>">
                        </span>
                    </td>
                    <br>
                    <td><span style='font-weight:bold'>image description:
                            <?= $news_article['news_article_img_alt']; ?></span>
                    </td>
                    <br>

                    <td><span style='font-weight:bold'>title: <?= $news_article['news_article_title']; ?></span>
                    </td>
                    <br>

                    <td><span style='font-weight:bold'>credits: <?= $news_article['news_article_credits']; ?></span>
                    </td>
                    <br>
                    <td><textarea id="article_text" name="news_article_text" rows='5' cols='50'
                            style='resize:none; padding:10px'><?= $news_article['news_article_text']; ?></textarea>
                        <br>
                    <td><span style='font-weight:bold'>read more: <?= $news_article['news_article_read_more']; ?></span>
                    </td>

                    <br>

                    <td><span style='font-weight:bold'>link to full article: <?= $news_article['news_article_read_more_link']; ?></span>
                    </td>
                    </td>
                    <?php
                    
                        echo "<br><br>
                        <div style='display:flex'>
                        <td><a class='btn btn-edit' href='backend/update_news_article_info.php?id=" . $news_article['id'] . "'>Edit</a></td>

                        <form action='backend/delete_news_article_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_news_article_btn' value='" . $news_article['id'] . "'> Delete</button>
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