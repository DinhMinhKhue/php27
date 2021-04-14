<?php 
	require_once('models/User.php');
	class UserController{
		var $model;
		function __construct(){
			$this->model = new User();
		}
		function list(){
			$users = $this->model->all();
			require_once('view/Users/list.php');
		}
		function detail(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			require_once('view/Users/detail.php');
		}
		function add(){
			require_once('view/Users/add.php');
		}
		function store(){
			$data = $_POST;
			$success = $this->model->add($data);
			if ($success){
				setcookie('success','Thêm mới thành công!!!',time() + 10);
			}else{
				setcookie('error','Thêm mới KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?mod=user&act=list");
		}
		function delete(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success){
				setcookie('success','Xóa thành công!!!',time() + 10);
			}else{
				setcookie('error','Xóa KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?mod=user&act=list");
		}
		function update(){
			
			$data = $_POST;
			$success = $this->model->update($data);
			if ($success){
				setcookie('success','Cập nhật thành công!!!',time() + 10);
			}else{
				setcookie('error','Cập nhật KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?mod=user&act=list");
		}
		function edit(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			require_once('view/Users/edit.php');
		}

	}
 ?>