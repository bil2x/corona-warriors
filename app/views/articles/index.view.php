<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<div id="wrapper">
    <div id="page" class="container">
        <?php foreach ($articles as $article) : ?>
            <div id="content">
                <div class="title">
                    <h2><a href="/article?id=<?= $article->id ?>"><?= $article->title; ?></a></h2>
                </div>
                <p><img src="/public/images/banner.jpg" alt="" class="image image-full" /> </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require(dirname(__DIR__) . '/partials/footer.view.php'); ?>