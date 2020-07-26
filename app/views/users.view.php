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

<h1><?=base64_encode('password');?></h1>
<h1><?=base64_decode('cGFzc3dvcmQ=');?></h1>
<?php
require('partials/footer.php');
?>