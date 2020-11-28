<?php
$page = 'Login';
require(dirname(__DIR__) . '/partials/header.view.php');
?>
<main>
    <header>
        <h1>
            <strong>CORONA</strong>
            Warrior Stories
        </h1>
    </header>
    <div class="form-body">

        <form action="/login" class="box" method="post">
            <div class="control header">
                LOGIN TO ADD YOUR STORY
            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    E-Mail Address
                </span>
                <input type="email" class="control-field" placeholder="Email Address" required autocomplete="email" autofocus name="email">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Password
                </span>
                <input type="password" class="control-field" placeholder="Password" name="password" required autocomplete="current-password">
            </div>
            <div class="control">
                <input type="submit" class="control-field btn" placeholder="Submit" value="Submit">
                <a href="/register">New User?</a>
                <!-- <a class="btn btn-link" href="/reset">
                    Forgot Your Password?
                </a> -->
            </div>
        </form>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php');
unset($_SESSION['error']);
