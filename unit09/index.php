<?php 
	session_start();
	// session_destroy();
	$mod = ''; // module: category, post, user
	$act = ''; // action: list, add, edit
	$admin = '';
  	$admin = (isset($_GET['admin'])?$_GET['admin']:'user');
	$mod = (isset($_GET['mod'])?$_GET['mod']:'user');
	$act = (isset($_GET['act'])?$_GET['act']:'home');


	$controller_class_name = ucfirst($mod) . 'Controller';
	$path = __DIR__ . '/controllers/'.$admin.'/' . $controller_class_name . '.php';

	if (!file_exists($path)){
	    echo "File $path khong ton tai";
	    exit();
	}
	require($path);

	$controller_obj = new $controller_class_name();

	if (!method_exists($controller_obj, $act)){
	    echo "Method $act khong ton tai";
	    exit();
	}
	$controller_obj->$act();
 ?>