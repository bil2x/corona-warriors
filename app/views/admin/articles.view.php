<?php
require('includes/header.view.php');
?>
<div class="right-side">
    <div>
        <ul class="style1">
            <?php foreach ($articles as $article) : ?>
                <li class="first">
                    <h3><a href="/article?id=<?= $article->id ?>"><?= $article->title; ?></a></h3>
                    <p><?= $article->excerpt; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>
<?php
require('includes/footer.view.php');
?>