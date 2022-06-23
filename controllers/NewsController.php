<?php 

include "models/NewsModel.php";
class NewsController extends Controller
{

// kế thừa class NewsModel
	use NewsModel;
	public function index()
	{
		// quy định số bản ghi trên một trang
		$recordPerPage = 12;
		// tính số trang
		$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelRead($recordPerPage);
		// gọi view, truyền dữ liệu ra view
		$this->loadView("NewsView.php",["data"=>$data,"numPage"=>$numPage]);
	}

		public function detail()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;

		//lấy dữ liệu từ model
		$record  = $this->modelGetRecord();
		// gọi view, truyền dữ liệu ra view
		$this->loadView("NewsDetailView.php",["record"=>$record]);
	}




}
 ?>
