<?php 
	require_once('HomeController.php');
	require_once('models/Post.php');
	require_once 'controllers/admin/BaseController.php';
	class PostController extends HomeController{
		var $model;
		function __construct(){
			$this->model = new Post();
			parent::__construct();
			
		}
		function list(){

			$posts = $this->model->all();

			$this->view('view/Post/list',['posts' => $posts]);
		}
		function detail(){
			$id = $_GET['id'];
			$post = $this->model->find($id);
			require_once('view/Post/detail.php');
		}
		function add(){
			require_once('view/Post/add.php');
		}
		function store(){
			$data = $_POST;
			$success = $this->model->add($data);
			if ($success){
				setcookie('success','Thêm mới thành công!!!',time() + 10);
			}else{
				setcookie('error','Thêm mới KHÔNG thành công!!!',time() + 10);
			}
			header(header: "Location: index.php?admin=admin&mod=post&act=list");
		}
		function edit(){
			$id = $_GET['id'];
			$post = $this->model->find($id);
			require_once('view/Post/edit.php');
		}
		function update(){
			
			$data = $_POST;
			$success = $this->model->update($data);
			if ($success){
				setcookie('success','Cập nhật thành công!!!',time() + 10);
			}else{
				setcookie('error','Cập nhật KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?admin=admin&mod=post&act=list");
		}
		function delete(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success){
				setcookie('success','Xóa thành công!!!',time() + 10);
			}else{
				setcookie('error','Xóa KHÔNG thành công!!!',time() + 10);
			}
			header("Location: index.php?admin=admin&mod=post&act=list");
		}

	}
 ?>