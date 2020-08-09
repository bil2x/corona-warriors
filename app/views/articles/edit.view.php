<?php require(dirname(__DIR__) . '/partials/header.view.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading">New Article</h1>
        <form action="/article/edit" method="POST">
            <input type="hidden" name="id" value="<?= $article[0]->id; ?>">
            <div class="control">
                <label for="name" class="label">Title</label>
                <input type="text" id="title" name="title" class="input" value="<?= $article[0]->title; ?>">
                <span class="help is-danger"><?php echo $_SESSION['error']['title'] ?? ''; ?></span>
            </div>
            <div class="control">
                <label for="name" class="label">Excerpt</label>
                <input type="text" id="excerpt" name="excerpt" class="input" value="<?= $article[0]->excerpt; ?>">
                <span class="help is-danger"><?php echo $_SESSION['error']['excerpt'] ?? ''; ?></span>
            </div>
            <div class="control">
                <label for="name" class="label">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="textarea"><?= $article[0]->body; ?></textarea>
                <span class="help is-danger"><?php echo $_SESSION['error']['body'] ?? ''; ?></span>
            </div>
            <div class="control">
                <button class="button">UPDATE</button>
            </div>

        </form>
    </div>
</div>
<?php require(dirname(__DIR__) . '/partials/footer.view.php');
unset($_SESSION['error']);
