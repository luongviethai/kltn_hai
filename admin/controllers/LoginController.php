<?php 
//load loginmodel.php

include "models/LoginModel.php";
class LoginController extends Controller
{
	use LoginModel;
	public function index()
	{
		$this->loadView("LoginView.php");
	}
	public function login()
	{
		// gọi hàm modelLogin trong class LoginModel
		$this->modelLogin();
	}
	// đăng xuất
	public function logout()
	{
		//hủy biến session
		unset($_SESSION['email']);
		unset($_SESSION['name']);
		//di chuyển đến một url khác
		header("location:login-admin.html");
	}
}

 ?>
 