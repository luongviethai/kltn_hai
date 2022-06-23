<!DOCTYPE html>
<html lang="en">
  <head>
    <!--<base href="http://hermer.byethost7.com/">-->
    <base href="http://localhost/Hermer/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-
    scalable=yes"> <!--THIS-->
    <title>GẠCH MEN - ĐỨC PHÚC 368</title>
    <link rel = "icon" href = "assets/frontend/images/pngegg.png" type = "image/x-icon">
    <link rel="stylesheet" href="assets/frontend/css/trangchu1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/frontend//owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/frontend/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/frontend/js/jquery-3.6.0.min.js"></script>
    <script src="assets/frontend/owlcarousel/owl.carousel.min.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6156d4a6aa51136d"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  </head>
  <body class="preloading">
    <div class="background">
      <img src="assets/frontend/images/backgroundsang.jpg">
    </div>
    <!-- Bạn ctrl + f - search : logo -->
    <!-- Mình sẽ comment . chỗ sửa logo.  -->
    <!-- Tắt 3 dòng dưới thì mất cái hiệu ứng preload -->
    <div class="loader">
      <!-- <img src="assets/frontend/images/gif.gif"> -->
    </div>
    <style type="text/css">
    .preloading
    {
    overflow: hidden;
    }
    .loader{
    position: fixed;
    top: 0px;
    left: 0px;
    /*background: lightgray;*/
    height: 100%;
    width: 100%;
    justify-content: center;
    display: flex;
    align-items: center;
    /*z-index: 100000;*/
    overflow: hidden;
    opacity: 0.8;
    }
    .disppear{
    animation: vanish 1s forwards;
    }
    @keyframes vanish
    {
    100%{
    opacity: 0;
    visibility: hidden;
    }
    }
    </style>
    <script type="text/javascript">
    $(window).on('load', function(event) {
    $(".loader").fadeOut(1000, function() {
    $('body').removeClass('preloading');
    });
    });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/613c98ddd326717cb680eb92/1ffaba8dg';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- wrapper -->
    <div class="container">
      <div class="wrapper">
        <?php
        include "views/HeaderView.php";
        
        ?>
        <!-- /header bottom -->
        <?php
        $slider = $this->modelSlider();
        ?>
        <div style="border-radius: 0px 0px 10px 10px;" class="owl-carousel slider owl-stheme">
          <?php foreach ($slider as $rows): ?>
          
          <div class="item">
            <!-- /slider top -->
            <div class="slider-banner">
              <img style="object-fit:cover;border-radius: 0px 0px 15px 15px;" class="slider-img" style="position: relative;" src="assets/upload/slider/<?php echo $rows->photo; ?>">
              <a class="slider-top-img" href="more.html">Xem thêm</a>
            </div>
          </div>
          <?php endforeach ?>
          <!-- /header -->
        </div>
        <script type="text/javascript">
        $('.slider').owlCarousel({
        items:1,
        nav:false,
        loop:true,
        dots:false,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true
        });
        </script>
        <style type="text/css">
        .slider-banner a:hover{
        background: #ba933e;
        color: white;
        }
        .slider-banner a
        {
        text-decoration: none;
        }
        .slider-top-img
        {
        padding: 10px;position: absolute;bottom:10px;right: 625px;font-size: 12px;border: 1px solid white;color: white;
        }
        .owl-stage-outer
        {
        width: 100%;
        }
        .slider-img img
        {
        width: 100%;
        height: 532px;
        }
        .slider-img
        {
        width: 100%;
        height: 532px;
        }
        </style>
        <!-- /header -->
        <?php
        echo $this->view;
        ?>
        <script type="text/javascript">
        var scroll = $(window).scrollTop();
        $("html").scrollTop(scroll);
        </script>
        <!-- footer -->
        <div class="footer">
          
          <!-- <div class="footer-top">
            <div class="title">
              Khách hàng nói gì
            </div>
            <div class="container">
              <div class="card" style="width:250px">
                <img class="card-img-top" src="assets/frontend/images/avata1.png" alt="Card image" style="width: 248px;height: 160px ;">
                <div class="card-body">
                  <h4 class="card-title">DV. Xuân Bắc</h4>
                  <p class="card-text">"Là một diễn viên ưa thích thời trang tôi rất hài lòng về sản phẩm từ chất lượng cho tới kiểu dáng, bắt kịp xu hướng và mức giá hấp dẫn "</p>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="card" style="width:250px">
                <img class="card-img-top" src="assets/frontend/images/feedback.jpg" alt="Card image" style="width: 248px;height: 160px ;">
                <div class="card-body">
                  <h4 class="card-title">Sơn Tùng MTP</h4>
                  <p class="card-text">Là một diễn viên ưa thích thời trang tôi rất hài lòng về sản phẩm từ chất lượng cho tới kiểu dáng, bắt kịp xu hướng và mức giá hấp dẫn</p>
                  
                </div>
              </div>
            </div>
            <div class="container">
              <div class="card" style="width:250px">
                <img class="card-img-top" src="assets/frontend/images/feedback2.jpg" alt="Card image" style="width: 248px; height: 160px ;">
                <div class="card-body">
                  <h4 class="card-title">Jack</h4>
                  <p class="card-text">Là một diễn viên ưa thích thời trang tôi rất hài lòng về sản phẩm từ chất lượng cho tới kiểu dáng, bắt kịp xu hướng và mức giá hấp dẫn</p>
                  
                </div>
              </div>
            </div>
            <div class="container">
              <div class="card" style="width:250px">
                <img class="card-img-top" src="assets/frontend/images/feedback3.jpg" alt="Card image" style="width: 248px; height: 160px ;">
                <div class="card-body">
                  <h4 class="card-title">Ji Chang Wook</h4>
                  <p class="card-text">나는 품질과 서비스에 대해 매우 중요합니다. 감사합니다.나는 품질과 서비스에 대해 매우 중요합니다. 감사합니다.</p>
                </div>
              </div>
            </div>
          </div>
          -->
          <div class="footer-bottom" style="background-color: #fcfcfc; color: black;">
            <div class="content-footer-bottom">
              <div class="content">
                <h1 class="title-footer-bottom">
                Về chúng tôi
                <h2 class="title-menu-ft"></h2>
                </h1>
                <p class="diachi">Gạch men Đúc Phúc 368</p>
                <i class="fa fa-map"> &nbsp; Kinh Môn - Hải Dương</i>
                <p></p><br>
                <p><i class="fa fa-phone"> &nbsp; 1900 1508</i></p><br>
                <p><i class="fa fa-phone"> &nbsp;  (04) 6789 6789</i></p><br>
                <p><i class="fa fa-envelope"> &nbsp;web.harmer@gmail.com</i></p>
              </div>
            </div>
            <div class="content-footer-bottom">
              <div class="content">
                <h1 class="title-footer-bottom">
                Thương hiệu
                <h2 class="title-menu-ft"></h2>
                </h1>
                
                <div class="ul">
                  <ul>
                    <li>
                      <a href="about">Giới thiệu</a>
                    </li>
                    <li>
                      <a href="tuyendung">Tuyển dụng</a>
                    </li>
                    <li>
                      <a href="hethongcuahang">Hệ thống cửa hàng</a>
                    </li>
                    <li>
                      <a href="contact">Liên hệ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="content-footer-bottom">
              <div class="content">
                <h1 class="title-footer-bottom">
                Hỗ trợ
                <h2 class="title-menu-ft"></h2>
                </h1>
                
                <div class="ul">
                  <ul>
                    <li>
                      <a href="q&a">FAQs - Hỏi đáp</a>
                    </li>
                    <li>
                      <a href="vanchuyen">Chính sách vận chuyển</a>
                    </li>
                    <li>
                      <a href="thanhtoan">Hướng dẫn thanh toán</a>
                    </li>
                    <li>
                      <a href="donhang">Kiểm tra đơn hàng</a>
                    </li>
                    <li>
                      <a href="doitra">Quy định đổi hàng</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="content-footer-bottom">
              <div class="content">
                <h1 class="title-footer-bottom">
                Bản đồ
                </h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29786.921629650667!2d105.80631226733672!3d21.05807115257652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aafe7260066b%3A0x4c2c988309aaa3db!2zSOG7kyBUw6J5!5e0!3m2!1svi!2s!4v1651991161204!5m2!1svi!2s" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <style type="text/css">
              p, h1{
                color: black;
              }
            iframe
            {
            margin-left: -90px;
            }
            </style>
            <div style="margin-right: 20px;" class="payment-support" style="margin-right: 500px;">
              <p>Copyright © 2022</p>
              
            </div>
            <div class="copyright">
              <img src="assets/frontend/images/payment-support.png" alt="">
              
            </div>
          </div>
          <!-- /footer -->
        </div>
        <!-- /body -->
      </div>
    </div>
    <!-- /wrapper -->
    <!-- Messenger Plugin chat Code -->
    <!-- Messenger Plugin chat Code -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "107938861608474");
    chatbox.setAttribute("attribution", "biz_inbox");
    window.fbAsyncInit = function() {
    FB.init({
    xfbml            : true,
    version          : 'v11.0'
    });
    };
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
  </body>
  <style type="text/css">
  .slidebtn
  {
  margin-top: -100px;
  margin-left: 615px;
  color: white;
  font-size: 12px;
  border: 1px solid white;
  }
  </style>
  <style type="text/css">
    a {
        color: black;
        font-weight: 700;
      }
  @media(min-width: 993px) {
  .button-nav
  {
  display: none;
  }
  .wrapper
  {
  margin-left: -80px;
  
  }
  }
  @media(max-width: 768px) {
  .button-nav
  {
  display: none;
  }
  }
  @media(max-width: 420px) {
  .dropdown-menu
  {
  
  width: 280px;
  margin-left: 500px;
  }
  #input-search
  {
  width: 200px;
  }
  .wrapper
  {
  
  width: 100%;
  overflow: hidden;
  
  }
  .header
  {
  width: 100%;
  overflow: hidden;
  height:180px;
  }
  .footer-bottom
  {
  height: 100%;
  width: 100%;
  display: inline-block;
  }
  .login
  {
  margin-left: -80px;
  }
  .icon-social
  {
  display: none;
  }
  .content-footer-bottom
  {
  margin-left: -30px;
  }
  .banner1 .owl-stage-outer
  {
  display: none;
  }
  .banner-thatlung
  {
  display: none;
  }
  .owl-two .owl-stage-outer .product-image
  {
  margin-left: 40px;
  }
  .discount-price
  {
  margin-left: 40px;
  }
  .icon-theme
  {
  margin-left: 40px;
  }
  .hotline
  {
  margin-left: -45px;
  }
  .logo
  {
  padding-left: 5px;
  }
  .slider-banner .slider-top-img
  {
  display: none;
  }
  .owl-one{
  padding-top: 20px;
  }
  .slider-banner
  {
  width:400px;
  height: 200px;
  }
  .slider-banner img
  {
  width: 400px;
  height: 200px;
  }
  .owl-nav{
  padding-top: 20px;
  }
  .owl-one .owl-stage-outer
  {
  width:375px;
  }
  .footer-top
  {
  display: none;
  }
  .list-content
  {
  margin-left: 1px;
  }
  .content-footer-bottom iframe
  {
  margin-left: 3px;
  padding-bottom: 50px;
  }
  .menu-top
  {
  display: none;
  }
  .social
  {
  margin-left: 180px;
  border: 0px;
  }
  .bag-shopping
  {
  display: none;
  }
  .number-buy-product
  {
  display: none;
  }
  .shopping-mini-cart
  {
  display: none;
  }
  .button-nav
  {
  position: absolute;
  display: inline-block;
  
  top: 80px;
  right: 30px;
  z-index: 2;
  }
  .navbar-collapse
  {
  margin-left: -100px;
  }
  .navbar-nav ul
  {
  margin: 0px;
  padding: 0px;
  margin-left: 100px;
  }
  .navbar-nav li
  {
  background: white;
  padding: 15px;
  }
  .navbar-nav li a
  {
  font-size: 16px;
  color: black;
  text-align: center;
  font-weight: bold;
  font-family: 'Quicksand', sans-serif;
  }
  .nav
  {
  display: block;
  }
  .nav-link
  {
  color: #d040fb;
  }
  .logo
  {
  position: relative;
  }
  .icon-social1
  {
  position: absolute;
  
  right: 65px;
  z-index: 100000;
  }
  .module-main
  {
  margin-top: 590px;
  margin-left: -380px;
  }
  #hot-sanpham
  {
  margin-top: 1200px;
  }
  .module-left-bottom
  {
  margin-left: 10px;
  }
  .module-left-top
  {
  margin-left: 10px;
  }
  .module-right
  {
  margin-top: 1180px;
  margin-left: -410px;
  }
  .fa-shopping-bag
  {
  display: none;
  }
  .product-like-icon
  {
  display: none;
  }
  .product-links
  {
  display: none;
  }
  .product-grid:hover .product-content {
  transform: translateY(0px);
  }
  
  }
  
  }
  </style>
</html>