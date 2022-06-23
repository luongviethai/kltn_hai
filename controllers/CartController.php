<?php 

include "models/CartModel.php";
class CartController extends Controller
{
	use CartModel;
	public function __construct()
	{
		//kiểm tra nếu giỏ hàng chưa tồn tại thì khởi tạo nó
		if(isset($_SESSION['cart']) == false)
		{
			$_SESSION['cart']=array();
		}
	}

	public function index()
	{
		if($_SESSION["cart"] != null)
		{

			$this->loadView("CartView.php");
			
		}
		else
		{

		$this->loadView("EmptyCartView.php");
		
		}
		
	}
	public function paysuccess()
	{
		$this->loadView("PaySuccessView.php");
	}
	//thêm sản phẩm vào giỏ hàng
	public function create()
	{
		$id = isset($_GET['id'])?$_GET['id']:0;
		//gọi hàm trong model
		$this->cartAdd($id);
		//thanh toán thành công cảm ơn quý khách đã mua hàng
		header("location:cart.html");
	}
		public function create2()
	{
		$id = isset($_GET['id'])?$_GET['id']:0;
		//gọi hàm trong model
		$this->cartAdd($id);
		//thanh toán thành công cảm ơn quý khách đã mua hàng
		header("location:cart.html");
	}

	public function delete()
	{
		$id = isset($_GET['id'])?$_GET['id']:0;
		//gọi hàm trong model
		$this->cartDelete($id);
		header("location:cart.html");
	}
	public function delete1()
	{
		$id = isset($_GET['id'])?$_GET['id']:0;
		//gọi hàm trong model
		$this->cartDelete($id);
		header("location:home.html");
	}
	public function destroy()
	{
		$this->cartDestroy();
		header("location:cart.html");
	}
public function create1()
	{
		$id = isset($_GET['id'])?$_GET['id']:0;
		$quantity = $_POST['number0510'];
		$this->cartAddWithNumber($id,$quantity);
		//thanh toán thành công cảm ơn quý khách đã mua hàng
		header("location:cart.html");
	}

public function update()
	{
		foreach ($_SESSION['cart'] as $product) {
			$name = "product_".$product["id"];
			$number = $_POST[$name];
			$this->cartUpdate($product["id"],$number);
		}
		header("location:cart.html");
	}
	public function checkout()
	{
		if (isset($_SESSION['customer_email']) == false) {
			header("location:login.html");
		}
		else
		{
			// gọi hàm checkout trong model
			$this->cartCheckOut();
		}
	}
}

 ?>
