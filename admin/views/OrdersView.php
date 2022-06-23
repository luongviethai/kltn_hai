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
                <div class="table-responsive">
                    <div class="card card-success">
                        <div class="card-header">
                            <h1 style="font-size:16px" class="card-title">Danh sách đặt hàng</h1>
                        </div>
                        
                        <table class="table table-bordered table-hover">
                            
                            <thead class="thead-light">
                                <th style="width:150px;">Họ và tên</th>
                                <th style="width: 350px;">Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Ngày mua</th>
                                <th>Tổng tiền</th>
                                <th style="width:100px;">Trạng thái</th>
                                <th style="width:100px;">Giao hàng</th>
                                <th style="width:100px;">Chi tiết</th>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $rows): ?>
                                <tr>
                                    <?php
                                    $customer = $this->modelGetCustomer($rows->customer_id);
                                    ?>
                                    <td><?php
                                        echo $customer->name;
                                    ?></td>
                                    <td><?php
                                        echo $customer->address;
                                    ?></td>
                                    <td><?php
                                        echo $customer->phone;
                                    ?></td>
                                    <td><?php
                                        echo date("d/m/Y",strtotime($rows->date));
                                    ?></td>
                                    <td >
                                        <?php
                                        echo number_format($rows->price);
                                        ?> ₫
                                    </td>
                                    <td style="text-align:center;">
                                        <?php if ($rows->status==0):
                                        ?>
                                        <div class="badge badge-danger">Chưa giao hàng</div>
                                        <?php
                                        elseif ($rows->status==2):
                                        ?>
                                        <div class="badge badge-warning">Chuẩn bị hàng</div>
                                        <?php else: ?>
                                        <div class="badge badge-primary">Đã giao hàng</div>
                                        <?php
                                        endif;
                                        ?>
                                    </td>
                                    <td style="text-align:center;">
                                        <?php if ($rows->status == 0):
                                        ?>
                                        <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="badge badge-secondary disabled">Giao hàng</a>
                                        <?php elseif($rows->status == 2): ?>
                                        <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="badge badge-info">Giao hàng</a>
                                        <?php endif ?>
                                    </td>
                                    <td style="text-align:center;">
                                        <a href="orders/<?php echo $rows->id; ?>.html" class="badge badge-success">Chi tiết</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                            
                        </table>
                        <style type="text/css">
                        .disabled {
                        pointer-events: none;
                        cursor: default;
                        }
                        </style>
                        <nav aria-label="Page" style="padding-right: 20px;">
                            <ul class="pagination justify-content-end">
                                <?php
                                $page = isset($_GET["p"])? $_GET["p"]:0;
                                
                                ?>
                                <?php if ($numPage > $page): ?>
                                <li class="page-item disabled">
                                    <a class="page-link" style="color: #6c757d;" href="index.php?controller=orders&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                </li>
                                <?php elseif($numPage <= $page): ?>
                                <li class="page-item">
                                    <a class="page-link" style="color: #6c757d;" href="index.php?controller=orders&p=<?php echo $pre = $page - 1; ?>" >Trước</a>
                                </li>
                                <?php endif ?>
                                <?php for($i = 1; $i <= $numPage; $i++): ?>
                                <li class="page-item">
                                    <?php if($page == $i): ?>
                                    <a style="background:#6c757d;color: white;" href="orders&page-<?php echo $i; ?>.html" class="page-link" ><?php echo $i; ?></a>
                                    <?php elseif($page != $i): ?>
                                    <a href="orders&page-<?php echo $i; ?>.html" class="page-link" style="color: #6c757d;"><?php echo $i; ?></a>
                                    <?php endif ?>
                                </li>
                                <?php endfor; ?>
                                <?php if ($numPage == $page): ?>
                                <li class="page-item disabled">
                                    <a class="page-link" style="color: #6c757d;" href="index.php?controller=orders&p=<?php echo $pre = $page + 1; ?>">Sau</a>
                                </li>
                                <?php elseif($numPage != $page): ?>
                                <li class="page-item">
                                    <a class="page-link" style="color: #6c757d;" href="index.php?controller=orders&p=<?php echo $pre = $page + 1; ?>">Sau</a>
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