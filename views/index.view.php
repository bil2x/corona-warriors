<?php
require('./views/partials/header.php');
?>
<ul>

    <?php foreach ($tasks as $task) : ?>

        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>

        <?php else : ?>
            <li><?= $task->description; ?></li>
        <?php endif; ?>

    <?php endforeach; ?>
</ul>
<?php
require('./views/partials/footer.php');
?>