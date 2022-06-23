<?php 
	trait UsersModel{
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
			$query = $conn->query("select * from users order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from users");
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
		$query = $conn->prepare("select * from users where id=:var_id");
		// thực thi câu lệnh truy vấn và truyền tham số vào câu lệnh sql
		$query->execute(["var_id"=>$id]);
		return $query->fetch();
	}


	public function modelUpdate()
	{
		$id = isset($_GET['id'])&& $_GET['id']>0 ? $_GET['id']:0;
		$name = $_POST['name'];
		$password = $_POST['password'];
		$password = md5($password);
		// update name
		// lấy biến kết nối csdl
		$conn = Connection::getInstance();
		$query = $conn->prepare("update users set name=:var_name where id =:var_id");
		$query->execute(["var_id"=>$id,"var_name"=>$name]);
		// nếu password không rỗng thì update password
		if($password != "")
		{
			// mã hóa password			$password = md5($password);
			// chuẩn bị truy vấn
			$query = $conn->prepare("update users set password=:var_password where id=:var_id");
			// thực thi truy vấn , có tham số vào câu lệnh sql
			$query->execute(["var_password"=>$password,"var_id"=>$id]);
		}
		$photo = "";
			/*
				- $_FILES["photo"]["name"] -> lay ten file
				- time() -> tra ve mot so nguyen chi thoi gian hien tai
				- $_FILES["photo"]["tmp_name"] -> khi an nut submit thi file se duoc dua len thu muc tmp cua bo cai php (co duoi la .tmp)
				- move_uploaded_file -> chuyen file tu thu muc tmp sang thu muc muon upload
				- unlink(duongdanfile) -> xoa ten file
			*/
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from users where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/users/".$record->photo))
						unlink("../assets/upload/users/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/users/$photo");
				$query = $conn->prepare("update users set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
	}

	public function modelCreate(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$queryEmail = $conn->prepare("select email from users where email=:var_email");
			$queryEmail->execute(["var_email"=>$email]);
			$photo = "";
			
			if($queryEmail->rowCount() == 0 )
			{

				if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/users/$photo");
				}
				$query = $conn->prepare("insert into users set name=:var_name,email=:var_email,password=:var_password,photo=:var_photo");
				//thuc thi truy van, co truyen tham so vao cau lenh sql
				$query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password,"var_photo"=>$photo]);		
				header("location:users.html");
				

		
			}
			else
			{

				header("location:users&create-error.html");
				
			}	
		}


public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$oldPhoto = $conn->query("select photo from users where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/users/".$record->photo))
					unlink("../assets/upload/users/".$record->photo);
			}
			$query = $conn->prepare("delete from users where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);

		}
	}

 ?>
 