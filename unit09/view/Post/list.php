<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="" class="btn btn-primary">Add New Posts</a>

        <?php echo (isset($_COOKIE['post_add_msg'])?$_COOKIE['post_add_msg']:'') ?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
               <!--  <th>Thumbnail</th> -->
                <!-- <th>User_ID</th> -->
            </thead>

            <?php 
            foreach ($posts as $post) {
                
                
                ?>
                <tr>
                    <td><?= $post['id'] ?></td>
                    <td><?= $post['title'] ?></td>
                    <td><?= $post['description'] ?></td>
                    <!-- <td>
                        <img src="<?= $post['thumbnail'] ?>" width="100px" height="100px">
                    </td> -->
                    <!-- <td><?= $post[''] ?></td> -->
                    
                    <td>
                        <a href="index.php?mod=post&act=detail&id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="index.php?mod=post&act=delete&id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
