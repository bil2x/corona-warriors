<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />
    <title>Admin Panel</title>
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

                        <li class="list-item <?php if (route() == 'admin/dashboard') echo 'active' ?>">
                            <a href="/admin/dashboard">Dashboard</a>
                        </li>
                        <li class="list-item <?php if (route() == 'admin/users') echo 'active' ?>"">
                            <a href="/admin/users">Users </a> </li> <li class="list-item <?php if (route() == 'admin/stories') echo 'active' ?>"">
                            <a href="/admin/stories">Stories </a> </li> <li class="list-item <?php if (route() == 'admin/images') echo 'active' ?>"">
                            <a href="/admin/images">Images </a> </li> <li class="list-item">
                            <a href="logout">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>