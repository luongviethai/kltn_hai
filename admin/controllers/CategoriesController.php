<?php 

include "models/CategoriesModel.php";
class CategoriesController extends Controller
{

// kế thừa class CategoriesModel
	use CategoriesModel;
	public function __construct()
	{
		$this->authen();
	}
	public function index()
	{
		// quy định số bản ghi trên một trang
		$recordPerPage = 20;
		// tính số trang
		$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelRead($recordPerPage);
		// gọi view, truyền dữ liệu ra view
		$this->loadView("CategoriesView.php",["data"=>$data,"numPage"=>$numPage]);
	}

	public function update()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// lấy một bản ghi
		$record = $this->modelGetRecord();
		// tạo biến $action để biết được khi ấn nút submit thì trang sẽ submit đến đâu
		$action = "index.php?controller=categories&action=updatePost&id=$id";
		//gọi view, truyền dữ liệu ra view
		$this->loadView("CategoriesFormView.php",["record"=>$record,"action"=>$action]);
	}

	public function updatePost()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// gọi hàm modelUpdate để update bản ghi
		$this->modelUpdate();
		// quay trở lại trang categories
		header("location:categories.html");

	}

	public function create()
	{
		$action = "index.php?controller=categories&action=createPost";
		$this->loadView("CategoriesFormView.php",["action"=>$action]);
	}

	public function createPost()
	{
		//gọi hàm modelCreate để 
		$this->modelCreate();
		header("location:categories.html");
	}
	public function delete()
	{
				$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;

				$this->modelDelete();
				
	header("location:categories.html");
	}

}
 ?>
