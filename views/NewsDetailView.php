<?php
$this->fileLayout = "LayoutTrangTrong.php";
    
?>
<div class="body">
    
    <div class="body-breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="home.html">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="news.html">Tin tức</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php
                echo $record->name;
            ?></li>
            
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
    
    <div class="main">
        <!-- --------------------------------------- -->
        <?php
        $news = $this->modelHotNews();
        ?>
        <div class="left">
            
            <div class="item_search-box">
                <a class="title-left" style="color: #ba933e;">TÌM KIẾM TIN TỨC</a>
                <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
            </div>
            <div style="border: none;" class="item_search-box">
                <a class="title-left" style="color: #ba933e;;">TIN LIÊN QUAN</a>
                <div class="list-hot-product">
                    <ul style="padding-top: 5px;">
                        
                        <?php foreach ($news as $rownews): ?>
                        
                        
                        <li style="">
                            <div class="product-img1">
                                <a href="news/detail/<?php echo $rownews->id; ?>/<?php echo Unicode::removeUnicode($rownews->name); ?>.html"><img style="width:110px ;height: 80px;object-fit:cover;" src="assets/upload/news/<?php echo $rownews->photo; ?>" alt=""></a>
                                
                                <div class="product-hot-title">
                                    <a style="
                                        
                                        line-height: 20px;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        display: -webkit-box;"
                                        href="news/detail/<?php echo $rownews->id; ?>/<?php echo Unicode::removeUnicode($rownews->name); ?>.html"><?php
                                        echo $rownews->name;
                                        ?>
                                    </a>
                                    <div class="gia">
                                        <div class="price-before1" style="font-size: 10px;margin-top: -12px;color: white;">
                                            <?php
                                            echo date("m/d/Y",strtotime($rownews->datetime));
                                            ?>
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
        <div style="padding-bottom: 50px;" class="right">
            <!-- top-right -->
            <div class="top-right">
                
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <div class="detail-post">
                                <div class="box-detail-post top-post">
                                    <p>
                                        <img src="assets/upload/news/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>">
                                    </p>
                                    <h2 class="title-blogs-item">
                                    <strong><?php
                                    echo $record->name;
                                    ?></strong>
                                    </h2>
                                    <p class="more-blogs">
                                        <span  class="time">
                                            <i style="color:white;" class="fa fa-clock-o" aria-hidden="true"></i>
                                        </span>
                                        <span style=" font-family: 'Quicksand', sans-serif;font-size: 13px;color: white;"><?php
                                            echo date("H:i:s - d/m/Y",strtotime($record->datetime));
                                        ?></span>
                                    </p>
                                </div>
                                <?php
                                $newsssss = $this->modelHotNews1();
                                ?>
                                <div class="link-lien-quan">
                                    <?php foreach ($newsssss as $rowsssss): ?>
                                    
                                    
                                    <a style="text-decoration:none;" href="news/detail/<?php echo $rowsssss->id; ?>/<?php echo Unicode::removeUnicode($rowsssss->name); ?>.html"><i class="fa fa-angle-double-right"></i> <?php
                                        echo $rowsssss->name;
                                    ?></a><br>
                                    
                                    <?php endforeach ?>
                                </div>
                                <div style="padding-bottom: 15px;font-weight: 700;" class="short_intro">
                                    <?php
                                    echo $record->description;
                                    ?>
                                </div>
                                <div class="short_intro ckediter">
                                    <?php
                                    echo $record->content;
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <style type="text/css">
                .product-hot-title a:hover
                {
                color: #ba933e !important;
                }
                .product-hot-title a
                {
                color: white !important;
                }
                .top-post img
                {
                width: 847.5px;height:565px;object-fit:cover;
                }
                .list-hot-product>ul>li
                {
                margin: 0px;padding: 0px;padding-bottom: 10px;padding-top: 10px;border-bottom: 1px solid #ddd;
                }
                .list-hot-product>ul>li:last-child{
                
                    border-bottom: 0px;
                }
                    .top-right img
                        {
                    width: 100%;
                        }
                .short_intro p img
                {
                width: 100%;
                }
                .short_intro
                {
                font-family: 'Quicksand', sans-serif;
                font-size: 14px;
                color: white;
                }
                .detail-post
                {
                    width: 135%;
                }
                .link-lien-quan a
                {
                    font-family: 'Quicksand', sans-serif;
                    color: white !important;
                padding: 3px 0;
                font-size: 14px;
                color: #888;
                line-height: 30px;
                }
                .link-lien-quan a:hover
                {
                color: #ba933e !important;
                }
                .link-lien-quan
                {
                    padding-top: 10px;
                    border-bottom: 1px dashed #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
                }
                .top-post
                {
                    border-bottom: 1px dashed #ddd;
                }
                .more-blogs
                {
                    padding-top: 10px;
                }
                .more-blogs i
                {
                    color: #989898;
                font-size: 14px;
                    
                }
                .title-blogs-item{
                    font-family: 'Quicksand', sans-serif;
                display: inline-block;
                margin: 0;
                color: white;
                font-size: 30px;
                font-weight: bold;
                }
                .row{
                margin-left: -31px;
                margin-right: -31px;
                }
                </style>
                <!-- /list-product -->
            </div>
            <!-- bottom right -->
            
        </div>
        <!-- /main -->