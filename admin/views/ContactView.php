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
                    <div class="table-responsive">
                        <div class="card card-info">
                            <div class="card-header">
                                <h1 style="font-size:16px" class="card-title">Danh sách liên hệ</h1>
                            </div>
                            
                            <table class="table table-bordered table-hover">
                                
                                <thead class="thead-light">
                                    <th style="width:200px;">Tên liên hệ</th>
                                    <th>Tiêu đề</th>
                                    <th style="width: 150px;">Trạng thái</th>
                                    <th style="width: 150px;text-align: center;"></th>
                                    <th style="width: 150px;text-align: center;"></th>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $rows): ?>
                                    <tr>
                                        <?php if ($rows->readed == 1): ?>
                                        <td>
                                            
                                            <?php
                                            echo $rows->name;
                                            ?>
                                            
                                        </td>
                                        <?php elseif($rows->readed == 0): ?>
                                        <td style="background:#ddd;border-right: 1px solid white;">
                                            
                                            <?php
                                            echo $rows->name;
                                            ?>
                                            
                                        </td>
                                        <?php endif ?>
                                        
                                        <!--  -->
                                        <?php if ($rows->readed == 1): ?>
                                        <td>
                                            
                                            <?php
                                            echo $rows->tieude;
                                            ?>
                                            
                                        </td>
                                        <?php elseif($rows->readed == 0): ?>
                                        
                                        <td style="background:#ddd;border-right: 1px solid white;">
                                            
                                            <?php
                                            echo $rows->tieude;
                                            ?>
                                            
                                        </td>
                                        <?php endif ?>
                                        <!--  -->
                                        <!--  -->
                                        <?php if ($rows->readed == 1): ?>
                                        <td>
                                            
                                            <?php
                                            echo "Đã đọc";
                                            ?>
                                            
                                        </td>
                                        <?php elseif($rows->readed == 0): ?>
                                        <td style="background:#ddd;border-right: 1px solid white;">
                                            
                                            <?php
                                            echo "Chưa đọc";
                                            ?>
                                            
                                        </td>
                                        <?php endif ?>
                                        <!--  -->
                                        
                                        <?php if ($rows->readed == 1): ?>
                                        <td>
                                            
                                            <a href="contact/<?php echo $rows->id; ?>.html" class="badge badge-info">Chi tiết</a>
                                        </td>
                                        <?php elseif($rows->readed == 0): ?>
                                        <td style="background:#ddd;border-right: 1px solid white;">
                                            
                                            <a href="contact/<?php echo $rows->id; ?>.html" class="badge badge-secondary">Chi tiết</a>
                                            
                                        </td>
                                        <?php endif ?>
                                        
                                        <?php if ($rows->readed == 1): ?>
                                        <td style="text-align:center;">
                                            
                                            <a href="index.php?controller=contacts&action=delete&id=<?php echo $rows->id; ?>"onclick="return window.confirm('Are you sure?');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></a>
                                        </td>
                                        <?php elseif($rows->readed == 0): ?>
                                        <td style="background:#ddd;border-right: 1px solid white;text-align: center;">
                                            
                                            <a href="index.php?controller=contacts&action=delete&id=<?php echo $rows->id; ?>"onclick="return window.confirm('Are you sure?');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></a>
                                            
                                        </td>
                                        <?php endif ?>
                                        
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
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=contacts&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                    </li>
                                    <?php elseif($numPage <= $page): ?>
                                    <li class="page-item">
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=contacts&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                    </li>
                                    <?php endif ?>
                                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                                    <li class="page-item">
                                        <?php if($page == $i): ?>
                                        <a style="background:#6c757d;color: white;" href="contacts&page-<?php echo $i; ?>.html" class="page-link" ><?php echo $i; ?></a>
                                        <?php elseif($page != $i): ?>
                                        <a href="contacts&page-<?php echo $i; ?>.html" class="page-link" style="color: #6c757d;"><?php echo $i; ?></a>
                                        <?php endif ?>
                                    </li>
                                    <?php endfor; ?>
                                    <?php if ($numPage == $page): ?>
                                    <li class="page-item disabled">
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=contacts&p=<?php echo $pre = $page + 1; ?>">Sau</a>
                                    </li>
                                    <?php elseif($numPage != $page): ?>
                                    <li class="page-item">
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=contacts&p=<?php echo $pre = $page + 1; ?>">Sau</a>
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