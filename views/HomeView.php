<?php
//load file Layout.php vao day
$this->fileLayout = "LayoutTrangChu.php";
?>
<div class="body">
  
  <!-- collection -->
  <div style="padding-top: 20px;" class="collection">
    <div class="lable-collection">
      <h2 class="title-collection"  style="color: black;">Bộ sưu tập</h2>
      <div class="slogan"  style="color: black;">Bộ sưu tập với các họa tiết tinh tế lại có mức giá rẻ.</div>
    </div>
  </div>
  <!-- /collecttion -->
  <!-- modulcontent -->
  <div class="module-content">
    <!-- moduld left -->
    <div class="module-left">
      <!-- moduld left top -->
      <div style="border-radius: 20px 0px 0px 0px;" class="module-left-top">
        <a id="click"><img style="object-fit: cover;border-radius: 20px 0px 0px 0px" src="assets/upload/slider/<?php echo $photo1->photo; ?>" alt="">
          <div style="border-radius: 20px 0px 0px 0px;" class="overlay"></div>
        </a>
      </div>
      <script>
      $(document).ready(function (){
      $("#click").click(function (){
      $('html, body').animate({
      scrollTop: $("#div1").offset().top
      }, 200);
      });
      $("#click1").click(function (){
      $('html, body').animate({
      scrollTop: $("#div1").offset().top
      }, 200);
      });
      $("#click3").click(function (){
      $('html, body').animate({
      scrollTop: $("#div3").offset().top
      }, 200);
      });
      $("#click4").click(function (){
      $('html, body').animate({
      scrollTop: $("#div5").offset().top
      }, 200);
      });
      });
      </script>
      <!-- /modult left top -->
      <!-- modult left bottom -->
      <div style="border-radius: 0px 0px 0px 20px;" class="module-left-bottom">
        <a href="allproducts.html"><img style="object-fit: cover;border-radius: 0px 0px 0px 20px;" src="assets/upload/slider/<?php echo $photo2->photo; ?>" alt="">
          <div style="border-radius: 0px 0px 0px 20px;" class="overlay1"></div>
          
          
        </a>
      </div>
      
      <!-- /moduld left bottom -->
    </div>
    <!-- /moduldlefft -->
    <!-- moduld main -->
    <div class="module-main">
      <?php if (isset($_SESSION['customer_name'])!=null): ?>
      <a id="click4"><img style="object-fit: cover;" src="assets/upload/slider/<?php echo $photo3->photo; ?>" alt="">
        <?php
        elseif(isset($_SESSION['customer_name'])==null):
        ?>
        <a href="login.html"><img style="object-fit: cover;" src="assets/upload/slider/<?php echo $photo3->photo; ?>" alt="">
          <?php endif ?>
          
          <div class="overlay"></div>
          
          
        </a>
      </div>
      <!-- modulmain -->
      <!-- module right -->
      <div class="module-right">
        <div style="border-radius: 0px 20px 0px 0px;" class="module-right-top">
          <a id="click3"><img style="object-fit: cover;border-radius: 0px 20px 0px 0px;" src="assets/upload/slider/<?php echo $photo4->photo; ?>" alt="">
            <div style="border-radius: 0px 20px 0px 0px;" class="overlay2"></div>
            
            
          </a>
        </div>
        <div style="border-radius: 0px 0px 20px 0px;" class="module-right-bottom">
          <a id="click1"><img style="object-fit: cover;border-radius: 0px 0px 20px 0px" src="assets/upload/slider/<?php echo $photo5->photo; ?>" alt="">
            <div style="border-radius: 0px 0px 20px 0px;height: 93.5%;margin-top: 20px;" class="overlay3"></div>
            
            
          </a>
        </div>
      </div>
      <!-- /module right -->
    </div>
    <!-- /mudule content -->
  </div>
  <!-- hot product -->
  <div class="hot-product" id="hot-sanpham">
    <!-- title -->
    <div id="div1" class="collection">
      <div class="lable-collection">
        <h2 class="title-collection"  style="color: black;">Sản phẩm nổi bật</h2>
        <div class="slogan"  style="color: black;">Tất cả sản phẩm của chúng tôi là những mẫu mới nhất được nhiều khách hàng quan tâm
        </div>
      </div>
    </div>
    <!-- title -->
    <style type="text/css">
    .icon-theme
    {
    position: absolute;
    top: 50px;
    z-index: 1;
    left: -8px;
    }
    .discount-price
    {
    position: absolute;
    z-index: 2;
    left: 5px;
    color: white;
    top: 62px;
    font-weight: bold;
    left: 15px;
    }
    </style>
    <!-- content product -->
    <div class="container">
      <div class="row">
        <?php
        $hotProduct = $this->modelHotProduct();
        ?>
        <?php foreach ($hotProduct as $rows): ?>
        <div class="col-md-3 col-sm-6">
          <div class="product-grid" style="position: relative;">
            <?php if ($rows->discount > 0 ): ?>
            <span class="discount-price">
              - <?php
              echo $rows->discount;
              ?> %
            </span>
            <div class="icon-theme">
              <img style="width: 75px;height: 60px;" src="assets/frontend/images/icon-theme1.png">
            </div>
            <?php endif ?>
            <div class="product-image">
              <a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html" class="image">
                <img style="width: 255px;height:340px;object-fit: cover;" class="pic-1" src="assets/upload/products/<?php echo $rows->photo; ?>">
                
              </a>
              <a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html" class="product-like-icon">
                <?php if (isset($rows->hot)&&$rows->hot==1):
                ?>
                <i class="fa fa-heart"></i>
                <?php endif ?>
                
              </a>
              <ul class="product-links">
                <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>"><i class="fa fa-heart"></i></a></li>
                <li><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><i class="fa fa-eye"></i></a></li>
                <li><a  href="index.php?controller=cart&action=create2&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><?php
                echo $rows->name;
              ?></a></h3>
              <div class="price">
                <?php if ($rows->discount > 0): ?>
                <span class="giahientai"><?php
                  echo number_format($rows->price);
                ?> ₫</span>
                <?php
                elseif($rows->discount == 0):
                ?>
                
                <?php endif ?>
                <span class="price-truoc"><strong>&nbsp;<?php
                  echo number_format($rows->price - ($rows->price * $rows->discount)/100);
                ?> ₫</strong></span>
                
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
        
        
        
        
      </div>
    </div>
    <style type="text/css">
    .product-image .product-links li a:hover
    {
    background: #ba933e;
    }
    .product-content .title a:hover
    {
    color: #ba933e;
    }
    </style>
    <!--  -->
    <div id="div3" class="container-fluid banner-thatlung">
      
      <img  style="width: 100%;height:620px;object-fit:cover;border-radius: 0px 100px" src="assets/upload/slider/<?php echo $photo6->photo; ?>"/>
      
      <div class="container">
        <div class="row">
          <p style="position: absolute;top:70px;right: 480px;font-size: 40px;color: white;font-weight: bold;font-family: 'Quicksand'; color: black;">Gạch giả gỗ</p>
          <p style="position: absolute;top:125px;right: 70px;font-size: 14px;color: white;font-weight: bold;font-family: 'Quicksand'; color: black;">Gạch giả vân gỗ giá rẻ được ưa chuộng bởi độ bền cao, khả năng chống cháy tốt, chống mối mọt</p>
          <div style="width: 550px;margin-top: -500px;" class="owl-carousel owl-4 owl-theme">
            <?php
            $thatlung = $this->modelGetThatLungProducts();
            ?>
            <?php foreach ($thatlung as $rowthatlung): ?>
            <div class="item">
              <div class="col-md-3">
                <div class="thatlung">
                  <?php if ($rowthatlung->discount > 0 ): ?>
                  <span style="margin-top: -50px;" class="discount-price">
                    - <?php
                    echo $rowthatlung->discount;
                    ?> %
                  </span>
                  <div style="margin-top: -50px;" class="icon-theme">
                    <img style="width: 75px;height: 60px;" src="assets/frontend/images/icon-theme1.png">
                  </div>
                  
                  <?php endif ?>
                  <div class="thatlung-img">
                    <a href="products/detail/<?php echo $rowthatlung->id; ?>/<?php echo Unicode::removeUnicode($rowthatlung->name); ?>.html"><img style="object-fit:cover;" src="assets/upload/products/<?php echo $rowthatlung->photo; ?>"></a>
                  </div>
                  <div class="name-thatlung">
                    <a href="products/detail/<?php echo $rowthatlung->id; ?>/<?php echo Unicode::removeUnicode($rowthatlung->name); ?>.html"><?php
                    echo $rowthatlung->name; ?></a>
                  </div>
                  <div class="price-thatlung">
                    <span><?php echo number_format($rowthatlung->pricediscount); ?> ₫</span>
                    <?php if ($rowthatlung->discount > 0): ?>
                    - <span style="text-decoration: line-through;opacity: .5;"><?php echo number_format($rowthatlung->price); ?> ₫</span>
                    <?php
                    elseif($rowthatlung->discount == 0):
                    ?>
                    
                    <?php endif ?>
                    
                  </div>
                  <div class="icon-thatlung">
                    <ul class="product-links">
                      <li><a href="index.php?controller=products&action=rating&id=<?php echo $rowthatlung->id; ?>"><i class="fa fa-heart"></i></a></li>
                      <li><a href="products/detail/<?php echo $rowthatlung->id; ?>/<?php echo Unicode::removeUnicode($rowthatlung->name); ?>.html"><i class="fa fa-eye"></i></a></li>
                      <li><a href="index.php?controller=cart&action=create&id=<?php echo $rowthatlung->id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.owl-4').owlCarousel({
    navText : ["<i class='fa fa-long-arrow-left left-thatlung'></i>","<i class='fa fa-long-arrow-right right-thatlung'></i>"],
    margin: 10,
    nav: true,
    dots:false,
    responsive:{
    0:{
    items:1
    },
    480:{
    items:1
    },
    600:{
    items:2
    },
    1000:{
    items:2
    }
    }
    })
    });
    </script>
    <style type="text/css">
    .owl-4 .owl-nav .right-thatlung:hover
    {
    background: #ba933e;
    }
    .owl-4 .owl-nav .left-thatlung:hover
    {
    background: #ba933e;
    }
    .owl-4 .owl-nav .right-thatlung
    {
    position: absolute;
    top: 0px;
    left: -5px;
    }
    .owl-4 .owl-nav .left-thatlung
    {
    position: absolute;
    top: 0px;
    right: 510px;
    }
    .owl-4 .owl-nav i
    {
    color: black;
    font-size: 30px;
    background: white;
    width: 50px;
    line-height: 50px;
    height: 50px;
    border: 1px solid black;
    }
    .owl-4 .owl-nav
    {
    margin-top: 250px;
    }
    .owl-4
    {
    margin-left: 510px;
    }
    .thatlung:hover .icon-thatlung
    {
    top: 300px;
    opacity: 1;
    }
    .icon-thatlung
    {
    opacity: 0;
    position: absolute;
    top: 350px;
    right: 48px;
    transition: .5s ease;
    }
    .icon-thatlung ul li:hover
    {
    background: #ba933e;
    }
    .icon-thatlung ul li a
    {
    padding: 10px 12px;
    text-decoration: none;
    color: white;
    font-size: 16px;
    }
    .icon-thatlung ul li
    {
    padding: 6px 5px;
    margin-left: 2px;
    background: #333;
    }
    .icon-thatlung ul
    {
    display: flex;
    margin: 0px;
    padding: 0px;
    list-style: none;
    }
    .thatlung-img
    {
    position: relative;
    }
    .price-thatlung
    {
    margin-top: 10px;
    color: white;
    font-size: 16px;
    font-weight: bold;
    }
    .name-thatlung a:hover
    {
    color: #ba933e;
    }
    .name-thatlung a
    {
    color: white;
    font-size: 16px;
    font-weight: normal;
    text-decoration: none;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    text-decoration: none;
    }
    .name-thatlung
    {
    margin-top: 20px;
    }
    .thatlung
    {
    position: relative;
    width: 250px;
    margin-top: 50px;
    }
    .thatlung-title
    {
    margin-top: 30px;
    margin-left: 600px;
    }
    .thatlung-desc
    {
    color: #ba933e;
    font-size: 18px;
    }
    .thatlung img
    {
    object-fit: cover;
    width: 259px;
    height: 345px;
    }
    .thatlung-banner h3
    {
    font-size: 40px;
    
    }
    .thatlung-banner
    {
    color: white;
    }
    .banner-thatlung
    {
    font-family: 'Quicksand', sans-serif;
    position: relative;
    margin-top: 60px;
    background-repeat: no-repeat;
    width: 100%;
    height: 636px;
    margin-bottom: 50px;
    }
    </style>
    <!--  -->
    <!-- /content product -->
    <!-- /hot product -->
  </div>
  <?php
  $categories = $this->modelCategories();
  ?>
  <?php foreach ($categories as $itemCategories): ?>
  
  
  <!-- category-product -->
  <div id="div5" class="hot-product">
    <!-- title -->
    <?php if ($itemCategories->displayhomepage == 1): ?>
    
    
    <div class="collection">
      <div class="lable-collection">
        <h2 style="margin-top: -30px;" class="title-collection categories"><?php
        echo $itemCategories->name;
        ?></h2>
        <div class="slogan">
          <?php
          echo $itemCategories->description;
          ?>
        </div>
      </div>
    </div>
    <?php elseif($itemCategories->displayhomepage != 1): ?>
    <?php endif ?>
    <!-- title -->
    <script type="text/javascript">
    $(document).ready(function(){
    $('.owl-two').owlCarousel({
    margin:10,
    dots:false,
    autoplay:true,
    autoplayHoverPause:true,
    autoplayTimeout:3000,
    responsive:{
    0:{
    items:1
    },
    480:{
    items:1
    },
    600:{
    items:4
    },
    1000:{
    items:4
    }
    }
    })
    });
    </script>
    <!-- content product -->
    <?php
    $products = $this->modelProducts($itemCategories->id);
    ?>
    
    <div class="container">
      <div class="owl-carousel owl-two owl-theme owl-loaded">
        <?php if ($itemCategories->displayhomepage == 1): ?>
        <?php foreach ($products as $rows): ?>
        
        <div class="item">
          <div class="product-grid product-grid1" style="position:relative;">
            <?php if ($rows->discount > 0 ): ?>
            <span class="discount-price">
              - <?php
              echo $rows->discount;
              ?> %
            </span>
            <div class="icon-theme">
              <img style="width: 75px;height: 60px;" src="assets/frontend/images/icon-theme1.png">
            </div>
            <?php endif ?>
            <div class="product-image">
              <a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html" class="image">
                <img class="pic-1" style="width: 270px;height:357px;object-fit: cover;" src="assets/upload/products/<?php echo $rows->photo; ?>">
                
              </a>
              <a href="" class="product-like-icon">
                <?php if (isset($rows->hot)&&$rows->hot==1):
                ?>
                <i class="fa fa-heart"></i>
                <?php endif ?>
                
              </a>
              <ul class="product-links">
                <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>"><i class="fa fa-heart"></i></a></li>
                <li><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><i class="fa fa-eye"></i></a></li>
                <li><a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><?php
                echo $rows->name;
              ?></a></h3>
              <div class="price">
                <?php if ($rows->discount > 0): ?>
                <span class="giahientai"><?php
                  echo number_format($rows->price);
                ?> ₫</span>
                <?php
                elseif($rows->discount == 0):
                ?>
                
                <?php endif ?>
                
                <span class="price-truoc"><strong>&nbsp;<?php
                  echo number_format($rows->price - ($rows->price * $rows->discount)/100);
                ?> ₫</strong></span>
                
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
        <?php
        elseif($itemCategories->displayhomepage != 1):
        ?>
        <?php
        endif;
        ?>
      </div>
    </div>
    <style type="text/css">
    .price .giahientai
    {
    opacity: .5;
    color: #333;
    font-weight: bold;
    font-size: 14px;
    }
    .owl-carousel .owl-item p img
    {
    width: 7%;
    display: inline;
    }
    .product-grid1
    {
    height: 520px;
    }
    </style>
    
    
    
    
    <!-- /content product -->
    <!-- /category-product  -->
  </div>
  <?php endforeach ?>
  <!-- banner -->
  <div class="owl-carousel banner1 owl-theme">
    <div class="item">
      <div style="border-radius: 100px 0px;" class="banner-advertisement">
        <div class="img-banner">
          <img style="width: 600px;right: -5px;top:50px;" src="assets/frontend/images/1563871386-429396456-custom.png" alt="">
        </div>
        <div class="title">
          <div class="title-decs">
            <i class="desc-title-block-product" style="font-size: 20px; color: black; font-weight: 600;">Tại sao nên chọn</i>
            <br>
            <span>GẠCH MEN <strong>ĐỨC PHÚC 368</strong></span>
            <p>Gạch men, gạch ốp lát và thiết bị vệ sinh là dòng sản phẩm mà bất kỳ ngôi nhà nào cũng phải cần, từng dòng sản phẩm đều có những họa tiết trang trí khác nhau. Khi KH lựa chọn, sẽ nói lên tính cách của gia chủ, đồng thời sẽ tạo cho ngôi nhà đó một nét đẹp riêng.
              <br>
            Hiện nay, trên thị trường có rất nhiều dòng sản phẩm đa dạng về phong cách, phong phú về mẫu mã với những mức giá, chất lượng khác nhau. Điều đó sẽ làm cho khách hàng hoang mang và khó để tìm ra cho mình sản phẩm phù hợp. Hiểu được tâm lý đó, Gạch men Hermer đã hình thành nhằm đáp ứng mọi nhu cầu của Quý khách hàng.</p>
            
            
            <div class="item-highlight">
              <i class="fa fa-clock-o"></i>
              <div class="item-highlight-content">
                <p class="title-highlight">MIỄN PHÍ 15 NGÀY ĐỔI TRẢ</p>
                <p class="desc-highlight">Lưu ý : Sản phẩm phải còn đầy đủ thùng hộp, linh phụ kiện, hóa đơn bán hàng, phiếu bảo hàng...</p>
              </div>
            </div>
            <div class="item-highlight">
              <i class="fa fa-rocket"></i>
              <div class="item-highlight-content">
                <p class="title-highlight">MIỄN PHÍ GIAO HÀNG TRONG 24H</p>
                <p class="desc-highlight">Miễn phí giao hàng toàn nội thành Hà Nội, với đơn hàng từ 1 triệu đồng.</p>
              </div>
            </div>
            
            <div class="item-highlight">
              <i class="fa fa-shopping-bag"></i>
              <div class="item-highlight-content">
                <p class="title-highlight">THANH TOÁN KHI NHẬN HÀNG</p>
                <p class="desc-highlight">Với phương thức thanh toán này, quý khách thanh toán bằng tiền mặt cho nhân viên giao hàng ngay khi nhận được đơn hàng của mình. Chúng tôi chấp nhận hình thức thanh toán khi nhận hàng (COD) cho hầu hết đơn hàng trên toàn quốc.</p>
              </div>
            </div>
            
          </div>
        </div>
        <div class="content-advertisement">
          
        </div>
      </div>
      
    </div>
    <?php
    $sliderbottom = $this->modelSlider1();
    ?>
    <?php foreach ($sliderbottom as $rows): ?>
    <div class="item">
      <div style="border-radius: 100px 0px 100px 0px;" class="banner-advertisement">
        <img style="object-fit: cover;border-radius: 100px 0px 100px 0px;" src="assets/upload/slider/<?php echo $rows->photo; ?>">
      </div>
    </div>
    <?php endforeach ?>
  </div>
  <script type="text/javascript">
  $('.banner1').owlCarousel({
  items:1,
  margin:10,
  nav:false,
  loop:true,
  dots:false,
  autoplay:false,
  autoplayTimeout:3000,
  autoplayHoverPause:true
  });
  </script>
  <style type="text/css">
  
  </style>
  <!-- /banner -->
  <!-- news -->
  <div class="news">
    <div class="title-new">
      <!-- title -->
      <div class="collection">
        <div class="lable-collection">
          <h2 style="padding-top:20px;padding-bottom: 20px; color: black;" class="title-collection">Tin tức & Blog</h2>
          
        </div>
      </div>
      <!-- title -->
    </div>
    
    <div class="news-list">
      <div class="owl-carousel owl-theme owl-one">
        <?php
        $news = $this->modelHotNews();
        ?>
        <?php foreach ($news as $rows): ?>
        
        
        <div class="item">
          <div class="list-content">
            <div class="new-img" style="color: black;">
              <a href="news/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><img style="object-fit:cover;" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>"></a>
            </div>
            <div class="new-title">
              <div class="time">
                <i class="fa fa-clock-o"> </i>
                <?php
                echo $newTime = strftime('%H:%M - %d/%m/%Y',strtotime($rows->datetime));
                ?>
              </div>
              
              <a class="title-news" href="news/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><?php
                echo $rows->name;
              ?></a>
              <p class="new-desc"><?php echo $rows->description; ?></p>
            </div>
            
          </div>
        </div>
        <?php endforeach ?>
        
      </div>
    </div>
    <!-- /news -->
    <script type="text/javascript">
    $(document).ready(function(){
    $('.owl-one').owlCarousel({
    margin:30,
    nav:true,
    autoplay:true,
    navText : ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
    responsive:{
    0:{
    items:1
    },
    400:{
    items:1,
    margin:70,
    },
    420:{
    items:1,
    margin:70,
    },
    600:{
    items:3
    },
    1000:{
    items:3
    }
    }
    })
    });
    </script>
    <style type="text/css">
      .list-content .title-news{
        color: black;
      }
    .list-content .title-news:hover
    {
    color: #ba933e;
    }
    .owl-nav i{
    width: 26px;
    height: 28px;
    font-size: 14px;
    line-height: 26px;
    color: #acacac;
    border: 1px solid #ebebeb;
    }
    .owl-nav i:hover{
    color: white;
    background: black;
    }
    .slogan{
    margin-bottom: 30px;
    }
    .categories
    {
    
    padding-top: 50px;
    
    }
    .title-new
    {
    position: relative;
    }
    .owl-carousel .owl-nav {
    position: absolute;
    top: -60px;
    right: 0px;
    }
    .news-list
    {
    padding-bottom: 50px;
    padding-right: 30px;
    }
    </style>