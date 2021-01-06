<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/admin.css">
    <link rel="stylesheet" href="/public/css/all.css">
    <link rel="stylesheet" href="/public/css/common.css">
    <title>Admin Panel</title>
    <style>
        .trash {
            position: absolute;
            padding-left: .5em;
        }

        .image {
            position: relative;
            padding: 0 1em;
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <header>
            <h2 style="margin: 0px;">
                Official Usage Area
            </h2>

        </header>
        <div class="admin-content">
            <div class="left-side">
                <nav>
                    <ul>

                        <li class="list-item">
                            <a href="/admin/dashboard" class=" <?php if (route() == 'admin/dashboard') echo 'active' ?>"><i class="fas fa-house-user"></i>&nbsp;Dashboard</a>
                        </li>
                        <li class="list-item">
                            <a href="/admin/users" class="<?php if (route() == 'admin/users') echo 'active' ?>"> <i class="fas fa-users"></i>&nbsp;Users </a>
                        </li>
                        <li class="list-item">
                            <a href="/admin/stories" class=" <?php if (route() == 'admin/stories') echo 'active' ?>"> <i class="fas fa-industry"></i>&nbsp;Stories </a>
                        </li>
                        <li class="list-item">
                            <a href="/admin/images" class=" <?php if (route() == 'admin/images') echo 'active' ?>"> <i class="fas fa-images"></i>&nbsp;Images </a>
                        </li>
                        <li class="list-item">
                            <a href="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>