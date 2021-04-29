<?php 
	require_once('HomeController.php');
	require_once('models/Category.php');
	require_once 'controllers/admin/BaseController.php';
	class CategoryController extends HomeController{
		var $model;
		function __construct(){

			$this->model = new Category();
			parent::__construct();

		}
		function list(){

			$categories = $this->model->all();

			$this->view('view/category/list',['categories' => $categories]);
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
			header(header: "Location: index.php?admin=admin&mod=category&act=list");
		}
		function delete(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success){
				setcookie('success','Xóa thành công!!!',time() + 10);
			}else{
				setcookie('error','Xóa KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?admin=admin&mod=category&act=list");
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
			header("Location: index.php?admin=admin&mod=category&act=list");
		}
		function edit(){
			$id = $_GET['id'];
			$category = $this->model->find($id);
			require_once('view/category/edit.php');
		}
	}
 ?>