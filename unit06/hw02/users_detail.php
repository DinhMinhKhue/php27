<?php 
require_once('connection.php');
$id = $_GET['id'];

// Câu lệnh truy vấn
$query = "SELECT * FROM users WHERE id=".$id;
// Thực thi câu lệnh
$result = $conn->query($query);
$users = $result->fetch_assoc();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<h3>users: <?= $users['name'] ?></h3>
 </body>
 </html>
