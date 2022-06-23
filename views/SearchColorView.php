<?php
//load file Layout.php vao day
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="body">
    
    <div class="body-breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tìm kiếm theo màu : <?php echo $key; ?></li>
            
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
    
    <!-- --------------------------------------- -->
    <div class="main">
        <div class="left">
            <div style="height: 210px;" class="item_search-box2 price-search">
                <a style="color: #ba933e;" class="title-left">NHẬP KHOẢNG GIÁ CẦN TÌM</a>
                <div style="padding: 10px;" class="input-group">
                    <input  type="number" min="0" value="0" id="fromPrice" name="" placeholder="Thấp nhất">
                    <div style="font-family: 'Quicksand', sans-serif;font-size: 14px;padding-top: 3px;padding-bottom: 3px;margin-left: 105px;">đến</div>
                    <input type="number" min="0" value="0" id="toPrice" name="" placeholder="Cao nhất">
                    <a title="Tìm kiếm theo giá" style="color: white;margin-top: 10px;margin-left: 80px;font-size: 14px;" class="btn btn-dark submit-search" onclick="location.href = 'search/fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value+'.html';">Tìm kiếm</a>
                </div>
            </div>
            <!-- -------------------------------------------- -->
            <style type="text/css">
            .price-search a:hover
            {
            color: white;
            }
            .price-search input
            {
            width: 250px;
            font-family: 'Quicksand', sans-serif;
            font-size: 14px;
            padding: 5px 5px 5px 15px;
            }
            </style>
            <div style="height: 170px;" class="item_search-box2">
                <a style="color: #ba933e;" class="title-left">KHOẢNG GIÁ</a>
                <div class="checkbox">
                    <input  onclick="location.href='search/fromPrice=0&toPrice=200000.html'" class="" type="checkbox" id="1" name="1" value="">
                    <label for="1">Dưới 200,000 VNĐ</label><br>
                    <input  onclick="location.href='search/fromPrice=200000&toPrice=300000.html'" type="checkbox" id="2" name="2" value="">
                    <label for="2">200,000 - 300,000 VNĐ</label><br>
                    <input  onclick="location.href='search/fromPrice=300000&toPrice=400000.html'" type="checkbox" id="3" name="3" value="">
                    <label for="3">300,000 - 400,000 VNĐ</label><br>
                    <input  onclick="location.href='search/fromPrice=500000&toPrice=1000000.html'" type="checkbox" id="4" name="3" value="">
                    <label for="4">500,000 - 1,000,000 VNĐ</label><br>
                </div>
                
            </div>
            <!-- -------------------------------------------- -->
            <!-- --------------------------------------------- -->
            <!-- -------------------------------------------- -->
            <!-- --------------------------------------------- -->
            <style type="text/css">
            .color > ul > li > a:hover
            {
            background: #383838;
            color: #ba933e;
            }
            .checkbox label, .radio label
            {
            color: white;
            }
            .color > ul > li > a
            {
            font-family: 'Quicksand', sans-serif;
            color: white;
            font-size: 14px;
            padding: 5px 10px;
            border: 1px solid #ddd;
            line-height: 25px;
            }
            .panel
            {
            background: none;
            }
            .color > ul > li
            {
            list-style: none;
            float: left;
            margin: 0 10px 10px 0;
            }
            .color > ul
            {
            margin: 0px;
            padding: 0px;
            }
            </style>
            <!-- ---------------------------------------- -->
            <div style="height: 150px;" class="item_search-box3">
                <a class="title-left" style="color: #ba933e;">KÍCH CỠ</a>
                <div class="color" style="margin-top:15px;">
                    <ul>
                        <li>
                            <a href="search/size=L.html">L</a>
                        </li>
                        <li>
                            <a href="search/size=XL.html">XL</a>
                        </li>
                        <li>
                            <a href="search/size=XXL.html">XXL</a>
                        </li>
                        <li>
                            <a href="search/size=M.html">M</a>
                        </li>
                        <li>
                            <a href="search/size=S.html">S</a>
                        </li>
                        <li>
                            <a href="search/size=XS.html">XS</a>
                        </li>
                        <li>
                            <a href="search/size=XXS.html">XXS</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <style type="text/css">
            .item_search-box2 label
            {
            font-size: 15px;
            
            }
            </style>
            <div class="hot-product" style="height:900px;">
                <a style="color:white;" class="title-left" >TOP SẢN PHẨM</a>
                <div class="list-hot-product">
                    <ul>
                        <?php
                        $hotproduct = $this->modelHotProduct();
                        ?>
                        <?php foreach ($hotproduct as $hotrows): ?>
                        
                        <li>
                            <div class="product-img1">
                                <a href="products/detail/<?php echo $hotrows->id; ?>/<?php echo Unicode::removeUnicode($hotrows->name); ?>.html"><img style="object-fit: cover;" src="assets/upload/products/<?php echo $hotrows->photo; ?>" alt=""></a>
                                
                                <div class="product-hot-title">
                                    <a style="color: white;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        display: -webkit-box;"
                                        href="products/detail/<?php echo $hotrows->id; ?>/<?php echo Unicode::removeUnicode($hotrows->name); ?>.html">
                                        <?php
                                        echo $hotrows->name;
                                    ?></a>
                                    <div class="gia">
                                        <div class="price5" style="color:red;font-size: 16px;font-weight: bold;">
                                            <?php echo number_format($hotrows->price - ($hotrows->price * $hotrows->discount)/100); ?> ₫
                                            
                                        </div>
                                        <div class="price-before1" style="text-decoration: line-through;font-size: 12px;color: white;">
                                            <?php echo number_format($hotrows->price); ?> ₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------- -->
        
        <!-- righit -->
        <div class="right">
            <!-- top-right -->
            <div class="top-right">
                <div class="top-list-product">
                    <?php
                    $sosp = $this->modelTotalRecordSearchColor();
                    ?>
                    <div class="title-list-product">
                        <h2>Màu xắc : <?php echo ucfirst($key); ?></h2>
                        <h1 class="sosanpham">&nbsp; (<?php
                        echo $sosp;
                        ?> sản phẩm)</h1>
                    </div>
                    <div style="margin-top: 15px;margin-left: 600px;position: absolute;z-index: 1;" class="col-md-2 text-right">
                        <?php
                        $order = isset($_GET["order"]) ? $_GET["order"] : "";
                        ?>
                        <select class="form-control" onchange="location.href = 'color-sort-order=<?php echo $key; ?>-'+this.value+'.html';">
                            <option value="0">Sắp xếp</option>
                            <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                            <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                            <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                            <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                        </select>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 my-3">
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button style="background: none;border: 0px;outline: none;" id="list">
                                        <i style="color: black;font-size: 18px;border-right: 1px solid black;padding: 10px;" class="fa fa-th"></i>
                                        </button>
                                        <button style="background: none;border: 0px;outline: none;"  id="grid">
                                        <i style="color: black;font-size: 18px;" class="fa fa-list"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style type="text/css">
                        .icon-theme
                        {
                        position: absolute;
                        top: 0px;
                        z-index: 1;
                        left: -8px;
                        }
                        .discount-price
                        {
                        position: absolute;
                        z-index: 2;
                        left: 5px;
                        color: white;
                        top: 12px;
                        font-weight: bold;
                        left: 15px;
                        }
                        </style>
                        <?php if (($this->modelTotalRecordSearchColor()) != 0): ?>
                        <div id="products" class="row view-group">
                            <?php foreach ($data as $rows): ?>
                            <div class="item col-xs-4 col-lg-4">
                                <div class="thumbnail card list-product-content">
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
                                    <div style="height: 350px;position: relative;" class="img-event product-img " >
                                        
                                        <a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><img style="height: 350px;object-fit: cover;" class="group list-group-image img-fluid" src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" /></a>
                                    </div>
                                    <div class="caption card-body">
                                        <a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><h4 class="group card-title inner list-group-item-heading">
                                            </h4><?php
                                            echo $rows->name;
                                        ?></a>
                                        
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12">
                                                <p class="lead">
                                                <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> ₫</p>
                                            </div>
                                            <?php if ($rows->discount > 0): ?>
                                            <div class="col-xs-12">
                                                <p class="price">
                                                <?php echo number_format($rows->price)?> ₫</p>
                                            </div>
                                            <?php
                                            elseif($rows->discount == 0):
                                            ?>
                                            
                                            <?php endif ?>
                                            <div class="buy-product-btn">
                                                <div class="icon-shop">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                                
                                                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><button type="button" class="btn btn-outline-dark">CHO VÀO GIỎ HÀNG</button></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                            
                        </div>
                        <?php
                        elseif (($this->modelTotalRecordSearchColor()) == 0):
                        
                        ?>
                        <div style="text-align: center;font-size: 16px;font-family: 'Quicksand', sans-serif;color: white;">Không tìm thấy sản phẩm màu : <?php echo $key; ?></div>
                        <?php
                        endif;
                        ?>
                    </div>
                    <!-- /bottom right -->
                    <style type="text/css">
                    .product-img
                    {
                    border-radius: 5px 5px 0px 0px;
                    }
                    .buy-product-btn button
                    {
                    font-size: 13px;
                    width: 220px;
                    padding: 15px 1px 15px 30px;
                    }
                    .buy-product-btn i
                    {
                    margin-left: 5px;
                    }
                    .buy-product-btn
                    {
                    padding-bottom: 10px;
                    margin-top: -3px;
                    margin-left: 20px;
                    }
                    .price
                    {
                    color: black;
                    font-size: 14px;
                    margin-top: -40px;
                    margin-left: 90px;
                    text-decoration: line-through;
                    }
                    .caption a
                    {
                    
                    font-size: 16px;
                    font-family: 'Quicksand', sans-serif;
                    text-decoration: none;
                    color: #ba933e;
                    font-weight: bold;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    -webkit-line-clamp: 1;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    }
                    .lead
                    {
                    padding-top: 5px;
                    color: red;
                    font-size: 18px;
                    font-family: 'Quicksand', sans-serif;
                    font-weight: bold;
                    }
                    .list-group-item-text
                    {
                    font-size: 13px;
                    font-family: 'Quicksand', sans-serif;
                    color: #333;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    -webkit-line-clamp: 3;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    
                    }
                    .view-group {
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-direction: row;
                    flex-direction: row;
                    padding-left: 0;
                    margin-bottom: 0;
                    }
                    .thumbnail
                    {
                    margin-bottom: 30px;
                    padding: 0px;
                    -webkit-border-radius: 0px;
                    -moz-border-radius: 0px;
                    border-radius: 5px 5px 0px 0px;
                    }
                    .thumbnail img
                    {
                    border-radius: 5px 5px 0px 0px;
                    }
                    .item.list-group-item
                    {
                    background: none !important;
                    float: none;
                    margin-bottom: 30px;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                    padding: 0 1rem;
                    border: 0;
                    }
                    .item.list-group-item .img-event {
                    float: left;
                    width: 30%;
                    }
                    .item.list-group-item .list-group-image
                    {
                    margin-right: 10px;
                    }
                    .item.list-group-item .thumbnail
                    {
                    margin-bottom: 0px;
                    display: inline-block;
                    width: 100%;
                    
                    }
                    .item.list-group-item .caption
                    {
                    float: left;
                    width: 70%;
                    margin: 0;
                    }
                    .item.list-group-item:before, .item.list-group-item:after
                    {
                    display: table;
                    content: " ";
                    }
                    .item.list-group-item:after
                    {
                    clear: both;
                    }
                    </style>
                    <script type="text/javascript">
                    $(document).ready(function() {
                    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
                    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
                    });
                    </script>
                    <?php if (($this->modelTotalRecordSearchColor()) != 0): ?>
                    <div class="number-page">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="pull-right">
                                    <ul class="pagination">
                                        <li class="page-item"><span>Trang</span></li>
                                        <?php
                                        $page = isset($_GET["p"])? $_GET["p"]:0;
                                        
                                        ?>
                                        <?php for($i = 1; $i <= $numPage; $i++): ?>
                                        <li class="page-item">
                                            <?php if($page == $i): ?>
                                            <a style="background:#6c757d;color: white;" class="page-link" href="color/page=<?php echo $key; ?>-<?php echo $i; ?>.html"><?php echo $i; ?></a>
                                            <?php elseif($page != $i): ?>
                                            <a class="page-link" href="color/page=<?php echo $key; ?>-<?php echo $i; ?>.html"><?php echo $i; ?></a>
                                            <?php endif ?>
                                        </li>
                                        <?php endfor; ?>
                                        
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                    <?php elseif(($this->modelTotalRecordSearchColor()) == 0): ?>
                    <div class="number-page"></div>
                    <?php
                    endif;
                    ?>
                    <!-- /list-product -->
                </div>
                <!-- bottom right -->
                
            </div>
            <!-- /main -->