<?php 

$this->fileLayout = "Layout.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gạch men - Đức Phúc 368</title>

<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div class="container-fluid">
  <div class="row">

<?php 
    $conn = Connection::getInstance();
        $query = $conn->query("select * from customers where id = (select customer_id from orders where id = $id limit 0,1)");
        $customer = $query->fetch();
 ?>
        <div class="table-responsive">
            <div class="card card-success">
              <div class="card-header">
                <h1 style="font-size:16px" class="card-title">Thông tin khách hàng</h1>
              </div>
                
                <table class="table table-bordered">
                <tr>
                    <th style="width:150px;">Họ tên</th>
                    <th><?php echo $customer->name; ?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Email</th>
                    <th><?php echo $customer->email; ?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Địa chỉ</th>
                    <th><?php echo $customer->address; ?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Điện thoại</th>
                    <th><?php echo $customer->phone; ?></th>
                </tr>
            </table>
            <div class="card-footer">
                  <div style="padding-bottom: 10px;padding-right:20px ;float: left;">
            <a href="index.php?controller=orders" class="btn btn-success"><i class="fa fa-arrow-left"></i> Trở lại</a>
          </div>
          <div style="padding-bottom: 10px;float: left;">
            <?php 
                $conn = Connection::getInstance();
                $query = $conn->query("select a.status, a.id from orders a INNER JOIN orderdetails b on a.id = b.order_id WHERE a.id = $id order by status desc limit 0,1");
                $status = $query->fetch();
             ?>

             <?php if ($status->status == 0): ?>
                    <a href="index.php?controller=orders&action=preproducts&id=<?php echo $id; ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Chuẩn bị hàng</a>
            <?php 
            elseif ($status->status == 1): 
             ?>
              <a href="index.php?controller=orders&action=preproducts&id=<?php echo $id; ?>" class="btn btn-secondary disabled"><i class="fa fa-shopping-cart"></i> Đã giao hàng</a>
               <?php 
            elseif ($status->status == 2): 
             ?>
              <a href="index.php?controller=orders&action=preproducts&id=<?php echo $id; ?>" class="btn btn-secondary disabled"><i class="fa fa-shopping-cart"></i> Đang chuẩn bị hàng</a>
             <?php endif ?>

         



          </div>
            </div> 
           </div>
       </div>
<style type="text/css">
  .disabled {
  pointer-events: none;
  cursor: default;
}
</style>

        <div class="table-responsive">
            <div class="card card-success">
              <div class="card-header">
                <h1 style="font-size:16px" class="card-title">Danh sách đặt hàng</h1>
              </div>
                
              <table class="table table-bordered table-hover">
                   
                   <thead class="thead-light">
                   
                   <th style="width: 150px;">Ảnh</th>
                     <th>Tên sản phẩm</th>
                     <th>Giá</th>
                     <th>Số lượng</th>
                     <th>Giảm giá ( % )</th>
                     <th>Thành tiền</th>

                   </thead>

    <tbody>
    <?php foreach ($data as $rows): ?>
        <?php 
        $products = $this->modelGetProduct($rows->product_id);      
           ?>
                <tr>
                    <td>
                        <?php 

                        if($products->photo != "" && file_exists("../assets/upload/products/".$products->photo)):

                         ?>
                     <img src="../assets/upload/products/<?php echo $products->photo; ?>" style="width: 150px;" alt="">
                     <?php 
                 endif;
                      ?>
                    </td>
                    <td><?php echo $products->name; ?></td>
                  <td><?php echo number_format($products->price); ?> đ</td>
                    <td><?php echo $rows->quantity; ?></td>
                  <td><?php echo $products->discount; ?></td>
                  <td><?php echo ($products->pricediscount)*($rows->quantity); ?></td>




      
</tr>

      <?php endforeach ?>

    </tbody>
        
</table>





                
            </div>
            
        </div>
  </div>
</div>
</div>




</body>
</html>
