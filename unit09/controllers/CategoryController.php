<?php 
	require_once('models/Category.php');
	class CategoryController{
		//var $model;
		function __construct(){

			//$this->cate = new Category();

		}
		function list(){
			//$categories = array();
			$model = new Category();
			$categories = $model->all();
			require_once('view/category/list.php');
		}
		function detail(){
			//$categories = array();
			$model = new Category();
			$id = $_GET['id'];
			$category = $model->find($id);
			require_once('view/category/detail.php');
		}
		function add(){
			require_once('view/category/add.php');
		}
		function add_process(){
			echo "<br> process thêm mới category";
		}
		function edit(){
			echo "<br> Form sửa category";
		}

	}
 ?>