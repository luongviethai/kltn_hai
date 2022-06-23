<?php 

trait ProductsModel{
	//lấy các sản phẩm thuộc danh mục có id danh mục truyền vào
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$category_id = $_GET['id'] ? $_GET['id'] : 0;
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			
			$sqlOrder = "";
			$order = isset($_GET["order"]) ? $_GET["order"]:"";
			switch ($order) {
				case 'priceAsc':
					$sqlOrder = "order by pricediscount asc";
					break;
				case 'priceDesc':
					$sqlOrder = "order by pricediscount desc";
					break;
				case 'nameAsc':
					$sqlOrder = "order by name asc";
					break;
				case 'nameDesc':
					$sqlOrder = "order by name desc";
					break;
				default:
					$sqlOrder = "order by id desc";
					break;
			}
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id=$category_id $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			$category_id = $_GET['id'] ? $_GET['id'] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id = $category_id");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}

		//lấy một bản ghi danh mục sản phẩm
		public function modelGetCategory($category_id)
		{
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
		    $query = $conn->query("select * from categories where id = $category_id");
			//tra ve so luong ban ghi
			return $query->fetch();
		}

			public function modelGetProducts($id)
		{
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
		$query = $conn->query("select * from products where id = $id");
			//tra ve so luong ban ghi
			return $query->fetch();
		}

		public function modelRating()
		{
			$id = isset($_GET['id'])?$_GET['id']:0;
			if ($id > 0) {
				$conn = Connection::getInstance();
				$query = $conn->query("insert into rating(product_id,star) values ($id,1)");
			}
		}

		public function modelGetStar($product_id)
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select id from rating where product_id = $product_id and star = 1");
			return $query->rowCount();
		}

			public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 0,8");
			return $query->fetchAll();
		}


		public function modelCategory()
		{
			$conn = Connection::getInstance();
            $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
            return $query->fetchAll();
		}

			public function cartTotal(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += ($product['price']-$product['price']*$product['discount']/100) * $product['number'];
		    }
		    $_SESSION['total'] = $total;
		    return $total;
		}


				public function modelReadAllProducts($recordPerPage){
			//lay bien page truyen tu url
			
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			
			$sqlOrder = "";
			$order = isset($_GET["order"]) ? $_GET["order"]:"";
			switch ($order) {
				case 'priceAsc':
					$sqlOrder = "order by pricediscount asc";
					break;
				case 'priceDesc':
					$sqlOrder = "order by pricediscount desc";
					break;
				case 'nameAsc':
					$sqlOrder = "order by name asc";
					break;
				case 'nameDesc':
					$sqlOrder = "order by name desc";
					break;
				default:
					$sqlOrder = "order by id desc";
					break;
			}
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecordAllProducts(){
		
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}


				public function modelReadAllCategoryProducts($recordPerPage){
			//lay bien page truyen tu url
			$id = isset($_GET['id'])?$_GET['id']:"";
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			
			$sqlOrder = "";
			$order = isset($_GET["order"]) ? $_GET["order"]:"";
			switch ($order) {
				case 'priceAsc':
					$sqlOrder = "order by pricediscount asc";
					break;
				case 'priceDesc':
					$sqlOrder = "order by pricediscount desc";
					break;
				case 'nameAsc':
					$sqlOrder = "order by name asc";
					break;
				case 'nameDesc':
					$sqlOrder = "order by name desc";
					break;
				default:
					$sqlOrder = "order by id desc";
					break;
			}
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id IN (select id from categories where parent_id = $id) $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecordAllCategoryProducts(){
		$id = isset($_GET['id'])?$_GET['id']:"";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id IN (select id from categories where parent_id = $id)");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
	



}


 ?>