<?php 
require_once('connection.php');
$id = $_GET['id'];

// Câu lệnh truy vấn
$query = "SELECT * FROM posts WHERE id=".$id;
// Thực thi câu lệnh
$result = $conn->query($query);
$post = $result->fetch_assoc();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<h3>post: <?= $post['title'] ?></h3>
 </body>
 </html>
