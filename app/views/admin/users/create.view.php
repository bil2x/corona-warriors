<?php require(dirname(__DIR__) . '/includes/header.view.php'); ?>
<div class="right-side">

    <div class="center-location">
        <form action="create" class="box" method="post">
            <div>
                <h2>Add Users</h2>
                <div class="control">
                    <input type="text" name="name" placeholder="Name" required>
                </div>

                <div class="control">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>

                <div class="control">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="control">
                    <input type="submit" name="submit" value="Submit" class="primary-button">
                </div>
            </div>

        </form>
    </div>
</div>

<?php require(dirname(__DIR__) . '/includes/footer.view.php'); ?>