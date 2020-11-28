<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<main>
    <header>
        <h1>
            <strong>CORONA</strong>
            Warrior Stories
        </h1>
    </header>
    <div class="form-body">

        <form action="/register" class="box" method="post">
            <div class="control header">
                REGISTER TO ADD, SHARE, COMMENT </div>
            <div class="control has-addon">
                <span class="control-addon"> Name </span>
                <input type="text" class="control-field" placeholder="Name" name="name">
                <span class="help is-danger"><?php echo $_SESSION['error']['name'] ?? ''; ?></span>
            </div>
            <div class="control has-addon">
                <span class="control-addon"> E-Mail Address </span>
                <input type="email" class="control-field" placeholder="Email Address" name="email">
                <span class="help is-danger"><?php echo $_SESSION['error']['email'] ?? ''; ?></span>
            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Password
                </span>
                <input type="password" class="control-field" placeholder="Password" name="password">
                <span class="help is-danger"><?php echo $_SESSION['error']['password'] ?? ''; ?></span>
            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Confirm Password
                </span>
                <input type="password" class="control-field" placeholder="Confirm Password" name="password_confirmation">
                <span class="help is-danger"><?php echo $_SESSION['error']['password_confirmation'] ?? ''; ?></span>
            </div>
            <div class="control">
                <input type="submit" class="control-field btn" placeholder="Submit" value="Submit">
                <a href="/login">Already Register?</a>
            </div>
        </form>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php');
unset($_SESSION['error']);
