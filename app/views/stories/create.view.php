<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<main>
    <header>
        <h1>
            <strong>Add CORONA</strong>
            Warrior Stories
        </h1>
    </header>
    <div class="form-body">
        <form action="/story/create" class="box" method="post" enctype="multipart/form-data">

            <div class="control has-addon">
                <span class="control-addon">
                    Name
                </span>
                <input type="text" name="name" class="control-field" placeholder="Name">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Story Title
                </span>
                <input type="text" name="title" class="control-field" placeholder="Story Title">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Add Images* (Press 'ctrl' button to select multiple images)
                </span>
                <input type="file" name="image_arr[]" class="control-field" multiple>

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

                <input type="text" name="state" class="control-field" placeholder="State">


            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    District
                </span>

                <input type="text" name="district" class="control-field" placeholder="District">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Location
                </span>
                <input type="text" name="location" class="control-field" placeholder="Location">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Keywords
                </span>
                <input type="text" name="keywords" class="control-field" placeholder="Keywords..">
            </div>
            <div class="control">

                <input type="submit" class="control-field btn" placeholder="Submit" value="Submit">
            </div>
        </form>
    </div>
</main>

<?php require(dirname(__DIR__) . '/partials/footer.view.php');
unset($_SESSION['error']);
