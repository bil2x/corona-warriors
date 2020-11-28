<?php
session_start();
if (($page == 'Login') && (isset($_SESSION['current_user'])))
    header('Location:/')

?>
<!DOCTYPE html>
<html>

<head>
    <title>CORONA WARRIORS</title>
    <link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/styles.css">
</head>

<body>
    <div id="container">

        <header>
            <div class="logo-navigation">
                <h1>
                    <a href="/">Warrior</a>
                </h1>
                <nav>
                    <ul>
                        <li class="<?php echo (route() == '') ? 'current_page_item' : ''; ?>"><a href="/">Home</a></li>
                        <li class="<?php echo (route() == 'story/create') ? 'current_page_item' : ''; ?>"><a href="/story/create/">Add Story</a></li>
                        <li class="<?php echo (route() == 'stories') ? 'current_page_item' : ''; ?>"><a href="/stories/">View Stories</a></li>

                        <?php if (isset($_SESSION['current_user'])) { ?>

                            <li class=""><a href="#"><?= ucwords($_SESSION['current_user']->name); ?></a></li>
                            <li class="<?php echo (route() == 'login') ? 'current_page_item' : ''; ?>"><a href="/logout/">Logout</a></li>
                        <?php } else { ?>
                            <li class="<?php echo (route() == 'login') ? 'current_page_item' : ''; ?>"><a href="/login/">Login</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>


        </header>