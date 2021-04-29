<?php 
	require_once('models/Connection.php');
	class Model1{
		var $table;
		var $connection;

		function __construct(){
			$Connection_obj = new Connection();
			$this->connection = $Connection_obj->conn;
		}


	}
 ?>