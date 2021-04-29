    <?php require 'header.php'; ?>

        <div class="container-fluid">
        <h3 class="text-center">--- POST ---</h3>
        <a href="index.php?admin=admin&mod=post&act=add" class="btn btn-primary">Add New POST</a>
        
            <?php echo (isset($_COOKIE['success'])?$_COOKIE['success']:'') ?>
            <?php echo (isset($_COOKIE['error'])?$_COOKIE['error']:'') ?>
            <table  class="table_design" style="text-align: center">
                <thead class="thead-default">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                    <th>Action</th>
                    <!-- <th>User_ID</th> -->
                </thead>

                <?php 
                foreach ($posts as $post) {


                    ?>
                    <tr>
                        <td><?= $post['id'] ?></td>
                        <td><?= $post['title'] ?></td>
                        <td><?= $post['description'] ?></td>
                    <td>
                        <img src="public/images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <!-- <td><?= $post[''] ?></td> -->
                    
                    <td>
                        <a href="index.php?admin=admin&mod=post&act=detail&id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="index.php?admin=admin&mod=post&act=edit&id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="index.php?admin=admin&mod=post&act=delete&id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
</div>
<?php 
require 'footer.php';
?>
