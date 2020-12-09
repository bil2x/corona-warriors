<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<main>
    <header>
        <h1>
            <strong>Update CORONA</strong>
            Warrior Stories
        </h1>
    </header>
    <div class="form-body">
        <form action="/story/update" class="box" method="post" enctype="multipart/form-data">

            <div class="control has-addon">
                <span class="control-addon">
                    Name
                </span>
                <input type="text" name="name" class="control-field" placeholder="Name" value="<?= $story[0]->name; ?>">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Story Title
                </span>
                <input type="text" name="title" class="control-field" placeholder="Title" value="<?= $story[0]->title; ?>">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Add Images* (Maximum 4 images / Press 'ctrl' button to select multiple images)
                </span>
                <input type="file" name="image" class="control-field">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Video URL (if any)
                </span>
                <input type="url" name="video" class="control-field" value="https://www.youtube.com/watch?v=q1anZ08Y7nQ">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    State
                </span>

                <input type="text" name="state" class="control-field" placeholder="State" value="<?= $story[0]->state; ?>">


            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    District
                </span>

                <input type="text" name="district" class="control-field" placeholder="District" value="<?= $story[0]->district; ?>">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Location
                </span>
                <input type="text" name="location" class="control-field" placeholder="Location" value="<?= $story[0]->location; ?>">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Keywords
                </span>
                <input type="text" name="keywords" class="control-field" placeholder="Keywords.." value="<?= $story[0]->keywords; ?>">
            </div>
            <div class="control">

                <input type="submit" class="control-field btn" placeholder="Submit" value="Update">
            </div>
        </form>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php');
unset($_SESSION['error']);
