<?php 

trait SearchModel
{


		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
				$key = isset($_GET["key"]) ? $_GET["key"]:"";
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl

			$conn = Connection::getInstance();
			//thuc hien truy van
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
			$query = $conn->query("select * from products where name like '%$key%' $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			$key = isset($_GET["key"]) ? $_GET["key"]:"";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}

public function modelAjaxSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve tat ca ket qua
			return $query->fetchAll();
		}




				public function modelReadSearchPrice($recordPerPage){
			//lay bien page truyen tu url
					$fromPrice = isset($_GET['fromPrice']) ? $_GET['fromPrice']:0;
				$toPrice = isset($_GET['toPrice']) ? $_GET['toPrice']:0;
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
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
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where pricediscount >= $fromPrice and pricediscount <= $toPrice $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecordSearchPrice(){
		$fromPrice = isset($_GET['fromPrice']) ? $_GET['fromPrice']:0;
				$toPrice = isset($_GET['toPrice']) ? $_GET['toPrice']:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where pricediscount >= $fromPrice and pricediscount <= $toPrice");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}

			public function cartTotal(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += ($product['price']-$product['price']*$product['discount']/100) * $product['number'];
		    }
		    $_SESSION['total'] = $total;
		    return $total;
		}

			public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 0,8");
			return $query->fetchAll();
		}


				public function modelReadSearchColor($recordPerPage){
			//lay bien page truyen tu url
				$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
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
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where color like '%$key%' $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
	public function modelTotalRecordSearchColor(){
		$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where color like '%$key%'");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}

					public function modelReadSearchSize($recordPerPage){
			//lay bien page truyen tu url
				$key = isset($_GET["key"]) ? $_GET["key"] : "";
			    $page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
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
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where size = '$key' $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
	public function modelTotalRecordSearchSize(){
		   $key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where size = '$key'");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}


	



}

 ?>
