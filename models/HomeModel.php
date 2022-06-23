<?php 
	trait HomeModel{
	
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 0,8");
			return $query->fetchAll();
		}
		//lay cac danh muc co chua san pham ben trong
		public function modelCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products)");
			return $query->fetchAll();
		}
		//lay cac san pham thuoc danh muc
		public function modelProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $category_id order by id desc limit 0,6");
			return $query->fetchAll();
		}

		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news order by id desc limit 0,10");
			return $query->fetchAll();
		}

		public function modelSlider(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from slider where location = '1' order by id desc");
			return $query->fetchAll();
		}

		public function modelSlider1(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from slider where location = '2' order by id desc");
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

			public function modelGetThatLungProducts()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = '38'");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}

		public function modelGetLoction1()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select photo from panel where location = '1'");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
			public function modelGetLoction2()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select photo from panel where location = '2'");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
			public function modelGetLoction3()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select photo from panel where location = '3'");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
			public function modelGetLoction4()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select photo from panel where location = '4'");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
			public function modelGetLoction5()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select photo from panel where location = '5'");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
			public function modelGetLoction6()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select photo from panel where location = '6'");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}

			public function modelGetLoction7()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select photo from slider where location = '2'");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}


	}
 ?>