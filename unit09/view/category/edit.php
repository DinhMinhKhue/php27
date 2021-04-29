 <?php require_once('header.php') ?>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update New Category</h3>
    <hr>
        <form action="index.php?admin=admin&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input value="<?= $category['name'] ?>" type="text" class="form-control" id="" placeholder="" name="name">
                <input value="<?= $category['id'] ?>" type="hidden" class="form-control" id="" placeholder="" name="id">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input value="<?= $category['description'] ?>" type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php require_once('footer.php') ?>