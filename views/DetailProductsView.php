<?php
$this->fileLayout = "LayoutDetail.php";
?>
<div class="body">
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
    color: #007bff;
    font-family: 'Quicksand', sans-serif;
    text-decoration: none;
    }
    .breadcrumb-item.active
    {
    color: black;
    opacity: 0.7;
    }
    </style>
    
    <?php
    $categories = $this->modelGetCategory($record->category_id);
    ?>
    <div class="body-breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="home.html">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="products/subcategory/<?php echo $categories->id ?>/<?php     
            echo $categories->name; ?>.html">
                <?php
                echo isset($categories->name) ? $categories->name:"";
            ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php
                echo $record->name;
            ?></li>
            
        </ol>
    </div>
    <!--  -->
    <div class="container">
        <!-- top detail product -->
        <div class="detail-product">
            <div class="top-detail-product">
                <div class="left-top-detail-product">
                    <div class="easyzoom easyzoom--overlay">
                        
                        <img id="img-show" src="assets/upload/products/<?php echo $record->photo; ?>" alt="">
                    </div>
                    <div class="thum-detail-product">
                        <a ><img id="img1" onclick="changeImage('img1')"; src="assets/upload/products/<?php echo $record->photo; ?>" alt=""></a>
                        <a ><img id="img2" onclick="changeImage('img2')"; src="assets/upload/products/<?php echo $record->img1; ?>" alt=""></a>
                        <a ><img id="img3" onclick="changeImage('img3')"; src="assets/upload/products/<?php echo $record->img2; ?>" alt=""></a>
                    </div>
                </div>
                <script type="text/javascript">
                function changeImage(imgID)
                    {
                        //lấy giá trị của thẻ html có id = imgID
                        var srcImg = document.getElementById(imgID).getAttribute("src");
                        resetBorder();
                        //tác động vào thẻ html có id = imgshow, thay đổi giá trị src
                        document.getElementById("img-show").setAttribute("src",srcImg);
                        document.getElementById(imgID).setAttribute("style","border:1px solid #d27474;");
                    }
                    function resetBorder(){
                        document.getElementById("img1").removeAttribute("style");
                        document.getElementById("img2").removeAttribute("style");
                        document.getElementById("img3").removeAttribute("style");
                    }
                    
                </script>
                <!--  -->
                <div class="right-top-detail-product">
                    <div class="detail-product-title" style="color:black;">
                        <?php
                        echo $record->name;
                        ?>
                    </div>
                    <div class="detail-product-desc" style="color:black;">
                        <?php
                        echo $record->shortdescription;
                        ?>
                    </div>
                    <div class="characteristic" style="color:black;">
                        <ul>
                            <li>
                                <?php
                                echo $record->description;
                                ?>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="product-price-before">
                        <span  style="margin-left: -1px;color: #d27474;font-size: 2em;" class="price-hientai"><?php
                            echo number_format($record->price - ($record->price * $record->discount)/100);
                        ?> ₫</span>
                        <?php if ($record->discount > 0): ?>
                        <span style="margin-left: 10px;color:black;" class="price-before1"><?php
                            echo number_format($record->price);
                        ?> ₫</span>
                        
                        <?php elseif($record->discount == 0): ?>
                        <?php endif ?>
                        
                        
                    </div>
                    <div class="color-product-detail" style="color: black;">
                        Màu sắc: <strong>&nbsp;&nbsp;<?php
                        echo $record->color;
                        ?></strong>
                    </div>
                    <div class="color-product-detail" style="color: black;">
                        Chất Liệu: <strong>&nbsp;&nbsp;<?php
                        echo $record->material;
                        ?></strong>
                    </div>
                    
                    <div class="color-product-detail" style="color: black;">
                        Xuất xứ: <strong>&nbsp;&nbsp;<?php
                        echo $record->madein;
                        ?></strong>
                    </div>
                    <div class="color-product-detail" style="color: black;">
                        Kích thước: <strong>&nbsp;&nbsp;<?php
                        echo $record->size;
                        ?></strong>
                    </div>
                    
                    
                    <form action="index.php?controller=cart&action=create1&id=<?php echo $record->id; ?>" method="post">
                        <div class="number">
                            <div class="soluong" style="color: black;">
                                Số lượng :
                            </div>
                            <div class="group-btn1">
                                <button class="btn-tru">-</button>
                            </div>
                            <div class="nhap-soluong">
                                <input type="text" id="text" min="1" class="input-control" value="1" name="number0510">
                            </div>
                            <div class="group-btn">
                                <button class="btn-cong">+</button>
                            </div>
                            
                            <button class="btn-number" type="submit" class="btn btn-default"><i style="font-size: 18px;margin-left: -5px;margin-top: -2px;" class="fa fa-shopping-cart"></i><strong style="margin-left: 25px;font-family: 'Quicksand', sans-serif;">ĐẶT HÀNG</strong></button>
                            <style type="text/css">
                            .btn-number:hover
                            {
                            background: #ba933e;
                            }
                            .btn-number
                            {
                            margin-top: -5px;margin-left: 20px;color: black;font-size: 16px;border-radius: 0px;width: 136px;height: 46px;
                            border: 0px;
                            background:black;
                            }
                            </style>
                            
                            
                            
                        </div>
                    </form>
                    <div style="margin-top:30px;font-family: 'Quicksand', sans-serif;" class="rating">
                        <p><strong style="font-size: 12px;color: black;">RATING : </strong>&nbsp;&nbsp;&nbsp;<i style="font-size:20px;color: #d27474" class="fa fa-heart"></i>&nbsp;<span style="font-size:16px;color: black;"> + <?php echo $this->modelGetStar($record->id); ?> cho sản phẩm này ^^</span></p>
                    </div>
                    <div class="share">
                        <p class="share-title" style="color: black;">SHARE : </p>
                        <a href="https://www.facebook.com/Arceus99/"><i class="fa fa-facebook"></i></a>
                        <a href="twiter"><i class="fa fa-twitter"></i></a>
                        <a href="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                    
                </div>
            </div>
            <script type="text/javascript">
            // jquery hoạt động bên trong tag sau
            $(document).ready(function(){
            $('#slideToggle').click(function(){
                $('#img-content').slideDown();
            });
            $('#slideToggle1').click(function(){
                $('#img-content1').slideDown();
            });
            });
            </script>
            <!-- /top detail -->
            <!-- bottom detail -->
            <div class="bottom-detail">
                <div class="desc-detail">
                    <h2 style="color: black;">MÔ TẢ SẢN PHẨM</h2>
                    
                    <div  id="img-content" class="content-detail">
                        <div class="hinhminhhoa">
                            <img style="object-fit:cover;" src="assets/upload/products/<?php echo $record->photo; ?>" alt="">
                        </div>
                        <div class="content-desc-bottom-detail" style="margin-top: 50px;color:black">
                            <p class="huongdanbaoquan" ></p>
                            <h1 style="color: black;">
                            <?php echo $record->content;
                            ?>
                            </h1>
                        </div>
                    </div>
                </div>
                
                <div class="comment">
                    <h2 style="color: black;">BÌNH LUẬN</h2>
                    <div style="margin-top: 10px;" class="fb-comments" data-href="http://hermer.byethost7.com/" data-width="1100" data-numposts="5"></div>
                </div>
                
                <!-- mô tả -->
            </div>
            
            
            <!-- / bottom detail -->
            <div class="hot-detail-product">
                <div style="font-family: 'Dancing Script';color: black;" class="hot-detail-product-title">
                    Sản phẩm nổi bật
                </div>
                <script type="text/javascript">
                $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                loop:true,
                margin:30,
                dots: false,
                responsive:{
                0:{
                items:1
                },
                420:{
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
                
                <div class="list-hot-product-detail">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $producthot = $this->modelHotProduct()
                        ?>
                        <?php foreach ($producthot as $hotrows): ?>
                        
                        
                        
                        <div class="item">
                            <div style="width: 98%;" class="content-product-detail-bottom">
                                
                                
                                <div class="img-list-detail">
                                    <a href="products/detail/<?php echo $hotrows->id; ?>/<?php echo Unicode::removeUnicode($hotrows->name); ?>.html"><img style="object-fit: cover;" src="assets/upload/products/<?php echo $hotrows->photo; ?>" alt=""></a>
                                </div>
                                <div class="content-list-detail">
                                    
                                    
                                    <div class="hot-product-title-detail">
                                        <a style="color: black;" href="products/detail/<?php echo $hotrows->id; ?>/<?php echo Unicode::removeUnicode($hotrows->name); ?>.html"><?php
                                            echo $hotrows->name;
                                        ?></a>
                                    </div>
                                    <div class="price-hot-product-detail">
                                        <span class="price-detail-hot-before" style="color: black;"><?php
                                            echo number_format($hotrows->price);
                                        ?> ₫</span>
                                        <span class="price-detail-hot"><?php echo number_format($hotrows->price - ($hotrows->price * $hotrows->discount)/100); ?> ₫</span>
                                    </div>
                                    <div class="themvaogiohang">
                                        <a href="index.php?controller=cart&action=create&id=<?php echo $hotrows->id; ?>">THÊM VÀO GIỎ HÀNG</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /hot product -->
        <div class="branches">
            <div class="slide">
                <img style="object-fit: contain;" id="img-show1" src="assets/frontend/branches/branches1.png" alt="">
                <img style="object-fit: contain;" id="img-show2" src="assets/frontend/branches/branches2.png" alt="">
                <img style="object-fit: contain;" id="img-show3" src="assets/frontend/branches/branches3.png" alt="">
                <img style="object-fit: contain;" id="img-show4" src="assets/frontend/branches/branches4.png" alt="">
                <img style="object-fit: contain;" id="img-show5" src="assets/frontend/branches/branches5.png" alt="">
            </div>
        </div>
        <script type="text/javascript">
            
        var slide1 = new Array();
        slide1[0] = "assets/frontend/branches/branches1.png";
        slide1[1] = "assets/frontend/branches/branches6.png";
        var slide2 = new Array();
        slide2[0] = "assets/frontend/branches/branches2.png";
        slide2[1] = "assets/frontend/branches/branches7.png";
        
        var slide3 = new Array();
        slide3[0] = "assets/frontend/branches/branches3.png";
        slide3[1] = "assets/frontend/branches/branches8.png";
        var slide4 = new Array();
        slide4[0] = "assets/frontend/branches/branches4.png";
        slide4[1] = "assets/frontend/branches/branches9.png";
        
        var slide5 = new Array();
        slide5[0] = "assets/frontend/branches/branches5.png";
        slide5[1] = "assets/frontend/branches/branches10.png";
        
        
        //khai báo biến n lưu vị trí của ảnh
        n = 0;
        //phát hiện sự kiện click của thẻ html có id = next
        
        setInterval(function(){
        $("#img-show1").fadeOut(function()
        {
        n++;
        if(n == slide1.length )
        n = 0;
        // thay đổi giá trị của thuộc tính src của id = img-show
        document.getElementById("img-show1").setAttribute("src",slide1[n]);
        $("#img-show1").fadeIn();
        });
        
        $("#img-show2").fadeOut(function()
        {
        n++;
        if(n == slide2.length )
        n = 0;
        // thay đổi giá trị của thuộc tính src của id = img-show
        document.getElementById("img-show2").setAttribute("src",slide2[n]);
        $("#img-show2").fadeIn();
        });
        
        
        
        $("#img-show3").fadeOut(function()
        {
        n++;
        if(n == slide3.length )
        n = 0;
        // thay đổi giá trị của thuộc tính src của id = img-show
        document.getElementById("img-show3").setAttribute("src",slide3[n]);
        $("#img-show3").fadeIn();
        });
        
        
        $("#img-show4").fadeOut(function()
        {
        n++;
        if(n == slide4.length )
        n = 0;
        // thay đổi giá trị của thuộc tính src của id = img-show
        document.getElementById("img-show4").setAttribute("src",slide4[n]);
        $("#img-show4").fadeIn();
        });
        
        
        
        $("#img-show5").fadeOut(function()
        {
        n++;
        if(n == slide5.length )
        n = 0;
        // thay đổi giá trị của thuộc tính src của id = img-show
        document.getElementById("img-show5").setAttribute("src",slide5[n]);
        $("#img-show5").fadeIn();
        });
        
        
        
        },5000);
        
        
        
        </script>
        <!-- end body -->
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
var quantitiy=0;
$('.btn-cong').click(function(e){


e.preventDefault();

var quantity = parseInt($('#text').val());



$('#text').val(quantity + 1);

// Increment

});
$('.btn-tru').click(function(e){

e.preventDefault();

var quantity = parseInt($('#text').val());




if(quantity>0){
$('#text').val(quantity - 1);
}
});

});
</script>