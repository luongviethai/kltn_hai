<?php 

include "models/ProductsModel.php";
class ProductsController extends Controller
{

// kế thừa class ProductsModel
	use ProductsModel;
	public function __construct()
	{
		$this->authen();
	}
	public function index()
	{
		// quy định số bản ghi trên một trang
		$recordPerPage = 10;
		// tính số trang
		$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelRead($recordPerPage);
		// gọi view, truyền dữ liệu ra view
		$this->loadView("ProductsView.php",["data"=>$data,"numPage"=>$numPage]);
	}

	public function update()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// lấy một bản ghi
		$record = $this->modelGetRecord();
		// tạo biến $action để biết được khi ấn nút submit thì trang sẽ submit đến đâu
		$action = "index.php?controller=products&action=updatePost&id=$id";
		//gọi view, truyền dữ liệu ra view
		$this->loadView("ProductsUpdateFormView.php",["record"=>$record,"action"=>$action]);
	}

	public function updatePost()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// gọi hàm modelUpdate để update bản ghi
		$this->modelUpdate();
		// quay trở lại trang products
		header("location:products.html");

	}

	public function create()
	{
		$action = "index.php?controller=products&action=createPost";
		$this->loadView("ProductsCreateFromView.php",["action"=>$action]);
	}

	public function createPost()
	{
		//gọi hàm modelCreate để 
		$this->modelCreate();
		header("location:products.html");
	}
	public function delete()
	{
				$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;

				$this->modelDelete();
				
	header("location:products.html");
	}

}
 ?>
