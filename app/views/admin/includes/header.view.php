<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/admin.css">
    <title>Document</title>
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
                        <li class="list-item <?php if (route() == 'admin/home') echo 'active' ?>">
                            <a href="home">Dashboard</a>
                        </li>
                        <li class="list-item <?php if (route() == 'admin/users') echo 'active' ?>"">
                            <a href=" users">Users</a>
                        </li>
                        <li class="list-item <?php if (route() == 'admin/articles') echo 'active' ?>"">
                            <a href=" articles">Articles</a>
                        </li>
                        <li class=" list-item">
                            <a href="logout">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>