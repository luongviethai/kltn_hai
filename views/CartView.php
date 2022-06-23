<?php
$this->fileLayout = "LayoutCart.php";
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.breadcrumb
{
margin-top: -10px;
margin-left: -70px;
background: none;
font-size: 14px;
text-decoration: none;
font-family: 'Quicksand', sans-serif;
}
.breadcrumb a
{
color: #007bff;
font-family: 'Quicksand', sans-serif;
text-decoration: none;
}
.breadcrumb-item.active
{
color: white;
opacity: 0.7;
}
</style>
<div class="container">
  <form action="index.php?controller=cart&action=update" method="post">
    <div class="body-breadcrumb">
      <ol class="breadcrumb">
        
        <li class="breadcrumb-item"><a href="home.html">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
        
      </ol>
    </div>
    
    
    <div class="top">
      
    </div>
    <!-- //////////////////////////////// -->
    <div class="bottom">
      <div class="row">
        <div class="col-md-8">
          <div class="bottom-left">
            <div class="title">
              <h3>Thông tin đơn hàng
              <?php if ($this->cartNumber() > 0):
              ?>
              <button title="Cập nhật" type="submit" class="btn" id="btn1"><i style="font-size:18px;color: black;" class="fa fa-refresh"></i></button>
              
              
              <a title="Xóa toàn bộ" style="font-size: 20px;padding-left: 0px;color: black;" class="" href="index.php?controller=cart&action=destroy"><i style="" class="fa fa-trash"></i></a>
              <?php endif ?>
              </h3>
            </div>
            <style type="text/css">
            #btn1
            {
            margin-left: 445px;
            }
            </style>
            
            
            
            <div class="box-cart">
              <table style="border-collapse: collapse;margin-top: -10px;" class="cart-table table">
                <thead>
                  <tr>
                    <th style="text-align: center;width: 300px;" scope="col">Tên sản phẩm</th>
                    <th style="text-align: center;width: 90px;" scope="col">Giá</th>
                    <th style="text-align: center;width: 140px;" scope="col">Số lượng</th>
                    <th style="text-align: center;width: 90px;" scope="col">Thành tiền</th>
                    <th  style="text-align: center;" scope="col">Xóa</th>
                  </tr>
                </thead>
              </table>
              <!-- scroll -->
              
              
              <div style="" class="scroll" id="style-4">
                <div style="width: 700px;" class="list-order">
                  <?php foreach ($_SESSION['cart'] as $product): ?>
                  <div style="padding-bottom: 40px;" class="list-order-item">
                    <a style="margin-top: 17px;" href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" class="pull-right delete-order"><i class="fa fa-times"></i></a>
                    <div class="media-left">
                      <a href="products/detail/<?php echo $product["id"]; ?>/<?php echo Unicode::removeUnicode($product["name"]); ?>.html" class="img-80"><img src="assets/upload/products/<?php echo $product["photo"]; ?>" alt=""></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                      <a style="width: 200px;margin-top: 30px;" href="products/detail/<?php echo $product["id"]; ?>/<?php echo Unicode::removeUnicode($product["name"]); ?>.html"><?php
                        echo $product["name"];
                      ?></a>
                      </h4>
                      <div style="margin-top: -25px;margin-left: 210px;" class="price-well"> <?php
                        echo number_format(($product["price"]-($product["price"]*$product["discount"])/100));
                      ?> ₫</div>
                      
                      <input style="margin-right: 210px;margin-top: -30px;" type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống">
                      <div class="price-well1"> <?php
                        echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product['number']);
                      ?> ₫</div>
                      
                      
                    </div>
                  </div>
                  <?php endforeach ?>
                </div>
              </div>
              <!-- endscorll -->
              
              
              <div class="item-promotion clearfix">
                <div  class="title-promotion">
                  <div class="" style="margin-left:290px;">
                    Sử dụng Voucher:
                  </div>
                </div>
                <div class="input-promotion">
                  <span class="input-group-addon delete-coupon" style="cursor:pointer;border-radius: 0;">
                    <i class="fa fa-trash-o text-danger" aria-hidden="true"></i>
                  </span>
                  <input style="border-radius: 0px;" type="text" class="form-control" placeholder="Nhập mã giảm giá...">
                  <span class="input-group-addon delete-coupon" style="cursor:pointer;border-radius: 0;">
                    <i class="fa fa-check" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
              <style type="text/css">
              .input-promotion
              {
              background: red;
              width: 400px;margin-left: 300px;margin-top: -50px;
              }
              </style>
              
              
            </div>
            <!--  -->
          </div>
          
        </div>
        <div class="col-md-4 right">
          <div class="content">
            <div class="text-tilte">
              
              <h4 class="text-center">
              Cart Totals
              </h4>
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Tổng cộng</span>  <span class="text-dark"> <?php echo number_format($this->cartTotal()); ?> ₫</span>
          </div>
          <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Thuế ( 0% )</span>  <span class="text-dark">0 ₫</span>
        </div>
        <div class="d-flex justify-content-between align-items-center pt-3 mb-5"> <span class="text-dark h5" id="total">Thanh toán</span>  <span id="value" class="font-w-7 h5"> <?php echo number_format($this->cartTotal()); ?> ₫</span>
      </div>
      <a href="checkout1.html"><button type="button" class="btn btn-dark orders-btn">ĐẶT HÀNG</button></a><br>
      <a href="home.html"><button type="button" class="btn btn-dark back-btn"><i class="fa fa-arrow-left"></i> &nbsp;Tiếp tục mua hàng</button></a>
    </div>
  </div>
  
  
</div>
</div>
<!-- /containner -->
</form>
</div>
<style type="text/css">
.orders-btn
{
font-size: 20px;
width: 100%;
height: 50px;
}
.back-btn
{
margin-top: 20px;
height: 40px;
}
.orders-btn:hover
{
color: white;
}
.back-btn:hover
{
color: white;
}
#value
{
font-size: 24px;
color: red;
font-weight: bold;
}
#total
{
font-weight: bold;
font-size: 24px;
}
.text-dark
{
font-size: 22px;
font-weight: 400;
}
.text-muted{
font-size: 22px;
color: rgb(140, 152, 164)
}
.text-tilte h4
{
font-size: 34px;
font-weight: bold;
}
.content
{
padding: 30px;
}
.right
{
height: 450px;
background: white;
box-shadow: 0 10px 55px 5px rgb(137 173 255 / 15%) !important;
}
.price-well1
{
font-size: 16px;
color: #1e1e1e;
margin-left: 440px;
width: 100px;
margin-top: -24px;
color: red;
font-weight: bold;
}
.media-heading
{
width: 180px;
overflow: hidden;
text-overflow: ellipsis;
line-height: 20px;
-webkit-line-clamp: 1;
display: -webkit-box;
-webkit-box-orient: vertical;
}
.choose-bank
{
padding: 20px 15px;
}
.buttom-cart
{
text-align: center;
margin-top: 20px;
}
.btn-info
{
border-radius: 0px;
}
.nav-tabs-bank .nav-tabs>li>label>span
{
display: block;
border: 0;
border-radius: 0;
color: #555;
opacity: .5;
margin-bottom: 15px;
overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
width: 100%;
height: 40px;
line-height: 20px;
-webkit-line-clamp: 3;
-webkit-box-orient: vertical;
}
.nav-tabs-bank>.nav-tabs >li>label>input
{
position: absolute;
left: 50%;
bottom: 10px;
margin-left: -6px
}
.nav-tabs-bank
{
margin-top: -10px;
}
.nav-tabs-bank>.nav-tabs >li>label
{
border-radius: 0 !important;
text-align: center;
margin: 0;
border-right: 1px solid #ddd;
padding: 10px;
padding-bottom: 43px !important;
}
.nav-tabs-bank>.nav-tabs >li
{
width: 20%;
float: left;
}
.nav-tabs
{
border-bottom: 1px solid #ddd;
}
.bottom-right
{
width: 750px;
height: 243px;
border: 1px solid #ddd;
}
.text-danger{
color: #a94442;
}
.price-well
{
font-size: 16px;
color: white;
}
.item-cart
{
width: 100%;
float: left;
padding: 10px;
color: #888;
}
.input-promotion
{
position: relative;
display: table;  margin-top: 1px;
}
.title-promotion
{
padding: 10px;
}
.item-promotion
{
padding-bottom:10px ;
padding: 10px 10px 70px 10px;
width: 100%;
float: left;
background:#ddd ;
}
.bottom-left
{
overflow: hidden;
background: white;
}
.scroll
{
height: 260px;
overflow: auto;
margin-top: -20px;
}
.list-order
{
padding-top: 10px;
}
.list-order-item
{  padding-bottom: 20px;
position: relative;
}
.price-before
{
text-decoration: line-through;
opacity: .5;
color: #333;
}
.price-well
{
font-size: 16px;
font-weight: bold;
color: black;
}
.input-control
{
text-align: center;
position: absolute;
right: 10px;
top: 60%;
border: 1px solid #ddd;
height: 30px;
margin-top: -15px;
width: 40px;
}
.media-heading a
{
font-size: 15px;
color: black;
display: block;
text-decoration: none;
}
.list-order-item img
{
display: block;
width: 80px;
height: 80px;
object-fit: cover;
}
.media-left
{
float: left;
margin-left: 10px;
}
.delete-order
{
position: absolute;
top: 10px;
right: 20px;
z-index: 100000;
}
.title
{
margin-top: -20px;
}
.title h3
{
font-size: 16px;
color:black ;
font-weight: bold;
text-transform: uppercase;
display: block;
padding: 10px;
border-bottom: 1px solid #ddd;
}
.bottom-left
{;
height: 450px;
border: 1px solid #ccc;
}
.bottom
{
font-family: 'Quicksand', sans-serif;
}
</style>