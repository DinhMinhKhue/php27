<!-- <?php 

require_once('Model.php');
class Category extends Model1{
	
	function fiveCate(){
		$sql = "SELECT * FROM categories ORDER BY id DESC LIMIT 5";

		
		//Thực thi câu lệnh
		$result = $this->connection->query($sql);

		//Tạo 1 mảng để chứa dữ liệu
		$fiveCate = array();

		while($row = $result->fetch_assoc()) { 
			$sixCate[] = $row;
		}

		return $fiveCate;

	}
}
 ?> -->