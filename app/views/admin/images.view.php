<?php
require('includes/header.view.php');
?>

<div class="right-side">
    <div>
        <p><img src="/public/images/banner.jpg" alt="" class="image image-full" width="700px" /> </p>
    </div>
    <h1>All Images will display here</h1>
    <h2>Admin can remove images</h2>
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
</div>
<?php
require('includes/footer.view.php');
?>