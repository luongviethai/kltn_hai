<?php
$this->fileLayout = "LayoutTrangTrong.php";
    
?>
<div class="body">
    
    <div class="body-breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="home.html">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
            
        </ol>
    </div>
    <style type="text/css">
    .breadcrumb
    {
    margin-top: -10px;
    margin-left: -10px;
    background: none;
    font-size: 14px;
    text-decoration: none;
    font-family: 'Quicksand', sans-serif;
    }
    .breadcrumb a
    {
    color: black;
    font-family: 'Quicksand', sans-serif;
    text-decoration: none;
    }
    .breadcrumb-item.active
    {
    color: black;
    opacity: 0.7;
    }
    </style>
        <div style="padding-bottom:100px;padding-top: 30px;" class="main">
        <!-- --------------------------------------- -->
        <div class="container">
            <div class="row contact">
                <div class="col-md-6 form-contact">
                    <div class="left contact-form">
                        <h3 style="padding-bottom: 30px; color: black;">Đức Phúc 368 Company</h3>
                        
                        <form action="<?php echo $action ; ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control required" name="name" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required" name="sdt" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required" name="tieude" placeholder="Tiêu đề">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Ghi chú" name="ghichu" class="form-control required"></textarea>
                            </div>
                            <div class="btn-send">
                                <button type="submit" class="bt btn-default txt-upper btn-submit"><span class="name">Gửi yêu cầu</span></button>
                                
                            </div>
                            
                            <?php if (isset($_GET['notify'])&&$_GET['notify'] == "thanhcong"): ?>
                            <div class="thanhcong">
                                <p style="color:red;font-size: 16px;font-family: 'Quicksand', sans-serif;">Phản hồi thành công !!!</p>
                            </div>
                            <?php endif ?>
                        </form>
                        
                    </div>
                </div>
                <!-- -------------------------------------------- -->
                    <style type="text/css">
                    .btn-send button{
                        width: 440px;
                        height: 50px;
                        background: red !important;
                    }
                    .contact{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    .form-contact{
                        background:#f0eceb;
                        padding-top: 20px;
                        padding-bottom: 30px;
                    }
                    .textarea .form-control{
                        height: auto;
                    }
                    .form-group
                    {
                        padding-bottom: 20px;
                    }
                    .txt-upper:hover
                    {
                        border: 1px solid #ba933e ;
                        color: white;
                            background: #ba933e;
                    }
                    .txt-upper
                    {
                        font-family: 'Quicksand', sans-serif;
                        color: white;
                        font-size: 14px;
                    border: none;
                    min-width: 50px;
                    line-height: 35px;
                    padding: 0 10px;
                        background-color: #383838;
                    border: 1px solid #383838;
                        text-transform: uppercase;
                    }
                    .form-control
                    {
                        font-family: 'Quicksand', sans-serif;
                        border-radius: 0;
                        border-color: #ddd;
                        display: block;
                    width: 150%;
                    height: 34px;
                    padding: 6px 12px;
                    font-size: 14px;
                    line-height: 1.42857143;
                    color: #555;
                    background-color: #fff;
                    border: 1px solid #ccc;
                    }
                    .left h3
                    {
                        font-family: 'Quicksand', sans-serif;
                        font-size: 19px;
                        font-weight: bold;
                        text-transform: uppercase;
                    color: white;
                    }
                    </style>
                    <!-- /list-product -->
                </div>
                <!-- bottom right -->
                
            </div>
            <!-- /main -->
        </div>