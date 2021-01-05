<?php
require('includes/header.view.php');
?>

<div class="right-side">
    <h1>All Images will display here</h1>
    <div class="img">
        <?php
        foreach ($images as $image) :
        ?>

            <div class="image">
                <a href="#<?= ltrim($image->location, '.'); ?>">
                    <img src="<?= ltrim($image->location, '.'); ?>" height="200" width="175">
                    <a class="trash" href="/admin/images/delete?id=<?= $image->id; ?>" title="Delete Image"> <span><i class="fas fa-times-circle"></i></span></a>
                </a>
            </div>
            <div id="<?= ltrim($image->location, '.'); ?>" class="overlay">
                <a href="#" class="cancel"></a>
                <div class="modal"><img src="<?= ltrim($image->location, '.'); ?>" alt="" width="700" height="450"></div>
            </div>
        <?php endforeach; ?>
    </div>


</div>
<?php
require('includes/footer.view.php');
?>