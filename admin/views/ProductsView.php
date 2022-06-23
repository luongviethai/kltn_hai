<?php
$this->fileLayout = "Layout.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gạch men - Đức Phúc 368</title>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                
                
                <div class="col-md-12">
                    <div style="padding-bottom: 10px;">
                        <a href="products-create.html" class="btn btn-secondary">Thêm mới sản phẩm</a>
                    </div>
                    <div class="table-responsive">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h1 style="font-size:16px" class="card-title">Danh sách sản phẩm</h1>
                            </div>
                            
                            <table class="table table-bordered table-hover">
                                
                                <thead class="thead-light">
                                    
                                    <th style="width: 150px;">Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Màu sắc</th>
                                    <th>Chất liệu</th>
                                    <th style="width: 150px;">Nơi sản xuất</th>
                                    <th>Kích cỡ</th>
                                    <th style="width: 100px;">Giá</th>
                                    
                                    <th style="width: 120px;">Giảm giá (%)</th>
                                    <th style="width: 150px;">Giá sau khi giảm</th>
                                    <th style="width: 150px;">Danh mục</th>
                                    <th style="width:50px;">Hot</th>
                                    <th style="width:50px;"></th>
                                    <th style="width:50px;"></th>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $rows): ?>
                                    <tr>
                                        <td>
                                            <?php
                                            if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)):
                                            ?>
                                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 100px;" alt="">
                                            <?php
                                            endif;
                                            ?>
                                        </td>
                                        <td><?php echo $rows->name; ?></td>
                                        <td><?php echo $rows->color; ?></td>
                                        <td><?php echo $rows->material; ?></td>
                                        <td><?php echo $rows->madein; ?></td>
                                        <td><?php echo $rows->size; ?></td>
                                        <td><?php echo number_format($rows->price); ?> ₫</td>
                                        
                                        <td><?php echo number_format($rows->discount); ?></td>
                                        <td><?php echo number_format($rows->pricediscount); ?> ₫</td>
                                        <td>
                                            <?php
                                            $conn = Connection::getInstance();
                                            $query = $conn->query("select name from categories where id=$rows->category_id");
                                            $categori = $query->fetch();
                                            echo isset($categori->name) == true ? $categori->name:"";
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if(isset($rows->hot)&& $rows->hot == 1):
                                            ?>
                                            <span class="fa fa-check"></span>
                                            <?php
                                            endif;
                                            ?>
                                            <td style="text-align: center;">
                                                <a href="products/<?php echo $rows->id; ?>.html"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-edit"></span></button></p></a></td>
                                                <td style="text-align:center;"><a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>"onclick="return window.confirm('Are you sure?');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></a></td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        
                                    </table>
                                    
                                    <nav aria-label="Page" style="padding-right: 20px;">
                                        <ul class="pagination justify-content-end">
                                            <?php
                                            $page = isset($_GET["p"])? $_GET["p"]:0;
                                            
                                            ?>
                                            <?php if ($numPage > $page): ?>
                                            <li class="page-item disabled">
                                                <a class="page-link" style="color: #6c757d;" href="index.php?controller=products&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                            </li>
                                            <?php elseif($numPage <= $page): ?>
                                            <li class="page-item">
                                                <a class="page-link" style="color: #6c757d;" href="index.php?controller=products&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                            </li>
                                            <?php endif ?>
                                            <?php for($i = 1; $i <= $numPage; $i++): ?>
                                            <li class="page-item">
                                                <?php if($page == $i): ?>
                                                <a style="background:#6c757d;color: white;" href="products&page-<?php echo $i; ?>.html" class="page-link" ><?php echo $i; ?></a>
                                                <?php elseif($page != $i): ?>
                                                <a href="products&page-<?php echo $i; ?>.html" class="page-link" style="color: #6c757d;"><?php echo $i; ?></a>
                                                <?php endif ?>
                                            </li>
                                            <?php endfor; ?>
                                            <?php if ($numPage == $page): ?>
                                            <li class="page-item disabled">
                                                <a class="page-link" style="color: #6c757d;" href="index.php?controller=products&p=<?php echo $pre = $page + 1; ?>">Sau</a>
                                            </li>
                                            <?php elseif($numPage != $page): ?>
                                            <li class="page-item">
                                                <a class="page-link" style="color: #6c757d;" href="index.php?controller=products&p=<?php echo $pre = $page + 1; ?>">Sau</a>
                                            </li>
                                            <?php endif ?>
                                            
                                        </ul>
                                    </nav>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        </html>