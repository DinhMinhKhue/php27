<?php
  $data = $_POST;
  // $id = $_GET['id'];

  require_once('connection.php');


  //Câu lệnh truy vấn thêm DL
    $query = "UPDATE posts SET title = '".$data['title']."', description='".$data['description']."' WHERE id = ".$data['id'];
  // Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
      setcookie('post_add_msg', 'Cập nhật thành công.', time() + 5);
      header('Location: posts.php');
    }else{
      setcookie('post_add_msg', 'Cập nhật KHÔNG thành công.', time() + 5);
      header('Location: posts.php');
    }
?>