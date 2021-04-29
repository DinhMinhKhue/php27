<?php
/**
 * 
 */
require_once 'BaseController.php';
require_once 'models/User.php';

class LoginController extends BaseController
{
	
	public function loginForm(){
		if (!empty($_SESSION['auth'])) {
			return $this->redirect('?admin=auth&mod=login&act=loginForm');
		}
		return $this->view('view/auth/login');
	}

	public function login(){
		$data = $_POST;

		$modelUser = new User();
		$users = $modelUser->all();

		

		foreach ($users as $user) {
			if ($user['email'] == $data['email'] && $user['password'] == md5($data['password'])) {
				$_SESSION['auth'] = $user;
				return $this->redirect('?admin=admin&mod=home&act=home');

			}
		}

		$_SESSION['error'] = 'lỗi đăng nhập';
		return $this->back();
	}
}
?>