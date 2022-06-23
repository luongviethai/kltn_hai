<?php 
	
	include "models/ProductsModel.php";
	class ProductsController extends Controller
	{
		use ProductsModel;
		public function category()
		{

		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		$recordPerPage = 9;
		// tính số trang
		$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelRead($recordPerPage);
		// gọi view, truyền dữ liệu ra view
		$this->loadView("CategoryProductsView.php",["data"=>$data,"numPage"=>$numPage,"id"=>$id]);
		}
			public function allproducts()
		{

		$recordPerPage = 9;
		// tính số trang
		$numPage = ceil($this->modelTotalRecordAllProducts()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelReadAllProducts($recordPerPage);
		// gọi view, truyền dữ liệu ra view
		$this->loadView("ProductsView.php",["data"=>$data,"numPage"=>$numPage]);
		}

			public function allproducts1()
		{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		$recordPerPage = 9;
		// tính số trang
		$numPage = ceil($this->modelTotalRecordAllCategoryProducts()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelReadAllCategoryProducts($recordPerPage);
		// gọi view, truyền dữ liệu ra view
		$this->loadView("CategoryLevel1ProductsView.php",["data"=>$data,"numPage"=>$numPage,"id"=>$id]);
		}
		public function detail()
		{
			$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
			$record = $this->modelGetProducts($id);
			//gọi view, truyền dữ liệu ra view
			$this->loadView("DetailProductsView.php",["record"=>$record,"id"=>$id]);
		}

		public function rating(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$this->modelRating();
			//di chuye den trang chi tiet san pham
			header("location:products/rating/$id".".html");
		}
	}

 ?>