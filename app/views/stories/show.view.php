<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<main>
    <header>
        <h1>
            <strong>CORONA</strong>
            Warrior Stories
        </h1>
    </header>
    <div class="form-body">

        <div class="box">
            <h3><?= $article[0]->name; ?></h3>
            <p><?= date('F j,Y', strtotime($article[0]->created_at)); ?> <?= $article[0]->district; ?>, <?= $article[0]->state; ?></p>
            <h2><?= $article[0]->title; ?></h2>
            <img src="<?= $article[0]->image; ?>" alt="" width="700" height="450">
        </div>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php');
unset($_SESSION['error']);
