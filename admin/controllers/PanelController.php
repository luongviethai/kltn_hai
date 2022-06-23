<?php 

include "models/PanelModel.php";
class PanelController extends Controller
{

// kế thừa class PanelModel
	use PanelModel;
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
		$this->loadView("PanelView.php",["data"=>$data,"numPage"=>$numPage]);
	}

	public function update()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// lấy một bản ghi
		$record = $this->modelGetRecord();
		// tạo biến $action để biết được khi ấn nút submit thì trang sẽ submit đến đâu
		$action = "index.php?controller=panel&action=updatePost&id=$id";
		//gọi view, truyền dữ liệu ra view
		$this->loadView("PanelFormView.php",["record"=>$record,"action"=>$action]);
	}

	public function updatePost()
	{
	 
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// gọi hàm modelUpdate để update bản ghi
		$this->modelUpdate();
		// quay trở lại trang panel
		header("location:panel.html");

	}

	

}
 ?>
