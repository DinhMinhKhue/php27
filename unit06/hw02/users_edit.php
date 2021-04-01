<?php
$id = $_GET['id'];
require_once('connection.php');

    // $id = $_GET['id'];

    //Câu lệnh truy vấn
$query = "SELECT * FROM users WHERE id = ". $id;

    //Thực thi câu lệnh
$result = $conn->query($query);
    // $result = $conn->query($query)->fetch_assoc();

$users = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <h3 align="center">---Update Category---</h3>
        <hr>
        <form action="users_edit_process.php?id=<?= $users['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $users['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $users['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $users['email'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>