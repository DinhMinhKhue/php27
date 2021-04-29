 <?php require_once('header.php') ?>

    <div class="container">
        <h3 align="center">DevMind - Education And Technology Group</h3>
        <h3 align="center">---Update User---</h3>
        <hr>
        <form action="index.php?admin=admin&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $user['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $user['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $user['email'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php require_once('footer.php') ?>