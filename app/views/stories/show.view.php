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
            <iframe width="700" height="315" src="https://www.youtube.com/embed/<?= substr(strstr($story[0]->video, '?v='), 3); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <img src="<?= ltrim(getimage('story_id', $story[0]->id, 1)[0]->location ??= './public/images/default.webp', '.'); ?>" alt="" width="700" height="450">
            <p>
                <?php
                $allImages = getimage('story_id', $story[0]->id);
                //  dd($allImages);
                foreach ($allImages as $image) {
                ?>
                    <a href="<?= ltrim($image->location, '.'); ?>" target="_blank"><img src="<?= ltrim($image->location, '.'); ?>" alt="100" width="75"></a>
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
