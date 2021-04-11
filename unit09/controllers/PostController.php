<?php 
	require_once('models/Post.php');
	class PostController{
		function __construct(){
			
		}
		function list(){
			$model = new Post();
			$posts = $model->all();
			require_once('view/Post/list.php');
		}
		function detail(){
			//$categories = array();
			$model = new Post();
			$id = $_GET['id'];
			$post = $model->find($id);
			require_once('view/Post/detail.php');
		}
		function add(){
			echo "<br> Form thêm mới Post";
		}
		function add_process(){
			echo "<br> process thêm mới Post";
		}
		function edit(){
			echo "<br> Form sửa Post";
		}

	}
 ?>