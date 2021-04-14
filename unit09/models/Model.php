<?php 
	require_once('Connection.php');
	class Model{
		var $table;
		var $connection;

		function __construct(){
			$Connection_obj = new Connection();
			$this->connection = $Connection_obj->conn;
		}

		function all(){

		$sql = "SELECT * FROM ".$this->table;

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		//Tạo 1 mảng để chứa dữ liệu
		$categories = array();

			while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
			}

			return $categories;
		 }

		 function find($id){
		$sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
		//Thực thi câu lệnh
		$result = $this->connection->query($sql);
		$this->table = $result->fetch_assoc();
		return $this->table;
		}

		function delete($id){
		$sql = "DELETE FROM ".$this->table." WHERE id = ".$id;

  		// Thực thi câu lệnh
		$result = $this->connection->query($sql); 
		return $result;
		}

		function add($data){
		$colums ='';
		$values ='';


		foreach ($data as $key => $value) {
			$colums .= $key . ',';
			$values .="'".$value."',";
		}

		$colums = trim($colums,',');
		$values = trim($values,',');

		$sql = "INSERT INTO ".$this->table."(".$colums.") VALUES (".$values.")";

		$sql = "INSERT INTO ".$this->table."(".$colums.") VALUES (".$values.")";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		return $result;


		}

		function update($data){
		$values ='';
		foreach ($data as $key => $value) {
			$values .=$key."='".$value."',";
		}
		$values = trim($values,',');
		$sql = "UPDATE ".$this->table." SET ".$values." WHERE id='".$data['id']."'";
		$result = $this->connection->query($sql);

		return $result;


		}
	}
 ?>