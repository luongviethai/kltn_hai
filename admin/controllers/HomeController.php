<?php 

class HomeController extends Controller
{ 
	//hàm tạo
	public function __construct()
	{
		$this->authen();
	}
	public function index()
	{
		//load view
		$this->loadView("HomeView.php");
	}
}

 ?>
  