<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['current_user'])) {
    ?>
        <h1>Hello, <?= $_SESSION['current_user']->name; ?> , You are successfully login.</h1>
        <button>
            <a href="logout">
                Logout</a></button>
    <?php } else { ?>
        <h1><a href="login">Please Login</a></h1>
    <?php } ?>
    <?= $_SESSION['error']['message']; ?>
    <?= $_SESSION['success']['message']; ?>
</body>

</html>

<?php
unset($_SESSION['error']);
unset($_SESSION['success']);
