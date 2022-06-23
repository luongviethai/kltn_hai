<?php 

include "models/ContactsModel.php";
class ContactsController extends Controller
{

// kế thừa class ContactsModel
	use ContactsModel;
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
		$this->loadView("ContactView.php",["data"=>$data,"numPage"=>$numPage]);
	}
		public function detail(){
			$conn = Connection::getInstance();
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			//goi view, truyen du lieu ra view
			$query = $conn->prepare("update contact set readed = '1' where id=:var_id");
			$query->execute(['var_id'=>$id]);
			$this->loadView("ContactDetailView.php",["record"=>$record,"id"=>$id]);
		}


	public function delete()
	{
				$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;

				$this->modelDelete();
				
				header("location:contact.html");
	}

}
 ?>
