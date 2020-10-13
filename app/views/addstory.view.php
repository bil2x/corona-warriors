<?php
require('partials/header.view.php');
?>
<main>
    <header>
        <h1>
            <strong>Add CORONA</strong>
            Warrior Stories
        </h1>
    </header>
    <div class="form-body">
        <form action="" class="box">

            <div class="control has-addon">
                <span class="control-addon">
                    Name
                </span>
                <input type="text" class="control-field" placeholder="Username">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Story Title
                </span>
                <input type="text" class="control-field" placeholder="Email Address">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Add Images* (Maximum 4 images / Press 'ctrl' button to select multiple images)
                </span>
                <input type="file" class="control-field">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Video URL (if any)
                </span>
                <input type="url" class="control-field">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    States
                </span>
                <select name="states" id="" class="control-field">
                    <option value=""></option>
                    <option value="">West Bengal</option>
                </select>

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    District
                </span>
                <select name="states" id="" class="control-field">
                    <option value=""></option>
                    <option value="">West Bengal</option>
                </select>
            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Location
                </span>
                <input type="text" class="control-field" placeholder="Email Address">

            </div>
            <div class="control has-addon">
                <span class="control-addon">
                    Keywords
                </span>
                <input type="text" class="control-field" placeholder="Email Address">
            </div>
            <div class="control">

                <input type="submit" class="control-field btn" placeholder="Submit" value="Submit">
            </div>
        </form>
    </div>
</main>
<?php
require('partials/footer.view.php');
?>