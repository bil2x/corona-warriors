<?php
//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/public/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/public/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>

<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">SimpleWork </a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="<?php echo (route() == '') ? 'current_page_item' : ''; ?>"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="<?php echo (route() == 'clients') ? 'current_page_item' : ''; ?>"><a href="/clients" accesskey="2" title="">Our Clients</a></li>
                    <li class="<?php echo (route() == 'about') ? 'current_page_item' : ''; ?>"><a href="/about" accesskey="3" title="">About Us</a></li>
                    <li class="<?php echo (route() == 'articles') ? 'current_page_item' : ''; ?>"><a href="/articles" accesskey="4" title="">Articles</a></li>
                    <li class="<?php echo (route() == 'login') ? 'current_page_item' : ''; ?>"><a href="/login" accesskey="5" title="">Login</a></li>
                </ul>
            </div>
        </div>