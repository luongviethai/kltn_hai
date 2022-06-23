<?php 

trait ContactModel
{

			public function cartTotal(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += ($product['price']-$product['price']*$product['discount']/100) * $product['number'];
		    }
		    $_SESSION['total'] = $total;
		    return $total;
		}

			public function modelCreate(){
			$name = $_POST['name'];
			$sdt = $_POST['sdt'];
		    $tieude = $_POST['tieude'];
		    $ghichu = $_POST['ghichu'];
		// update name
			$conn = Connection::getInstance();
			// kiểm tra xem email có trùng với email đã có trong csdl không
			$query = $conn->prepare("insert into contact set name=:var_name,sdt=:var_sdt,tieude=:var_tieude,ghichu=:var_ghichu");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_sdt"=>$sdt,"var_tieude"=>$tieude,"var_ghichu"=>$ghichu]);	
}

}
 ?>
