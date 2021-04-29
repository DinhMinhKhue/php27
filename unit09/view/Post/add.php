<?php require_once('header.php') ?>
<div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Add New Post</h3>
    <hr>
    <form action="index.php?admin=admin&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description">
        </div>
        <div class="form-group">
            <label for="">Images</label>
            <input type="file" class="form-control" placeholder="" name="thumbnail">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <input type="text" class="form-control" id="" placeholder="" name="content">
        </div>
        <div class="form-group">
            <label for="">Time-cook</label>
            <input type="text" class="form-control" id="" placeholder="" name="cooking_time">
        </div>
        <div class="form-group">
            <label for="">People</label>
            <input type="text" class="form-control" id="" placeholder="" name="people">
        </div>
        <div class="form-group">
            <label for="">Level</label>
            <input type="text" class="form-control" id="" placeholder="" name="level">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php require_once('footer.php') ?>