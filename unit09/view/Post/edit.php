 <?php require_once('header.php') ?>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update New Category</h3>
    <hr>
        <form action="index.php?admin=admin&mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input value="<?= $post['title'] ?>" type="text" class="form-control" id="" placeholder="" name="title">
                <input value="<?= $post['id'] ?>" type="hidden" class="form-control" id="" placeholder="" name="id">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input value="<?= $post['description'] ?>" type="text" class="form-control" id="" placeholder="" name="description">
            </div>

            <div class="form-group">
            <label for="">Content</label>
            <input value="<?= $post['content'] ?>" type="text" class="form-control" id="" placeholder="" name="content">
        </div>
        <div class="form-group">
            <label for="">Time-cook</label>
            <input value="<?= $post['cooking_time'] ?>" type="text" class="form-control" id="" placeholder="" name="cooking_time">
        </div>
        <div class="form-group">
            <label for="">People</label>
            <input value="<?= $post['people'] ?>" type="text" class="form-control" id="" placeholder="" name="people">
        </div>
        <div class="form-group">
            <label for="">Level</label>
            <input value="<?= $post['level'] ?>" type="text" class="form-control" id="" placeholder="" name="level">
        </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php require_once('footer.php') ?>