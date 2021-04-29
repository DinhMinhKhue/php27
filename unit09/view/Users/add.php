<?php require_once('header.php') ?>
        <div class="content-wrapper">
        <h3 align="center">Zent - Education And Technology Group</h3>
        <h3 align="center">Add New User</h3>
        <hr>
        <form action="?admin=admin&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
<?php require_once('footer.php') ?>