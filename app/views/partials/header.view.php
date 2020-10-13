<!DOCTYPE html>
<html>

<head>
    <title>CORONA WARRIORS</title>
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
                        <li class="<?php echo (route() == 'contact') ? 'current_page_item' : ''; ?>"><a href="/login/">Login</a></li>
                    </ul>
                </nav>
            </div>


        </header>