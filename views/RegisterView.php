<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-
    scalable=yes"> <!--THIS-->
    <title>Gạch men - Đức Phúc 368</title>
    <base href="http://localhost/Hermer/">
    <!-- <base href="http://hermer.byethost7.com/"> -->
    <link rel = "icon" href = "assets/frontend/images/pngegg.png" type = "image/x-icon">
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
            <p class="login-box-msg">Đăng ký thành viên mới</p>
            <?php
            if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
            <p style="color: red;" class="login-box-msg">Email đã tồn tại</p>
            <?php
            endif;
            ?>
            <form action="index.php?controller=account&action=registerPost" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Full name" required="Không được để trống">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required="Không được để trống">
                <div class="input-group-append">
                  <div style="width: 40px;" class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="address" placeholder="Address" required="Không được để trống">
                <div class="input-group-append">
                  <div style="width: 40px;" class="input-group-text">
                    <span class="fas fa-map-marker"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="phone" placeholder="Phone" required="Không được để trống">
                <div class="input-group-append">
                  <div style="width: 40px;" class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required="Không được để trống" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree" required="aaaa">
                    <label for="agreeTerms">
                      Tôi đồng ý với các <a href="#">điều khoản</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <a href="login.html" class="text-center">Tôi đã có một tài khoản đăng nhập</a>
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
  background: url('assets/frontend/images/backgroundcay1.jpg');
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
  height: 508px;
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