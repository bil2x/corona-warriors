<?php require(dirname(__DIR__) . '/includes/header.view.php'); ?>
<div class="right-side center-addon">

    <div class='table-list'>
        <h2>User List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!count($users)) { ?>
                    <tr>
                        <td colspan="3">No Users Found</td>

                    </tr>
                    <?php } else {
                    $count = 0;
                    foreach ($users as $user) : $count++; ?>
                        <tr>
                            <td><?= $count; ?></td>
                            <td><?= $user->name; ?></td>
                            <td><?= $user->email; ?></td>
                            <td>View|Delete</td>
                        </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
        <h4 style="text-align: right;"><a href="/admin/users/create">Add User</a>
        </h4>
    </div>
</div>
<?php require(dirname(__DIR__) . '/includes/footer.view.php'); ?>