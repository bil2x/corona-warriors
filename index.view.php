<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <?php foreach ($tasks as $task) : ?>

            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>

            <?php else : ?>
                <li><?= $task->description; ?></li>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>
</body>

</html>