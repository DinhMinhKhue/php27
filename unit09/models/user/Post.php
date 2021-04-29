<?php 
require_once('Model.php');
class Post extends Model1{

	function sixPost(){
		$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 6";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		//Tạo 1 mảng để chứa dữ liệu
		$sixPost = array();

		while($row = $result->fetch_assoc()) { 
			$sixPost[] = $row;
		}

		return $sixPost;

	}


	function threePost(){
		$sql = "SELECT * FROM posts ORDER BY id ASC LIMIT 5";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		//Tạo 1 mảng để chứa dữ liệu
		$threePost = array();

		while($row = $result->fetch_assoc()) { 
			$threePost[] = $row;
		}

		return $threePost;

	}

	function fivePost(){
		$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		//Tạo 1 mảng để chứa dữ liệu
		$fivePost = array();

		while($row = $result->fetch_assoc()) { 
			$fivePost[] = $row;
		}

		return $fivePost;

	}
	function fivePostBlog(){
		$sql = "SELECT * FROM posts ORDER BY id ASC LIMIT 5";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		//Tạo 1 mảng để chứa dữ liệu
		$fivePostBlog = array();

		while($row = $result->fetch_assoc()) { 
			$fivePostBlog[] = $row;
		}

		return $fivePostBlog;

	}
	function onePost(){
		$sql = "SELECT * FROM posts ORDER BY id ASC LIMIT 1";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		//Tạo 1 mảng để chứa dữ liệu
		$onePost = array();

		while($row = $result->fetch_assoc()) { 
			$onePost[] = $row;
		}

		return $onePost;

	}

	function fiveCate(){
		$sql = "SELECT * FROM categories ORDER BY id DESC LIMIT 5";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);
		
		//Tạo 1 mảng để chứa dữ liệu
		$fiveCate = array();

		while($row = $result->fetch_assoc()) { 
			$fiveCate[] = $row;
		}

		return $fiveCate;

	}

	function oneCate(){
		$sql = "SELECT * FROM categories ORDER BY id DESC LIMIT 1";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);
		
		//Tạo 1 mảng để chứa dữ liệu
		$oneCate = array();

		while($row = $result->fetch_assoc()) { 
			$oneCate[] = $row;
		}

		return $oneCate;

	}

	function sixCate(){
		$sql = "SELECT * FROM categories ORDER BY id DESC LIMIT 6";

		//Thực thi câu lệnh
		$result = $this->connection->query($sql);
		
		//Tạo 1 mảng để chứa dữ liệu
		$sixCate = array();

		while($row = $result->fetch_assoc()) { 
			$sixCate[] = $row;
		}

		return $sixCate;

	}

}





?>