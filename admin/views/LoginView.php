<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gạch men - Đức Phúc 368</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/admin/dist/css/adminlte.min.css">
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
    <div  style="background: white; height: 500px;" class="login-box">
      <div class="login-logo">
        <a href="../assets/admin/index2.html"><b>Admin</b></br>Đức Phúc 368</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Chào mừng bạn đến với Admin</p>
          <?php if (isset($_GET['notify']) == "error"): ?>
          <p style="color: red;" class="login-box-msg">Sai tài khoản hoặc mật khẩu đăng nhập</p>
          <?php endif ?>
          <form action="index.php?controller=login&action=login" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
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
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
  </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="../assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/admin/dist/js/adminlte.min.js"></script>
  </body>
</html>
<style type="text/css">
  body{
    background: url('../assets/frontend/images/backgroundcay.jpg');
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
  height: 500px;
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