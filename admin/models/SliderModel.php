<?php 
	trait SliderModel{
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
			$query = $conn->query("select * from slider order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from slider");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from slider where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;			
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van;
			//---
			//neu user upload anh thi thuc hien upload			
			$photo = "";

			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from slider where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/slider/".$record->photo))
						unlink("../assets/upload/slider/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/slider/$photo");
				$query = $conn->prepare("update slider set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			//---
		}
		public function modelCreate(){
		$location = $_POST['location'];
			$conn = Connection::getInstance();
			//neu user upload anh thi thuc hien upload			
			$photo = "";

			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/slider/$photo");
			}
			//---		
			//update name			
			//chuan bi truy van
			$query = $conn->prepare("insert into slider set photo=:var_photo,location=:var_location");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_photo"=>$photo,"var_location"=>$location]);
			
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from slider where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/slider/".$record->photo))
					unlink("../assets/upload/slider/".$record->photo);
			}
			//---
			//chuan bi truy van
			$query = $conn->prepare("delete from slider where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>