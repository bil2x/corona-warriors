<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<div id="wrapper">
    <div id="page" class="container">

        <div id="content">
            <div class="title">
                <h2><?= $article[0]->title; ?></h2>
                <span class="byline"><?= $article[0]->excerpt; ?></span>
            </div>
            <p><img src="public/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p><?= $article[0]->body; ?></p>
        </div>

    </div>
</div>
<?php require(dirname(__DIR__) . '/partials/footer.view.php'); ?>