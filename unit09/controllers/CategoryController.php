<?php 
	require_once('models/Category.php');
	class CategoryController{
		var $model;
		function __construct(){

			$this->model = new Category();

		}
		function list(){
			$categories = $this->model->all();
			require_once('view/category/list.php');
		}
		function detail(){
			$id = $_GET['id'];
			$category = $this->model->find($id);
			require_once('view/category/detail.php');
		}
		function add(){
			require_once('view/category/add.php');
		}
		function store(){
			$data = $_POST;
			$success = $this->model->add($data);
			if ($success){
				setcookie('success','Thêm mới thành công!!!',time() + 10);
			}else{
				setcookie('error','Thêm mới KHÔNG thành công!!!',time() + 10);
			}
			header(header: "Location: index.php?mod=category&act=list");
		}
		function delete(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success){
				setcookie('success','Xóa thành công!!!',time() + 10);
			}else{
				setcookie('error','Xóa KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?mod=category&act=list");
		}
		function update(){
			
			// $modelCategory = new Category();
			$data = $_POST;
			$success = $this->model->update($data);
			if ($success){
				setcookie('success','Cập nhật thành công!!!',time() + 10);
			}else{
				setcookie('error','Cập nhật KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?mod=category&act=list");
		}
		function edit(){
			$id = $_GET['id'];
			$category = $this->model->find($id);
			require_once('view/category/edit.php');
		}
	}
 ?>