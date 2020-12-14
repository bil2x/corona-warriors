<?php
require('partials/header.view.php');
?>
<div class="banner">
    <a href="/story/create/">
        <img src="public/images/banner.jpg" alt=""></a>
</div>
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
            // dd(getimage('story_id', $story->id, 1)[0]->location);
            // dd($story->id);
        ?>
            <a href="story?id=<?= $story->id; ?>">
                <div class="item">
                    <img src="<?= ltrim(getimage('story_id', $story->id, 1)[0]->location ??= './public/images/default.webp', '.'); ?>" alt="" width="200" height="250">
                    <p>Posted By <?= $story->name; ?></p>
                    <h2><?= $story->title; ?></h2>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <footer>
        <button><a href="/story/create/"> Stories </a></button>
        <button><a href="/stories/">More Stories</a></button>
    </footer>
</main>
<?php
require('partials/footer.view.php');
?>