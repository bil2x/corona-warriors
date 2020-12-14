<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<main>
    <header>
        <h1>
            <strong>CORONA</strong>
            Warrior Stories
        </h1>
    </header>
    <div class="gcontainer">
        <?php
        //dd($stories);
        foreach ($stories as $story) :
            //dd($story);
        ?>
            <a href="/story?id=<?= $story->id; ?>">
                <div class="item">
                    <img src="<?= ltrim(getimage('story_id', $story->id, 1)[0]->location ??= './public/images/default.webp', '.'); ?>" alt="" width="200" height="250">
                    <p>Posted By <?= $story->name; ?></p>
                    <h2><?= $story->title; ?></h2>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php'); ?>