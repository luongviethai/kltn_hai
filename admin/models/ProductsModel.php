<?php 
	trait ProductsModel{
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
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];
			$shortdescription = $_POST['shortdescription'];
			$description = $_POST["description"];
			
			$content = $_POST["content"];
			$color = $_POST["color"];
			$material = $_POST["material"];
			$madein = $_POST["madein"];
			$size = $_POST["size"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$price = $_POST['price'];
			$discount = $_POST['discount'];	
			$category_id = $_POST['category_id'];	
			$pricediscount = $price - ($price * $discount)/100;	
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update products set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,price=:var_price,discount=:var_discount,category_id=:var_category_id,shortdescription=:var_shortdescription,color=:var_color,madein=:var_madein,material=:var_material,size=:var_size,pricediscount=:var_pricediscount where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_price"=>$price,"var_discount"=>$discount,"var_category_id"=>$category_id,"var_shortdescription"=>$shortdescription,"var_color"=>$color,"var_madein"=>$madein,"var_size"=>$size,"var_material"=>$material,"var_pricediscount"=>$pricediscount]);
			//---
			//neu user upload anh thi thuc hien upload			
			$photo = "";
			$img1 ="";
			$img2 ="";
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
				$oldPhoto = $conn->query("select photo from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
						unlink("../assets/upload/products/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
				$query = $conn->prepare("update products set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}

			if($_FILES["img1"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select img1 from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->img1 != "" && file_exists("../assets/upload/products/".$record->img1))
						unlink("../assets/upload/products/".$record->img1);
				}
				//---
				$img1 = time()."_".$_FILES["img1"]["name"];
				move_uploaded_file($_FILES["img1"]["tmp_name"],"../assets/upload/products/$img1");
				$query = $conn->prepare("update products set img1=:var_img1 where id=$id");
				$query->execute(array("var_img1"=>$img1));
			}


			if($_FILES["img2"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select img2 from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->img2 != "" && file_exists("../assets/upload/products/".$record->img2))
						unlink("../assets/upload/products/".$record->img2);
				}
				//---
				$img2 = time()."_".$_FILES["img2"]["name"];
				move_uploaded_file($_FILES["img2"]["tmp_name"],"../assets/upload/products/$img2");
				$query = $conn->prepare("update products set img2=:var_img2 where id=$id");
				$query->execute(array("var_img2"=>$img2));
			}
			//---
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$price = $_POST['price'];
			$discount = $_POST['discount'];	
			$shortdescription = $_POST['shortdescription'];
			$category_id = $_POST['category_id'];
			$color = $_POST["color"];
			$material = $_POST["material"];
			$madein = $_POST["madein"];
			$size = $_POST["size"];
			$pricediscount = $price - ($price * $discount)/100;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//neu user upload anh thi thuc hien upload			
			$photo = "";
			$img1 ="";
			$img2 ="";
			/*
				- $_FILES["photo"]["name"] -> lay ten file
				- time() -> tra ve mot so nguyen chi thoi gian hien tai
				- $_FILES["photo"]["tmp_name"] -> khi an nut submit thi file se duoc dua len thu muc tmp cua bo cai php (co duoi la .tmp)
				- move_uploaded_file -> chuyen file tu thu muc tmp sang thu muc muon upload
				- unlink(duongdanfile) -> xoa ten file
			*/
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
			}
			if($_FILES["img1"]["name"] != ""){
				$img1 = time()."_".$_FILES["img1"]["name"];
				move_uploaded_file($_FILES["img1"]["tmp_name"],"../assets/upload/products/$img1");
			}
			if($_FILES["img2"]["name"] != ""){
				$img2 = time()."_".$_FILES["img2"]["name"];
				move_uploaded_file($_FILES["img2"]["tmp_name"],"../assets/upload/products/$img2");
			}
			//---		
			//update name			
			//chuan bi truy van
			$query = $conn->prepare("insert into products set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,photo=:var_photo,price=:var_price,discount=:var_discount,category_id=:var_category_id,shortdescription=:var_shortdescription,img1=:var_img1,img2=:var_img2,color=:var_color,madein=:var_madein,material=:var_material,size=:var_size,pricediscount=:var_pricediscount");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_photo"=>$photo,"var_price"=>$price,"var_discount"=>$discount,"var_category_id"=>$category_id,"var_shortdescription"=>$shortdescription,"var_img1"=>$img1,"var_img2"=>$img2,"var_color"=>$color,"var_madein"=>$madein,"var_size"=>$size,"var_material"=>$material,"var_pricediscount"=>$pricediscount]);
			
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
					unlink("../assets/upload/products/".$record->photo);
			}
			$oldPhoto1 = $conn->query("select img1 from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto1->fetch();
				//xoa anh
				if($record->img1 != "" && file_exists("../assets/upload/products/".$record->img1))
					unlink("../assets/upload/products/".$record->img1);
			}
			
			$oldPhoto2 = $conn->query("select img2 from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto2->fetch();
				//xoa anh
				if($record->img2 != "" && file_exists("../assets/upload/products/".$record->img2))
					unlink("../assets/upload/products/".$record->img2);
			}
			//---
			//chuan bi truy van
			$query = $conn->prepare("delete from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}


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