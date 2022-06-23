<?php 
	trait CustomersModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from customers order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from customers");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}


			// lấy 1 bản ghi tương ứng với id truyền vào
	public function modelGetRecord()
	{
		$id = isset($_GET['id'])&&$_GET['id'] > 0 ? $_GET['id']:0;
		//lấy biến kết nối
		$conn = Connection::getInstance();
		// chuẩn bị truy vấn
		$query = $conn->prepare("select * from customers where id=:var_id");
		// thực thi câu lệnh truy vấn và truyền tham số vào câu lệnh sql
		$query->execute(["var_id"=>$id]);
		return $query->fetch();
	}


	public function modelUpdate()
	{
		$id = isset($_GET['id'])&& $_GET['id']>0 ? $_GET['id']:0;
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		// update name
		// lấy biến kết nối csdl
		$conn = Connection::getInstance();
		$query = $conn->prepare("update customers set name=:var_name,address=:var_address,phone=:var_phone where id=:var_id");
		$query->execute(["var_id"=>$id,"var_name"=>$name,"var_address"=>$address,"var_phone"=>$phone]);
		// nếu password không rỗng thì update password
		if($password != "")
		{
			$password = md5($password);
			// chuẩn bị truy vấn
			$query = $conn->prepare("update customers set password=:var_password where id=:var_id");
			// thực thi truy vấn , có tham số vào câu lệnh sql
			$query->execute(["var_password"=>$password,"var_id"=>$id]);
		}


	}


public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
		
			$query = $conn->prepare("delete from customers where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);

		}
	}

 ?>
 