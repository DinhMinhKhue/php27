<?php require_once('header.php') ?>
<div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
    <form action="index.php?admin=admin&mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description">
        </div>
        <div class="form-group">
            <label for="">Images</label>
            <input type="file" class="form-control" placeholder="" name="thumbnail">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<?php require_once('footer.php') ?>