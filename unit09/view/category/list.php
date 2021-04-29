<?php require_once('header.php') ?>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="index.php?admin=admin&mod=category&act=add" class="btn btn-primary">Add New Category</a>
       <?php echo (isset($_COOKIE['success'])?$_COOKIE['success']:'') ?>
        <?php echo (isset($_COOKIE['error'])?$_COOKIE['error']:'') ?>


        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </thead>

            <?php 
            foreach ($categories as $cate) {
                
                
                ?>
                <tr>
                    <td><?= $cate['id'] ?></td>
                    <td><?= $cate['name'] ?></td>
                    <td><?= $cate['description'] ?></td>
                    <td>
                        <a href="index.php?admin=admin&mod=category&act=detail&id=<?= $cate['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="index.php?admin=admin&mod=category&act=edit&id=<?= $cate['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="index.php?admin=admin&mod=category&act=delete&id=<?= $cate['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
<?php require_once('footer.php') ?>