<?php
require('includes/header.view.php');
?>
<div class="right-side center-addon">

    <div class='table-list'>
        <h2>User List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
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
                        </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
    </div>
    <div class="form-location">
        <form action="users" class="box" method="post">
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
</div>
<?php
require('includes/footer.view.php');
?>