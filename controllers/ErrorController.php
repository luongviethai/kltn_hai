<?php 

class ErrorController extends Controller
{

// kế thừa class NewsModel
	public function index()
	{
		
		$this->loadView("ErrorView.php");
	}


}

?>