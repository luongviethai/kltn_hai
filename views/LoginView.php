<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="http://localhost/Hermer/">
    <!--<base href="http://hermer.byethost7.com/">-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-
    scalable=yes"> <!--THIS-->
    <title>Gạch men - Đức Phúc 368 </title>
    <link rel = "icon" href = "assets/frontend/images/pngegg.png" type = "image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admin/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/admin/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admin/dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition login-page">
    <div class="container">
      <div class="login-card">
        <div class="login-card-title">
            <p>ĐỨC PHÚC 368</p>
        </div>
        <div class="login-card-content">
            <p>Cùng bạn làm nên ngôi nhà Việt</p>
           
        </div>
      </div>
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="login.html" class="h1"><b>Đức Phúc 368</b></br>Login</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Bắt đầu đăng nhập</p>
          <?php
          if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
          <p style="color: red;" class="login-box-msg">Email hoặc mật khẩu không chính xác!</p>
          <?php
          endif;
          ?>
          <?php
          if(isset($_GET["verify"])&&$_GET["verify"]=="error"): ?>
          <p style="color: red;" class="login-box-msg">Chưa xác nhận email!!!</p>
          <?php
          endif;
          ?>
          <?php
          if(isset($_GET["wrong"])&&$_GET["wrong"]=="error"): ?>
          <p style="color: red;" class="login-box-msg">Something went wrong!!!</p>
          <?php
          endif;
          ?>
          <form action="<?php echo $action; ?>" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Lưu mật khẩu
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button style="width: 120px;margin-left: -23px;" type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          
          <p class="mb-1">
            <a href="home.html">Trang chủ</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">Đăng ký làm thành viên mới</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    </div>
    <!-- /.login-box -->
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
  height: 405px;
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