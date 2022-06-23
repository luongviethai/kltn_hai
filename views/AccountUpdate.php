<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="http://localhost/Hermer/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gạch men - Đức Phúc 368</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admin/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/admin/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admin/dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition register-page">
    <div class="container">
      <div class="login-card">
        <div class="login-card-title">
            <p>ĐỨC PHÚC 368</p>
        </div>
        <div class="login-card-content">
            <p>Cùng bạn làm nên ngôi nhà Việt</p>
           
        </div>
      </div>
    <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="assets/admin/index2.html" class="h1"><b>Đức Phúc 368</b></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Cập nhật thông tin người dùng</p>
          <form action="<?php echo $action; ?>" method="post">
            <div class="input-group mb-3">
              <label class="form-control">Họ và tên</label>
              <input style="width: 110px;" type="text" class="form-control" name="name" value="<?php echo isset($record->name)?$record->name:""; ?>" required="Không được để trống">
              <div class="input-group-append">
                <div style="width: 40px;" class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <label class="form-control">Email</label>
              <input style="width: 110px;" type="email" class="form-control" name="email" value="<?php echo isset($record->email)?$record->email:""; ?>" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> required="Không được để trống">
              <div class="input-group-append">
                <div style="width: 40px;" class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <label class="form-control">Địa chỉ</label>
              <input style="width: 110px;" type="text" class="form-control" name="address" value="<?php echo isset($record->address)?$record->address:""; ?>" required="Không được để trống">
              <div class="input-group-append">
                <div style="width: 40px;" class="input-group-text">
                  <span class="fas fa-map-marker"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <label class="form-control">SĐT</label>
              <input style="width: 110px;" type="text" class="form-control" name="phone" value="<?php echo isset($record->phone)?$record->phone:""; ?>" required="Không được để trống">
              <div class="input-group-append">
                <div  style="width: 40px;" class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <label  class="form-control">Password</label>
              <input style="width: 110px;" type="password" class="form-control" name="password"  <?php if(isset($record->email)): ?>  <?php else: ?> required <?php endif; ?>>
              <div class="input-group-append">
                <div style="width: 40px;" class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            
            <div class="row">
              
              <!-- /.col -->
              <div style="padding-bottom:20px;padding-top: 10px;" class="col-12">
                <button  type="submit" onclick="return window.confirm('Bạn có chắc chắn chưa ???');" class="btn btn-primary btn-block">Cập nhật thông tin</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          
          <a href="home.html" class="text-center">Trở về trang chủ</a>
        </div>
        <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
    </div>
      <!-- /.register-box -->
      <!-- jQuery -->
      <script src="assets/admin/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="assets/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="assets/admin/dist/js/adminlte.min.js"></script>
    </body>
  </html>
  <style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
  body{
  background: url('assets/frontend/images/backgroundcay.jpg');
}
.container{
  display: flex;
  justify-content: center;
  align-items: center;
  width: auto;
  height: auto;
  padding: 10px;
  box-shadow: 5px 10px #888888;
}
.login-card{
  width: 370px;
  height: 520px;
  background: #fcfcfc;
  background: #F15F66;
}
.login-card .login-card-content{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 70%;
  color: white;
  font-size: 20px;
  font-weight: 500;
}
.login-card-title{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20%;
  color: white;
  font-size: 30px;
  font-weight: 500;
}
.login-box{
  min-width: 370px;
}
  body
  {
  font-family: 'Quicksand', sans-serif;
  }
  </style>