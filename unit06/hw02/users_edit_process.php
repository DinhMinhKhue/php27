<?php
  $data = $_POST;
  // $id = $_GET['id'];

  require_once('connection.php');


  //Câu lệnh truy vấn thêm DL
    $query = "UPDATE users SET name = '".$data['name']."', email='".$data['email']."' WHERE id = ".$data['id'];

  // Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
      // echo "Thêm mới thành công!";
      setcookie('cate_add_msg', 'Cập nhật thành công.', time() + 5);
      header('Location: users.php');
    }else{
      echo "Thêm mới thất bại!";
      setcookie('cate_add_msg', 'Cập nhật không thành công.', time() + 5);
      header('Location: users.php');
    }
?>