<?php
require('includes/header.view.php');
?>

<div class="right-side">
    <h1>All Images will display here</h1>
    <div class="img">
        <?php
        foreach ($images as $image) :
        ?>

            <p>
                <a href="<?= ltrim($image->location, '.'); ?>" target="_blank"><img src="<?= ltrim($image->location, '.'); ?>" height="200" width="175"></a>
                <a href="/admin/images/delete?id=<?= $image->id; ?>"> <span><i class="fas fa-trash"></i></span></a>
            </p>
        <?php endforeach; ?>
    </div>


</div>
<?php
require('includes/footer.view.php');
?>