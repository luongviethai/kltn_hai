<?php 

include "models/NewsModel.php";
class NewsController extends Controller
{

// kế thừa class NewsModel
	use NewsModel;
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
		$this->loadView("NewsView.php",["data"=>$data,"numPage"=>$numPage]);
	}

	public function update()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// lấy một bản ghi
		$record = $this->modelGetRecord();
		// tạo biến $action để biết được khi ấn nút submit thì trang sẽ submit đến đâu
		$action = "index.php?controller=news&action=updatePost&id=$id";
		//gọi view, truyền dữ liệu ra view
		$this->loadView("NewsFormView.php",["record"=>$record,"action"=>$action]);
	}

	public function updatePost()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// gọi hàm modelUpdate để update bản ghi
		$this->modelUpdate();
		// quay trở lại trang news
		header("location:news.html");

	}

	public function create()
	{
		$action = "index.php?controller=news&action=createPost";
		$this->loadView("NewsFormView.php",["action"=>$action]);
	}

	public function createPost()
	{
		//gọi hàm modelCreate để 
		$this->modelCreate();
		header("location:news.html");
	}
	public function delete()
	{
				$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;

				$this->modelDelete();
				
	header("location:news.html");
	}

}
 ?>
