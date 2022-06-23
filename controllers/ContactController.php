<?php 

include "models/ContactModel.php";

class ContactController extends Controller
{
	use ContactModel;
	public function index()
	{
		$this->loadView("ContactView.php");
	}
		public function create()
	{
		$action = "index.php?controller=contact&action=createPost";
		$this->loadView("ContactView.php",["action"=>$action]);
	}

	public function createPost()
	{
		//gọi hàm modelCreate để 
		$this->modelCreate();
		header("location:contact/thanhcong.html");
	}
}


 ?>