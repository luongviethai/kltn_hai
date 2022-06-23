<?php
$this->fileLayout = "Layout.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gạch men- Đức Phúc 368</title>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php
                $conn = Connection::getInstance();
                $query = $conn->query("select * from contact where id='$record->id'");
                $customer = $query->fetch();
                ?>
                <div class="table-responsive">
                    <div class="card card-success">
                        <div class="card-header">
                            <h1 style="font-size:16px" class="card-title">Thông tin liên hệ</h1>
                        </div>
                        
                        <table class="table table-bordered">
                            <tr>
                                <th style="width:150px;">Họ tên</th>
                                <th><?php echo $customer->name; ?></th>
                            </tr>
                            <tr>
                                <th style="width:150px;">Tiêu đề</th>
                                <th><?php echo $customer->tieude; ?></th>
                            </tr>
                            <tr>
                                <th style="width:150px;">Số điện thoại</th>
                                <th><?php echo $customer->sdt; ?></th>
                            </tr>
                            <tr>
                                <th style="width:150px;">Thời gian</th>
                                <th><?php
                                    echo date("H:s - d/m/Y",strtotime($customer->date));
                                ?></th>
                            </tr>
                            <tr>
                                <th style="width:150px;">Ghi chú</th>
                                <th><textarea name="ghichu"><?php echo $customer->ghichu; ?></textarea>
                                    <script type="text/javascript">
                                    CKEDITOR.replace("ghichu");
                                </script></th>
                            </tr>
                        </table>
                        <div class="card-footer">
                            <div style="padding-bottom: 10px;padding-right:20px ;float: left;">
                                <a href="index.php?controller=contacts" class="btn btn-success"><i class="fa fa-arrow-left"></i> Trở lại</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </body>
</html>