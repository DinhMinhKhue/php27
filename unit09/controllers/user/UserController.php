<?php 
	require_once('models/user/Post.php');
	require_once('models/user/Category.php');
	class UserController{
		var $models;
		function __construct(){
			$this->model = new Post();
		}
		// function __construct(){
		// 	$this->model = new Category();
		// }
		function home(){
			$sixPost = $this->model->sixPost();
			$threePost = $this->model->threePost();
			$fivePost = $this->model->fivePost();

			
			require_once('view/frontend/index.php');
		}
		function blog(){
			$sixPost = $this->model->sixPost();
			$fivePostBlog = $this->model->fivePostBlog();

			require_once('view/frontend/blog.php');
		}

		public function getCategory(){
			$id = $_GET['id'];
			$sixPost = $this->model->postCate($id);

			require_once('view/frontend/blog.php');
		}

		public function category(){

			$fiveCate = $this->model->fiveCate();

			require_once('view/frontend/recipes.php');
		}

		public function contact(){
			$sixPost = $this->model->sixPost();
			require_once('view/frontend/contact.php');
		}

		public function continuCate(){
			$oneCate = $this->model->oneCate();

			require_once('view/frontend/continuCate.php');
		
		}

		public function continuPost(){
			$sixPost = $this->model->sixPost();
			$onePost = $this->model->onePost();
			require_once('view/frontend/continuPost.php');
		}
	}
 ?>