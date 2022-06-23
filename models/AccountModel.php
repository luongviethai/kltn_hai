<?php 

trait AccountModel
{

	public function modelRegister()
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$password = md5($password);
		$v_code = bin2hex(random_bytes(6));
		$conn = Connection::getInstance();
		//kiểm tra nếu email chưa tồn tại thì insert bản ghi
		$queryCheck = $conn->prepare("select email from customers where email=:var_email");
		$queryCheck->execute(["var_email"=>$email]);
		if($queryCheck->rowCount() > 0)
		{
			header("location:register/error.html");
		}
		else
		{
			$query = $conn->prepare("insert into customers set name=:var_name,email=:var_email,address=:var_address,phone=:var_phone,password=:var_password,verification_code=:var_verification_code");
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_address"=>$address,"var_phone"=>$phone,"var_password"=>$password,"var_verification_code"=>$v_code]);
			Connection::sendMail($email,$v_code);
			header("location:index.php?controller=account&action=registersucsess");
		}
	}

		public function modelUpdate()
	{
		$id = isset($_GET['id'])&& $_GET['id']>0 ? $_GET['id']:0;
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		// update name
		// lấy biến kết nối csdl
		$conn = Connection::getInstance();
		$query = $conn->prepare("update customers set name=:var_name,address=:var_address,phone=:var_phone where id=:var_id");
		$query->execute(["var_id"=>$id,"var_name"=>$name,"var_address"=>$address,"var_phone"=>$phone]);
		// nếu password không rỗng thì update password
		if($password != "")
		{
			$password = md5($password);
			// chuẩn bị truy vấn
			$query = $conn->prepare("update customers set password=:var_password where id=:var_id");
			// thực thi truy vấn , có tham số vào câu lệnh sql
			$query->execute(["var_password"=>$password,"var_id"=>$id]);
		}


	}

	public function modelLogin()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5($password);
		$conn = Connection::getInstance();
		$query = $conn->prepare("select * from customers where email=:var_email and password = :var_password");
		$query->execute(["var_email"=>$email,"var_password"=>$password]);
		$result = $query->fetch();
			if($query->rowCount() > 0 && $result->Is_verified == 1)
			{
				
				if($password == $result->password)
				{
				$_SESSION['customer_name'] = $result->name;
				$_SESSION['customer_id'] = $result->id;
				$_SESSION['customer_email'] = $result->email;
				$_SESSION['sdt'] = $result->phone;
				$_SESSION['address'] = $result->address;
				}	
				header("location:home.html");	
			}
			elseif($query->rowCount() == 0)
			{
				header("location:login/error.html");
				
			}
			elseif($result->Is_verified != 1)
			{
				header("location:verify/error.html");
			}
			else
			{
				header("location:index.php?controller=account&action=login&wrong=error");
			}
		}
	
	

	public function modelGetRecord()
	{
		$id = isset($_GET['id'])&&$_GET['id'] > 0 ? $_GET['id']:0;
		//lấy biến kết nối
		$conn = Connection::getInstance();
		// chuẩn bị truy vấn
		$query = $conn->prepare("select * from customers where id=:var_id");
		// thực thi câu lệnh truy vấn và truyền tham số vào câu lệnh sql
		$query->execute(["var_id"=>$id]);
		return $query->fetch();
	}
	
	public function modelLogout()
	{
		//hủy biến session
		unset($_SESSION['customer_id']);
		unset($_SESSION['customer_email']);
		unset($_SESSION['customer_name']);
		header("location:home.html");

	}

	public function verify()
	{

		  $email = isset($_GET['email'])?$_GET['email']:"";
		  $v_code = isset($_GET['v_code'])?$_GET['v_code']:"";
		  	$conn = Connection::getInstance();
		  $query = $conn->prepare("select * from customers where email=:var_email && verification_code=:var_v_code");
		  $query->execute(["var_email"=>$email,"var_v_code"=>$v_code]);
		  if ($query->rowCount() > 0) {
		  	$verify = $query->fetch();
		  	$id = $verify->id;
		  	$query = $conn->prepare("update customers set Is_verified = 1 where id=:var_id");
			// thực thi truy vấn , có tham số vào câu lệnh sql
			$query->execute(["var_id"=>$id]);
		  }
		  else
		  {

		  }
			// chuẩn bị truy vấn
			
	}


}

 ?>