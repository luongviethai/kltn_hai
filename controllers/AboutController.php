<?php 
include "models/AboutModel.php";
class AboutController extends Controller
{
	use AboutModel;
	public function index()
	{
		$this->loadView("AboutView.php");
	}
}

 ?>