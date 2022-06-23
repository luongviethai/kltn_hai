<?php 
	trait ContactsModel{
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
			$query = $conn->query("select * from contact order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from contact");
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
		$query = $conn->prepare("select * from contact where id=:var_id");
		// thực thi câu lệnh truy vấn và truyền tham số vào câu lệnh sql
		$query->execute(["var_id"=>$id]);
		return $query->fetch();
	}


	

public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from contact where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}





	}

 ?>