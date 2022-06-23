<?php
$this->fileLayout = "LayoutCart.php";
?>
<div class="container">
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
    <div class="body-breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="home.html">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            
        </ol>
    </div>
</div>
<div class="container-fluid mt-100">
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div style="background:none;" class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong style="color:white;">Không có sản phẩm nào trong giỏ hàng của bạn</strong></h3>
                        <a href="home.html" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Tiếp tục mua sắm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">

body {
font-family: 'Quicksand', sans-serif;
}
.mt-100 {
margin-top: 100px
}
.card {
margin-bottom: 30px;
border: 0;
background:none ;


}
.card .card-header {
background-color: #fff;
border-bottom: none;
padding: 24px;
border-bottom: 1px solid #f6f7fb;
border-top-left-radius: 8px;
border-top-right-radius: 8px
}
.card-header:first-child {
border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}
.card .card-body {
padding: 30px;
background-color: transparent
}
.btn-primary,
.btn-primary.disabled,
.btn-primary:disabled {
background-color: black !important;
border-color: black !important
}
</style>