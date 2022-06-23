<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="body">
    
    <div class="body-breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="home.html">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
            
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
            
            <div class="item_search-box">
                <a class="title-left" style="color: #ba933e;">TÌM KIẾM TIN TỨC</a>
                <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
            </div>
        </div>
        <!-- -------------------------------------------- -->
        
        <!-- righit -->
        <div class="right">
            <!-- top-right -->
            <div class="top-right">
                <div class="top-list-product">
                    
                    <div class="title-list-product">
                        <h2>TIN TỨC</h2>
                        
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 my-3">
                                <div class="pull-right">
                                    <div style="font-size: 12px;" class="btn-group">
                                        Tin tức
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($data as $rows): ?>
                            
                            <div class="col-lg-6 col-md-6">
                                <div  class="item-blog">
                                    <div class="img-blogs">
                                        <a class="img-news" href="news/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"> <img style="object-fit:cover;" src="assets/upload/news/<?php echo $rows->photo; ?>"> </a>
                                    </div>
                                    <div class="info">
                                        <p class="more-blogs">
                                            <span class="time">
                                                <i style="" class="fa fa-clock-o"> <?php
                                                echo date("d/m/Y",strtotime($rows->datetime));
                                                ?> </i>
                                            </span>
                                        </p>
                                        
                                        <a class="title-blogs-item" href="news/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>.html"><?php
                                            echo $rows->name;
                                        ?></a>
                                        <div class="new-desc">
                                            <p>
                                                <?php
                                                echo $rows->description;
                                                ?>
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                            
                            
                        </div>
                    </div>
                    <style type="text/css">
                    .panel
                    {
                    background: none;
                    }
                    .new-desc
                    {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    display: -webkit-box;
                    font-size: 13px;
                    color: white;
                    text-align: justify;
                    line-height: 20px;
                    width: 99%;
                    margin-top: -20px;
                    }
                    .new-desc p
                    {
                    
                    
                    }
                    .info a
                    {
                    line-height: 30px;
                    font-family: 'Quicksand', sans-serif;
                    }
                    .more-blogs
                    {
                    line-height: 30px;
                    }
                    .time i
                    {
                    font-size: 12px;
                    color: white;
                    }
                    .item-blogs .desc-blogs {
                    margin-bottom: 10px;
                    color: #585858;
                    overflow: hidden;
                    text-align: justify;
                    }
                    .info a:hover
                    {
                    color: #ba933e;
                    }
                    .info a
                    {
                    font-size: 16px;
                    color: white;
                    text-decoration: none;
                    font-weight: 600;
                    }
                    .info a
                    {
                    height: auto !important;
                    width: 99%;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: inline-block;
                    margin: 0;
                    }
                    .img-blogs img
                    {
                    height: 200px;
                    width: 100%;
                    object-fit: cover;
                    }
                    .img-blogs a
                    {
                    display: block;
                    width: 100%;
                    }
                    }
                    .img-blogs
                    {
                    margin-right: 20px;
                    margin-bottom: 15px;
                    text-align: center;
                    max-height: 200px;
                    overflow: hidden;
                    justify-content: center;
                    }
                    .item-blog
                    {
                    margin-bottom: 30px;
                    height: 370px;
                    
                    }
                    .row{
                    margin-left: -31px;
                    margin-right: -31px;
                    }
                    </style>
                    
                    <div class="number-page">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="pull-right">
                                    <ul class="pagination">
                                        <li class="page-item"><span>Trang</span></li>
                                        <?php for($i = 1; $i <= $numPage; $i++): ?>
                                        <li class="page-item"><a class="page-link" href="news/page=<?php echo $i; ?>.html"><?php echo $i; ?></a></li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- /list-product -->
                </div>
                <!-- bottom right -->
                
            </div>
            <!-- /main -->