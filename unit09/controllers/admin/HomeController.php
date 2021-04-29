<?php 
require_once('BaseController.php');
class HomeController extends BaseController{
	function home(){
		require_once("indexview.php");
	}
	function __construct(){
		
		parent:: __construct();
	}
}
	
 ?>