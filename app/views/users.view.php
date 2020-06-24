<?php
require('partials/header.php');
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

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>
</ul>

<h1>Submit your name</h1>

<form method="POST" action="/users">
    <input type="text" name="name" id="">
    <button>Add</button>
</form>
<?php
require('partials/footer.php');
?>