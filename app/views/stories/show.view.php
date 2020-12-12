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
            <?php
            if (isset($_SESSION['current_user']) && !empty($_SESSION['current_user'])) {
                if ($_SESSION['current_user']->id == $article[0]->user_id) {
            ?>
                    <a href="/story/edit?id=<?= $article[0]->id; ?>" class="btn">Update</a>
            <?php }
            } ?>
        </div>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php');
