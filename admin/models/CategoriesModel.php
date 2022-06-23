<?php 
	trait CategoriesModel{
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
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories");
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
		$query = $conn->prepare("select * from categories where id=:var_id");
		// thực thi câu lệnh truy vấn và truyền tham số vào câu lệnh sql
		$query->execute(["var_id"=>$id]);
		return $query->fetch();
	}


	public function modelUpdate()
	{

		$id = isset($_GET['id'])&& $_GET['id'] > 0 ? $_GET['id']:0;
		$displayhomepage = isset($_POST['displayhomepage'])?1:0;
		$name = $_POST['name'];
		$description = $_POST['description'];
		$parent_id = $_POST['parent_id'];
		// update name
		// lấy biến kết nối csdl
		$conn = Connection::getInstance();
		
		$query = $conn->prepare("update categories set description=:var_description, name=:var_name,parent_id=:var_parent_id,displayhomepage=:var_displayhomepage where id =:var_id");
	$query->execute(["var_id"=>$id,"var_name"=>$name,"var_parent_id"=>$parent_id,"var_description"=>$description,"var_displayhomepage"=>$displayhomepage]);
		// nếu password không rỗng thì update password

	}

	public function modelCreate(){
			$name = $_POST['name'];
			$displayhomepage = isset($_POST['displayhomepage'])?1:0;
		    $parent_id = $_POST['parent_id'];
		    $description = $_POST['description'];
		// update name
			$conn = Connection::getInstance();
			// kiểm tra xem email có trùng với email đã có trong csdl không
			$query = $conn->prepare("insert into categories set name=:var_name,parent_id=:var_parent_id,description=:var_description,displayhomepage=:var_displayhomepage");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_parent_id"=>$parent_id,"var_description"=>$description,"var_displayhomepage"=>$displayhomepage]);	
}

public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from categories where id=:var_id or parent_id = $id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}


// liệt kê các danh mục cấp 1 (cấp con của cấp cha)
		public function modelCategoriesSub($categories_id)
		{
			// lấy biến kết nối csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $categories_id order by id desc");
			return $query->fetchAll();
		}

		// liệt kê các danh mục cấp 0
			public function modelCategories()
		{
			// lấy biến kết nối csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			return $query->fetchAll();
		}



	}

 ?>