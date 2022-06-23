<?php 

include "models/AccountModel.php";
class AccountController extends Controller
{
	use AccountModel;
	public function register()
	{
		$this->loadView("RegisterView.php");
	}
	public function registerPost()
	{
		$this->modelRegister();
	}
	public function login()
	{
		$action = "index.php?controller=account&action=loginPost";
		$this->loadView("LoginView.php",["action"=>$action]);
	}
	public function loginPost()
	{
		$this->modelLogin();
	}
	public function logout()
	{
		$this->modelLogout();
	}
	public function registersucsess()
	{
		$this->loadView("LoginSuccess.php");
	}
	public function updatesucsess()
	{
		$this->loadView("UpdateAccountSuccess.php");
	}

		public function update()
	{
		$id = isset($_GET['id']) && $_GET['id'] > 0 ? $_GET['id']:0;
		// lấy một bản ghi
		$record = $this->modelGetRecord();
		// tạo biến $action để biết được khi ấn nút submit thì trang sẽ submit đến đâu
		$action = "index.php?controller=account&action=updatePost&id=$id";
		//gọi view, truyền dữ liệu ra view
		$this->loadView("AccountUpdate.php",["record"=>$record,"action"=>$action]);
	}

	public function updatePost()
	{
	 
		// gọi hàm modelUpdate để update bản ghi
		$this->modelUpdate();
		// quay trở lại trang customers
		header("location:updatesucsess.html");

	}

	public function check_verify()
	{
		$this->verify();
		$this->loadView("CheckVerifyView.php");
	}
}

 ?>