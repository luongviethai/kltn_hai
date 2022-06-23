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
                        <a href="categories-create.html" class="btn btn-primary">Thêm mới danh mục sản phẩm</a>
                    </div>
                    <div class="table-responsive">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h1 style="font-size:16px" class="card-title">Danh sách danh mục sản phẩm</h1>
                            </div>
                            
                            <table class="table table-bordered table-hover">
                                
                                <thead class="thead-light">
                                    
                                    <th style="width: 200px;">Tên danh mục</th>
                                    <th>Miêu tả danh mục</th>
                                    <th style="width: 200px;">Hiển thị màn hình chính</th>
                                    <th style="width: 100px;text-align: center;">Chỉnh sửa</th>
                                    <th style="width: 100px;text-align: center;">Xóa</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $rows): ?>
                                    <tr>
                                        <td><?php
                                            echo $rows->name;
                                        ?></td>
                                        <td><?php
                                            echo $rows->description;
                                        ?></td>
                                        <td style="text-align:center;"> <?php
                                            if(isset($rows->displayhomepage)&& $rows->displayhomepage == 1):
                                            ?>
                                            <span class="fa fa-check"></span>
                                            <?php
                                            endif;
                                        ?></td>
                                        <td style="text-align: center;"><a href="categories/<?php echo $rows->id; ?>.html"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-edit"></span></button></p></a></td>
                                        <td style="text-align:center;"><a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>"onclick="return window.confirm('Are you sure?');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></a></td>
                                    </tr>
                                    <?php
                                    $categoriesSub = $this->modelCategoriesSub($rows->id);
                                    ?>
                                    <?php foreach ($categoriesSub as $rowsSub): ?>
                                    <tr>
                                        <td style="padding-left: 25px"><?php echo $rowsSub->name; ?></td>
                                        <td style="padding-left: 25px"><?php echo $rowsSub->description; ?></td>
                                        <td style="text-align:center;"> <?php
                                            if(isset($rowsSub->displayhomepage)&& $rowsSub->displayhomepage == 1):
                                            ?>
                                            <span class="fa fa-check"></span>
                                            <?php
                                            endif;
                                        ?></td>
                                        <td style="text-align: center;"><a href="categories/<?php echo $rowsSub->id; ?>.html"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-edit"></span></button></p></a></td>
                                        <td style="text-align:center;"><a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>"onclick="return window.confirm('Are you sure?');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></a></td>
                                    </tr>
                                    <?php endforeach ?>
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
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=categories&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                    </li>
                                    <?php elseif($numPage <= $page): ?>
                                    <li class="page-item">
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=categories&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                    </li>
                                    <?php endif ?>
                                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                                    <li class="page-item">
                                        <?php if($page == $i): ?>
                                        <a style="background:#6c757d;color: white;" href="categories&page-<?php echo $i; ?>.html" class="page-link" ><?php echo $i; ?></a>
                                        <?php elseif($page != $i): ?>
                                        <a href="categories&page-<?php echo $i; ?>.html" class="page-link" style="color: #6c757d;"><?php echo $i; ?></a>
                                        <?php endif ?>
                                    </li>
                                    <?php endfor; ?>
                                    <li class="page-item">
                                        <?php if ($numPage == $page): ?>
                                        <li class="page-item disabled">
                                            <a class="page-link" style="color: #6c757d;" href="index.php?controller=categories&p=<?php echo $pre = $page + 1; ?>">Sau</a>
                                        </li>
                                        <?php elseif($numPage != $page): ?>
                                        <li class="page-item">
                                            <a class="page-link" style="color: #6c757d;" href="index.php?controller=categories&p=<?php echo $pre = $page + 1; ?>">Sau</a>
                                        </li>
                                        <?php endif ?>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>