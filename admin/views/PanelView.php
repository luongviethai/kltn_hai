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
                        <div class="card card-warning">
                            <div class="card-header">
                                <h1 style="font-size:16px" class="card-title">Danh sách panel</h1>
                            </div>
                            
                            <table class="table table-bordered table-hover">
                                
                                <thead class="thead-light">
                                    
                                    <th style="width: 500px;">Ảnh panel</th>
                                    <th style="width: 200px;">Vị trí ( Rộng x Cao )</th>
                                    <th style="width: 100px;text-align: center;">Edit</th>
                                    
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $rows): ?>
                                    <tr>
                                        <td>
                                            <?php
                                            if($rows->photo != "" && file_exists("../assets/upload/slider/".$rows->photo)):
                                            ?>
                                            <img src="../assets/upload/slider/<?php echo $rows->photo; ?>" style="width: 500px;" alt="">
                                            <?php
                                            endif;
                                            ?>
                                        </td>
                                        <td><?php if ($rows->location == 1): ?>
                                            Trên trái ( 360 x 225 )
                                            <?php
                                            elseif($rows->location == 2):
                                            ?>
                                            Dưới trái ( 360 x 327 )
                                            <?php
                                            elseif($rows->location == 3):
                                            ?>
                                            Trung tâm ( 360 x 572 )
                                            <?php
                                            elseif($rows->location == 4):
                                            ?>
                                            Trên phải ( 360 x 271 )
                                            <?php
                                            elseif($rows->location == 5):
                                            ?>
                                            Dưới phải ( 360 x 280 )
                                            <?php
                                            elseif($rows->location == 6):
                                            ?>
                                            Panel phụ kiện ( Full x 636 )
                                            <?php endif ?>
                                        </td>
                                        <td style="text-align: center;"><a href="panel/<?php echo $rows->id; ?>.html"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-edit"></span></button></p></a></td>
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
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=panel&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                    </li>
                                    <?php elseif($numPage <= $page): ?>
                                    <li class="page-item">
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=panel&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                    </li>
                                    <?php endif ?>
                                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                                    <li class="page-item">
                                        <?php if($page == $i): ?>
                                        <a style="background:#6c757d;color: white;" href="panel&page-<?php echo $i; ?>.html" class="page-link" ><?php echo $i; ?></a>
                                        <?php elseif($page != $i): ?>
                                        <a href="panel&page-<?php echo $i; ?>.html" class="page-link" style="color: #6c757d;"><?php echo $i; ?></a>
                                        <?php endif ?>
                                    </li>
                                    <?php endfor; ?>
                                    <?php if ($numPage == $page): ?>
                                    <li class="page-item disabled">
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=panel&p=<?php echo $pre = $page + 1; ?>">Sau</a>
                                    </li>
                                    <?php elseif($numPage != $page): ?>
                                    <li class="page-item">
                                        <a class="page-link" style="color: #6c757d;" href="index.php?controller=panel&p=<?php echo $pre = $page + 1; ?>">Sau</a>
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