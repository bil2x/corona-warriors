<?php
// session_start();
if (($page == 'Login') && (auth()))
    header('Location:/')

?>
<!DOCTYPE html>
<html>

<head>
    <title>CORONA WARRIORS</title>
    <link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/common.css">
</head>

<body>
    <div id="container">

        <header>
            <div class="logo-navigation">
                <h1>
                    <a href="/">Warrior</a>
                </h1>

                <?php require('nav.view.php'); ?>

            </div>


        </header>