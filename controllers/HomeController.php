<?php 
include "models/HomeModel.php";
class HomeController extends Controller
{
	use HomeModel;
	//nếu action không được truyền lên url thì mạc định action = index
	public function index()
	{
		$photo1 = $this->modelGetLoction1();
		$photo2 = $this->modelGetLoction2();
		$photo3 = $this->modelGetLoction3();
		$photo4 = $this->modelGetLoction4();
		$photo5 = $this->modelGetLoction5();
		$photo6 = $this->modelGetLoction6();
		$this->loadView("HomeView.php",["photo1"=>$photo1,"photo2"=>$photo2,"photo3"=>$photo3,"photo4"=>$photo4,"photo5"=>$photo5,"photo6"=>$photo6]);

	}
}

 ?>