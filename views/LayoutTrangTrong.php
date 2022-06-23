<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  <base href="http://hermer.byethost7.com/">-->
    <base href="http://localhost/Hermer/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-
    scalable=yes"> <!--THIS-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GẠCH MEN - ĐỨC PHÚC 368</title>
    <link rel = "icon" href = "assets/frontend/images/pngegg.png" type = "image/x-icon">
    <link rel="stylesheet" href="assets/frontend/css/danh-muc-san-pham.css">
    <link rel="stylesheet" href="assets/frontend/css/trangchu1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6156d4a6aa51136d"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/frontend/js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="background">
      <img src="assets/frontend/images/backgroundghe.jpg">
    </div>
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
    <div class="container">
      <!-- wrapper -->
      
      <div class="wrapper">
        <!-- --------------------------------------------------------------- -->
        
        <div class="header">
          
          <!-- header top -->
          <div class="header-top" style="background-color: #fcfcfc;">
            
            <div class="hotline">
              Hotline: 0967323974
            </div>
            
            <!-- socail -->
            
            <div class="social" style="margin-top: 10px;">
              
             <!--  <div class="icon-social">
                <a href="facebook">
                  <i class="fa fa-facebook"></i>
                  
                </a>
              </div>
              
              <div class="icon-social">
                <a href="instagram">
                  <i class="fa fa-instagram"></i>
                  
                </a>
              </div>
              <div class="icon-social">
                <a href="twiter">
                  <i class="fa fa-twitter"></i>
                  
                </a>
              </div>
              <div class="icon-social">
                <a href="timblr">
                  <i class="fa fa-tumblr"></i>
                  
                </a>
              </div> -->
              
              <div style="padding-left: 20px;" class="login">
                <?php if (isset($_SESSION['customer_name'])):
                ?>
                <a href="update/<?php echo $_SESSION['customer_id']; ?>.html"><img style="width: 25px;" src="assets/frontend/images/user.jpg">&nbsp;&nbsp;&nbsp;</a><a id="gachcheo" href="">|</a>
                <a href="index.php?controller=account&action=logout">&nbsp;ĐĂNG XUẤT</a>
                <?php
                else:
                ?>
                <a href="login.html">ĐĂNG NHẬP&nbsp;</a>
                <a id="gachcheo" href="">|</a>
                <a href="register.html">&nbsp;ĐĂNG KÝ</a>
                <?php endif ?>
                
              </div>
            </div>
            <!-- /social -->
            
            
            
          </div>
          <!-- /headertop -->
          <style type="text/css">
          * {
            color: black;
          }
          .menu-top ul li a:hover
          {
          color: #ba933e;
          }
          </style>
          
          <!-- hearder-bottom -->
          <div class="header-bottom" style="background-color: #fcfcfc;">
            <!-- logo -->
            
            
            <div class="logo">
              <a href="home.html"><img src="assets/frontend/images/header.png" alt=""></a>
            </div>
            <!-- /logo -->
            <div class="button-nav">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <i id="icon-facebook" class="fa fa-bars"></i>
              </button>
              
              <!-- Navbar links -->
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="home.html">TRANG CHỦ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">GIỚI THIỆU</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="allproducts.html">SẢN PHẨM</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="news.html">TIN TỨC</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cart.html">GIỎ HÀNG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">LIÊN HỆ</a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- menu-top -->
            <div  class="menu-top">
              <ul>
                <li>
                  <a href="home.html">TRANG CHỦ</a>
                  <ul style="border-radius: 0px 0px 10px 10px;" class="sub-menu">
                    <li>
                      <a href="about.html">Giới thiệu</a>
                      
                    </li>
                    <li>
                      <a href="allproducts.html">Sản phẩm</a>
                      
                    </li>
                    <li>
                      <a href="news.html">Tin tức</a>
                    </li>
                    <li>
                      <a href="error.html">Bộ sưu tập</a>
                    </li>
                    <li style="border-radius: 0px 0px 10px 10px;">
                      <a  href="contact.html">Liên hệ</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="about.html">GIỚI THIỆU</a>
                </li>
                <li>
                  <a href="allproducts.html">SẢN PHẨM</a>
                  <ul style="border-radius: 0px 0px 10px 10px;" class="sub-menu">
                    <?php
                    $conn = Connection::getInstance();
                    $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                    $categories = $query->fetchAll();
                    ?>
                    <?php foreach ($categories as $rows): ?>
                    <li>
                      <a href="products/category/<?php echo $rows->id ?>/<?php echo $rows->name; ?>.html"><?php
                        echo $rows->name;
                      ?></a>
                      <ul style="border-radius: 0px 10px 10px 10px;" class="sub-menu-1">
                        <?php
                        $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                        $categoriesSub = $querySub->fetchAll();
                        ?>
                        <?php foreach ($categoriesSub as $subrows): ?>
                        <li>
                          <a style="text-decoration: none;" href="products/subcategory/<?php echo $subrows->id; ?>/<?php echo $subrows->name; ?>.html"><?php
                            echo $subrows->name;
                          ?></a>
                          
                        </li>
                        <?php endforeach ?>
                      </ul>
                      
                    </li>
                    <?php endforeach ?>
                    <style type="text/css">
                    .sub-menu-1 li:last-child
                    {
                    border-radius: 0px 0px 10px 10px;
                    }
                    .sub-menu-1 li:first-child
                    {
                    border-radius: 0px 10px 0px 0px;
                    }
                    .sub-menu-1 li a:hover{
                    color: black;
                    border-radius: 0px 0px 10px 10px;
                    }
                    .menu-top .sub-menu li:hover .sub-menu-1
                    {
                    display: block;
                    }
                    .sub-menu-1
                    {
                    display: none;
                    }
                    .sub-menu-1 a
                    {
                    font-family: 'Quicksand', sans-serif;
                    padding-left: 20px;
                    text-decoration: none;
                    font-size: 13px;
                    font-weight: bold;
                    color: black;
                    }
                    .sub-menu a
                    {
                    position: relative;
                    }
                    .sub-menu-1
                    {
                    width: 150px;
                    margin: 0px;
                    padding: 0px;
                    background: white;
                    position: absolute;
                    top: 0px;
                    left: 150px;
                    }
                    .menu-top > ul > li > ul
                    {
                    border: 1px solid #ccc;
                    }
                    .menu-top > ul > li > ul > li
                    {
                    border: 0px;
                    }
                    
                    </style>
                    
                  </ul>
                </li>
                <li>
                  <a href="news.html">TIN TỨC</a>
                </li>
                <li>
                  <a href="cart.html">GIỎ HÀNG</a>
                </li>
                <li>
                  <a href="contact.html">LIÊN HỆ</a>
                </li>
              </ul>
            </div>
            <!-- /menu-top -->
            
            <!-- search top -->
            <div class="search">
              
            </div>
            
            <div class="menu-top-logo">
              <div class="icon-social1">
                <div class="dropdown">
                  <a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-search">
                    </i>
                  </a>
                  <div style="border-radius: 10px 0px 10px 10px;" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div style="background:white;height: 30px;" class="dropdown-item" id="image-show">
                      <div class="form-group">
                        <input id="input-search" class="form-control" style="font-weight: 700;" type="text" placeholder="Từ khóa tìm kiếm" name="" autocomplete="off">
                        <button id="search-btn" class="btn btn-search" type="submit"> <i class="fa fa-search"></i></button>
                        <div class="smart-search">
                          <ul style="width: 350px;height: 500px;overflow: auto;margin: 0px;padding: 0px;">
                            
                            <li>
                              <a id="id-search" href="index.php">
                                <div class="warp-img-suggestion">
                                  <img src="http://localhost/FE24-%c4%90%e1%bb%97%20Vinh%20Quang-GD/admin/assets/upload/products/1629712767_qu-n-au-nam-atr007s7-quan-au-nam-aristino-atr010s7-01-large.jpg">
                                </div>
                                <div class="warp-right-suggestion">
                                  <div class="name-suggestion">
                                    Quần áo thể thao nam
                                  </div>
                                  <div class="price-suggestion">
                                    <span class="price-well">550,000</span>
                                  </div>
                                </div>
                              </a>
                              
                            </li>
                          </ul>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              
              <script type="text/javascript">
              $(document).ready(function(){
              // bắt sự kiện click của id=btnSearch
              $("#search-btn").click(function(){
              var key = $("#input-search").val();
              // di chuyển đến url tìm kiếm
              location.href = "search/key="+key+".html";
              });
              $(".form-control").keyup(function(){
              var strKey = $("#input-search").val();
              if (strKey.trim()=="")
              $(".smart-search").attr("style","display:none");
              else
              $(".smart-search").attr("style","display:block");
              // sử dụng ajax để lấy dữ liệu
              $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data)
              {
              // clear các thẻ li bên trong thẻ ul
              $(".smart-search ul").empty();
              // thêm dữ liệu vừa lấy được bằng ajax vào thẻ ul
              $(".smart-search ul").append(data);
              });
              });
              // nhấn phím enter
              $('#input-search').keypress(function(e){
              if(e.keyCode==13)
              $('#search-btn').click();
              });
              });
              </script>
              <style type="text/css">
              .dropdown-menu
              {
              margin-left: -300px;margin-top: 10px;border-radius: 10px;
              }
              .price-well
              {
              color: red;
              }
              .smart-search > ul > li > a
              {
              text-decoration: none;
              color: #888;
              margin-left: 0px;
              line-height: 0px;
              }
              .warp-right-suggestion
              {
              line-height: 20px;
              }
              .name-suggestion
              {
              font-size: 15px;
              }
              .search-avtice
              {
              margin-top: 10px;
              }
              .smart-search img
              {
              width: 50px;
              height: 50px;
              float: left;
              margin-right: 10px;
              text-align: center;
              border: 1px solid #ddd;
              padding: 1px;
              background: #fff;
              }
              .smart-search ul li
              {
              border-bottom: 1px solid #ddd;
              overflow: hidden;
              padding: 10px;
              }
              .smart-search ul
              {
              margin: 0px;
              padding: 0px;
              list-style-type: none;
              }
              .smart-search
              {
              display: none;
              margin-top: 20px;
              background: #fff;
              width: 350px;
              }
              .dropdown
              {
              margin-right: 0px;
              }
              #input-search
              {
              float: left;margin-top: 3px;margin-left: 5px;height:35px;width: 323px;border-radius: 0px;border: 0px;font-family: 'Quicksand', sans-serif;font-size: 14px;
              }
              .dropdown-item:hover
              {
              background: white;
              }
              .dropdown-menu:hover
              {
              background: white;
              }
              .dropdown-menu
              {
              position: absolute;
              top: 0px;
              left: 0px;
              transform: translate3d(27px, 42px, 0px);
              height: 58px;width: 400px;margin-left: -300px;margin-top: 10px;border-radius: 0px;
              }
              #search-btn i:hover
              {
              color: black;
              }
              #search-btn i
              {
              font-size: 16px;
              color: black;
              }
              #search-btn
              {
              padding: 5px;
              background: white;
              margin-left: 10px;
              margin-top: 5px;
              }
              </style>
              <?php
              $ProductsNumberCart = 0;
              if (isset($_SESSION['cart'])&&$_SESSION['cart']!=null) {
              foreach ($_SESSION['cart'] as $product) {
              $ProductsNumberCart++;
              }
              }
              ?>
              <span style="font-size: 10px;z-index: 1;padding: 2px 7px;" class="number-buy-product">
                <?php
                echo $ProductsNumberCart;
                ?>
              </span>
            </div>
            
            <!-- /bag -->
            <?php if ($_SESSION['cart'] != null): ?>
            <div style="width: 10px;margin-right: 85px;" class="dropdown pull-right">
              <a type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="margin-top: 20px;" class="fa fa-shopping-bag"></i>
              </a>
              <div style="border-radius: 15px 0px 15px 15px;" class="dropdown-menu dropdown-menu-1" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-item" id="myDIV" href="">
                  <div class="shopingcart-box">
                    <div class="scrollbar">
                      <div class="list">
                        <?php foreach ($_SESSION['cart'] as $product): ?>
                        <div style="margin-top: 12px;" class="item1">
                          <div  style="border-bottom: 1px solid #f5f5f5;height: 100px;" class="list-order-item1">
                            <a style="" href="index.php?controller=cart&action=delete1&id=<?php echo $product["id"]; ?>" class="pull-right delete-order1" ><i class="fa fa-times" style="font-size: 16px;"></i></a>
                            <div class="media-left">
                              <a href="products/detail/<?php echo $product["id"]; ?>/<?php echo $product["name"]; ?>.html" class="img-80"><img src="assets/upload/products/<?php echo $product["photo"]; ?>" alt=""></a>
                            </div>
                            <div style="width: 50px;" class="media-body">
                              <h4 style="margin-top: -1px;" class="media-heading1">
                              <a href="products/detail/<?php echo $product["id"]; ?>/<?php echo $product["name"]; ?>.html"><?php
                                echo $product["name"];
                              ?></a>
                              </h4>
                              <strong class="price2">
                              <span class="number-item"><?php
                                echo $product['number'];
                              ?></span> x
                              <?php
                              echo number_format($product["price"]-($product["price"]*$product["discount"])/100);
                              ?>₫
                              </strong>
                              
                              
                            </div>
                          </div>
                        </div>
                        <?php
                        endforeach;
                        ?>
                      </div>
                    </div>
                    
                  </div>
                  <div class="price1">
                    <div class="total-price pull-left">
                      Tổng tiền :
                    </div>
                    <div class="total-price1 pull-right">
                      <?php
                      echo number_format($this->cartTotal());
                      ?> ₫
                    </div>
                  </div>
                  <div class="view-link">
                    
                    <a href="cart.html" class="btn btn-primary pull-right">Thông tin giỏ hàng</a>
                    <a style="margin-left: 20px;color: white;" onclick="closeForm()" class="btn btn-primary">Close</a>
                  </div>
                </div>
              </div>
            </div>
            <?php elseif($_SESSION['cart'] == null): ?>
            <div style="width: 10px;margin-right: 110px;" class="dropdown pull-right">
              <a type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="margin-top: 20px;margin-left: 25px;" class="fa fa-shopping-bag"></i>
              </a>
              <div style="margin-top: 10px;margin-left: -330px;border-radius: 15px 0px 15px 15px;" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-item">
                  
                  <div class="title">
                    Không có sản phẩm nào trong giỏ hàng
                  </div>
                </div>
                
              </div>
            </div>
            <?php endif ?>
            
            <!--  -->
            
            <!--  -->
            <style type="text/css">
            .title
            {
            font-size: 18px;
            font-family: 'Quicksand', sans-serif;
            }
            </style>
            <style type="text/css">
            .dropdown-menu-1
            {
            
            height: 450px;width: 350px;margin-left: -330px;margin-top: 10px;border-radius: 0px;
            }
            .media-heading1 a:hover
            {
            color: #ba933e;
            }
            .dropdown i:hover
            {
            color: white;
            }
            .view-link a:hover
            {
            background: #ba933e;
            border: 1px solid #ba933e;
            }
            .sub-menu
            {
            z-index: 3;
            }
            .black-cart
            {
            display: none;
            }
            .delete-order1 i:hover
            {
            color: #ba933e;
            }
            .delete-order1
            {
            padding-right: 10px;
            }
            .form-popup
            {
            display: none;
            }
            .media-body h4
            {
            width: 180px;
            overflow: hidden; // ẩn các nội dung khi kích thước lớn hơn chiều rộng khối bên ngoài
            text-overflow: ellipsis; //thêm 3 dấu chấm ở cuối
            -webkit-line-clamp: 1;// số dòng muốn hiển thị
            -webkit-box-orient: vertical;
            display: -webkit-box;
            }
            .view-link
            {
            margin-top: 30px;
            margin-right: 20px;
            }
            .view-link a
            {
            font-size: 14px;
            background: #231f20;
            border: 1px solid #231f20;
            border-radius: 0px;
            padding: 10px 15px 10px 15px;
            }
            .total-price1
            {
            color: #1e1e1e;
            }
            .total-price
            {
            color: #888;
            }
            .price1
            {
            font-size: 18px;
            padding: 20px;
            font-weight: bold;
            }
            .price2 a
            {
            font-weight: bold;
            }
            .price2
            {
            padding-top: 20px;
            font-size: 14px;
            color: #f00;
            padding-top: 8px;
            }
            .media-heading1 a
            {
            font-size: 15px;
            text-decoration: none;
            white-space: inherit;
            color: #989898;
            }
            .item1 img
            {
            width: 65px;
            height: 86px;
            }
            .shopingcart-box
            {
            height: 300px;
            overflow: auto;
            width: 333px;
            }
            .mini-cart
            {
            font-family: 'Quicksand', sans-serif;
            width: 292px;
            height: 428px;
            background: red;
            border: 1px solid #ccc;
            position: absolute;
            z-index: 100000;
            background: white;
            }
            .item1 img
            {
            width: 65px;
            height: 86px;
            }
            .scrollbar
            {
            width: 310px;
            }
            </style>
            <style type="text/css">
            .sub-menu a
            {
            display: inline-block;
            width: 100%;
            }
            .number-buy-product
            {
            padding: 2px 7px 2px 7px;
            }
            </style>
          </div>
        </div>
        <!-- ------------------------------------------------------------ -->
        <!-- body -->
        
        <?php
        echo $this->view;
        ?>
        <!-- footer -->
        
      </div>
      
    </div>
    <div class="footer2">
      <div class="footer-bottom" style="background-color: #fcfcfc;" >
        <div class="content-footer-bottom">
          <div class="content">
            <h1 class="title-footer-bottom">
            Về chúng tôi
            <h2 class="title-menu-ft"></h2>
            </h1>
            <p class="diachi">Gạch men - Đức Phúc 368</p>
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
                  <a href="cuahang">Hệ thống cửa hàng</a>
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
                  <a href="doihang">Quy định đổi hàng</a>
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
        iframe
        {
        margin-left: -90px;
        }
        </style>
        <div class="payment-support">
          
          <a><img src="assets/frontend/images/payment-support.png" alt=""></a>
        </div>
        <div class="copyright">
          
          
        </div>
      </div>
    </div>
    
    <style type="text/css">
    .footer-bottom
    {
    display: inline-flex;
    width: 1310px;
    
    }
    </style>
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
  
  width: 235px;
  margin-left: -150px;
  
  }
  #input-search
  {
  width: 170px;
  }
  .short_intro
  {
  width: 340px;
  }
  .link-lien-quan
  {
  width: 31%;
  }
  .top-post img
  {
  height: 200px;
  width: 350px;
  object-fit: cover;
  }
  .box-detail-post
  {
  width: 350px;
  }
  .pagination
  {
  margin-left: -280px;
  }
  #products
  {
  margin-left: 10px;
  }
  .list-product-content
  {
  width: 252px;
  }
  .btn-group button
  {
  display: none;
  }
  .body-breadcrumb
  {
  margin-top: -50px;
  margin-left: 10px;
  }
  .left{
  display: none;
  }
  .top-list-product
  {
  width: 330px;
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
  height: 1100px;
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
  .discount-price
  {
  margin-left: 20px;
  }
  .icon-theme
  {
  margin-left: 20px;
  }
  .hotline
  {
  margin-left: -45px;
  }
  .logo
  {
  padding-left: 5px;
  }
  .footer-top
  {
  display: none;
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
  .fa-shopping-bag
  {
  display: none;
  }
  .product-like-icon
  {
  display: none;
  }
  
  }
  
  }
  </style>
</html>