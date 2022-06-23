
<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST['email'];
			$password = $_POST['password'];
			//ma hoa password
			$password = md5($password);
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select email,name,photo from users where email=:var_email and password = :var_password");
			//thuc thi truy van, truyen tham so
			$query->execute(["var_email"=>$email,"var_password"=>$password]);
			if($query->rowCount() > 0){
				//dang nhap thanh cong
				$record = $query->fetch();
				$_SESSION['email'] = $record->email;
				$_SESSION['name'] = $record->name;
				$_SESSION['photo'] = $record->photo;
				header("location:home.html");
			}else
			header("location:index.php?controller-login&notify=error");
		}
	}
 ?>
