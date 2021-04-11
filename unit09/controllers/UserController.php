<?php 
	require_once('models/User.php');
	class UserController{
		function __construct(){
			
		}
		function list(){
			$model = new User();
			$users = $model->all();
			require_once('view/Users/list.php');
		}
		function detail(){
			//$categories = array();
			$model = new User();
			$id = $_GET['id'];
			$user = $model->find($id);
			require_once('view/Users/detail.php');
		}
		function add(){
			echo "<br> Form thêm mới Users";
		}
		function add_process(){
			echo "<br> process thêm mới Users";
		}
		function edit(){
			echo "<br> Form sửa Users";
		}

	}
 ?>