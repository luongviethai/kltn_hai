<?php 
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

class Connection
{
	public static function getInstance()
	{
		$conn = new PDO("mysql:hostname=localhost;dbname=myproject","root","");
		//$conn = new PDO("mysql:hostname=localhost;dbname=myproject","root","");
		$conn->exec("set names utf8");
		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		return $conn;
	}

	
    // chỗ sửa mail đây. Đây mà function đăng ký 
	public static function sendMail($email,$v_code)
{
   require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'conlondat6@gmail.com';                     //SMTP username . Sửa mail gửi ở đây
    $mail->Password   = 'tkwzyrziddbcazdh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;  
    $mail->CharSet  = "utf-8";   
                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('conlondat6@gmail.com', 'Gạch Men Đức Phúc 368'); // Custom dòng title ở đây
    $mail->addAddress($email);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML . Custom nội dung chi tiết
    $mail->Subject = 'Xác nhận email - Gạch Men Đức Phúc 368'; // Chỗ này sửa được
    //Dòng dưới ko dc sửa
    $mail->Body    = "Cảm ơn bạn đã đăng ký tài khoản !!!<br>   
    Nhấp vào liên kết bên dưới để xác minh địa chỉ email !!!<br> 
    <a href='http://localhost/Hermer/index.php?controller=account&action=check_verify&email=$email&v_code=$v_code'>Xác nhận email</a>";


    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
}
}


    

    public static function sendMail1($name,$email) // Email thông báo đặt hàng thành công. Chỉnh sửa như trên
{
   require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'conlondat6@gmail.com';                     //SMTP username
    $mail->Password   = 'tkwzyrziddbcazdh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;  
    $mail->CharSet  = "utf-8";   
                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('conlondat6@gmail.com', 'Gạch Men Đức Phúc 368');
    $mail->addAddress($email);     //Add a recipient
// $mail->addEmbeddedImage('assets/frontend/images/facebook_cover_photo_1.png', 'logo_p2t');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Gạch Men Đức Phúc 368'; // Chỗ này sửa được
    $mail->Body    = "
<html>
<head>
<title></title>
</head>
<body>
<span style='font-family:Quicksand, sans-serif; font-size:28px;color:red;'><strong> LỜI CẢM ƠN </strong></span><br>  
<span style='font-family:Quicksand, sans-serif; font-size:14px;color:black;'>Cảm ơn bạn <strong>$name</strong> đã đặt hàng tại <strong>Đức Phúc 368</strong> !!! Chúc quý khách một ngày tốt lành nhất !!!</span><br>  
<span style='font-family:Quicksand, sans-serif; font-size:14px;color:black'><strong> Trong 15 - 20 phút</strong>, sẽ có nhân viên liên hệ xác nhận đơn hàng !!! <br>Xin quý khách vui lòng nhấc máy để xác nhận đơn hàng , và hoàn tất quá trình đặt hàng !!! <br></span><br>
<span style='font-family:Quicksand, sans-serif; font-size:16px;color:black'><strong style='color:red;'>Xin chân thành cảm ơn quý khách!!!</strong></span><br> 
<div style='text-align:left;padding-top:20px;padding-bottom:20px;'><a href='http://hermer.byethost7.com/'><img style='width:100%;'
src=\"cid:logo_p2t\"></a></div>
                
     
</body>
</html>";


    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
}
}


public function google()
{
            include('config.php');
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }


  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

         
}


}

 ?>