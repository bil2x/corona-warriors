<?php
require('includes/header.view.php');
?>
<div class="right-side center-addon">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $i = 0;
            foreach ($stories as $story) : $i++; ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $story->title; ?></td>
                    <td><?= $story->name; ?></td>
                    <td><a href="./story?id=<?= $story->id ?>">View</a> | <a href="./publish?id=<?= $story->id ?>">Publish</a> | <a href="./delete?id=<?= $story->id ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<!-- admin-content end -->
<?php
require('includes/footer.view.php');
?>