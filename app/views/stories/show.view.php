<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
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
        <div id="sidebar">
            <a href="article/create"><button class="button is-primary">CREATE</button></a>
            <a href="article/edit?id=<?= $article[0]->id; ?>"><button class="button">EDIT</button></a>
            <a href="article/delete?id=<?= $article[0]->id; ?>"><button class="button is-danger">DELETE</button></a>


        </div>

    </div>
</div>
<?php require(dirname(__DIR__) . '/partials/footer.view.php'); ?>