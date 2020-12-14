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
            <h3><?= $story[0]->name; ?></h3>
            <p><?= date('F j,Y', strtotime($story[0]->created_at)); ?> <?= $story[0]->district; ?>, <?= $story[0]->state; ?></p>
            <h2><?= $story[0]->title; ?></h2>
            <img src="<?= ltrim(getimage('story_id', $story[0]->id, 1)[0]->location ??= './public/images/default.webp', '.'); ?>" alt="" width="700" height="450">
            <p>
                <?php
                $allImages = getimage('story_id', $story[0]->id);
                //  dd($allImages);
                foreach ($allImages as $image) {
                ?>
                    <img src="<?= ltrim($image->location, '.'); ?>" alt="100" width="75">
                <?php } ?>
            </p>
            <?php
            if (auth()) {
                if (auth()->id == $story[0]->user_id) {
            ?>
                    <a href="/story/edit?id=<?= $story[0]->id; ?>" class="btn">Update</a>
            <?php }
            } ?>
        </div>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php');
