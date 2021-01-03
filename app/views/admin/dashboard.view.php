<?php
require('includes/header.view.php');
?>

<div class="right-side flex direction-column">
    <div style="text-align: center;">
        <h1>Welcome To Dashboard</h1>
    </div>
    <div class="cards">
        <div class="card">
            <div class="card-left">Total Number of users</div>
            <div class="card-right"><?php echo count($users); ?></div>
        </div>
        <div class="card">
            <div class="card-left">Total Number of stories</div>
            <div class="card-right"><?php echo count($stories); ?></div>
        </div>
        <div class="card">
            <div class="card-left">Total Number of images</div>
            <div class="card-right"><?php echo count($images); ?></div>
        </div>
    </div>
</div>
<?php
require('includes/footer.view.php');
?>