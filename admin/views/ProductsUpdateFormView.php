<?php
//load file Layout.php vao day
$this->fileLayout = "Layout.php";
?>
<!-- Main content -->
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                        </div>
                        
                        
                        
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Màu sắc</label>
                                    <input type="text" value="<?php echo isset($record->color)?$record->color:""; ?>" name="color" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chất liệu</label>
                                    <input type="text" value="<?php echo isset($record->material)?$record->material:""; ?>" name="material" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Xuất xứ</label>
                                    <select class="form-control" id="country" name="madein" required="Không được để trống">
                                        <option <?php if ($record->madein == "Việt Nam"): ?>
                                            selected
                                        <?php endif ?> value="Việt nam">Việt Nam</option>
                                        <option <?php if ($record->madein == "Thái lan"): ?>
                                            selected
                                        <?php endif ?> value="Thái lan">Thái Lan</option>
                                        <option <?php if ($record->madein == "Hàn quốc"): ?>
                                            selected
                                        <?php endif ?> value="Hàn quốc">Hàn Quốc</option>
                                        <option <?php if ($record->madein == "Trung quốc"): ?>
                                            selected
                                        <?php endif ?> value="Trung quốc">Trung Quốc</option>
                                        <option <?php if ($record->madein == "Nhật bản"): ?>
                                            selected
                                        <?php endif ?> value="Nhật bản">Nhật Bản</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kích cỡ</label>
                                    <select class="form-control" id="country" name="size" required="Không được để trống">
                                        <option <?php if ($record->size == "60x60cm"): ?>
                                            selected
                                        <?php endif ?> value="60x60cm">60x60cm</option>
                                        <option <?php if ($record->size == "80x80cm"): ?>
                                            selected
                                        <?php endif ?> value="80x80cm">80x80cm</option>
                                        <option <?php if ($record->size == "100x100cm"): ?>
                                            selected
                                        <?php endif ?> value="100x100cm">100x100cm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">&nbsp;&nbsp;Sản phẩm nổi bật</label>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm ( VNĐ )</label>
                                    <input type="number" id="price" value="<?php echo (isset($record->price)?$record->price:0) ; ?>" name="price" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giảm giá ( % )</label>
                                    <input type="text" id="discount" value="<?php echo isset($record->discount)?$record->discount:0;  ?>" onkeyup="tinhtien()" name="discount" class="form-control" required>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục</label>
                            <select name="category_id" id="" class="col-md-2 form-control">
                                
                                <?php
                                $maincategory = $this->modelCategories();
                                ?>
                                <?php foreach ($maincategory as $rows): ?>
                                
                                <option disabled
                                    <?php if (isset($record->category_id) && $record->category_id == $rows->id): ?>
                                    selected
                                    <?php endif ?>
                                    value="<?php echo $rows->id; ?>"
                                    ><?php
                                    echo $rows->name;
                                ?></option>
                                <?php
                                $subcategories = $this->modelCategoriesSub($rows->id);
                                ?>
                                <?php foreach ($subcategories as $subrows): ?>
                                <option
                                    <?php if (isset($record->category_id) && $record->category_id == $subrows->id): ?>
                                    selected
                                    <?php endif ?>
                                    value="<?php echo $subrows->id; ?>"
                                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                                    echo $subrows->name;
                                ?></option>
                                <?php endforeach ?>
                                
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giới thiệu</label>
                            <textarea name="description">
                            <?php echo isset($record->description)?$record->description:"";
                            ?></textarea>
                            <script type="text/javascript">
                            CKEDITOR.replace("description");
                            </script>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả ngắn</label>
                            <input type="text" value="<?php echo isset($record->shortdescription)?$record->shortdescription:""; ?>" name="shortdescription" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung</label>
                            <textarea name="content">
                            <?php echo isset($record->content)?$record->content:"";
                            ?></textarea>
                            <script type="text/javascript">
                            CKEDITOR.replace("content");
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh chính</label><br>
                            <input type="file" name="photo">
                            
                        </div>
                        <?php if(isset($record->photo) && file_exists("../assets/upload/products/".$record->photo)): ?>
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <img src="../assets/upload/products/<?php echo $record->photo; ?>" style="width:100px;">
                            </div>
                        </div>
                        <!-- end rows -->
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh phụ 1</label><br>
                            <input type="file" name="img1">
                            
                        </div>
                        <?php if(isset($record->img1) && file_exists("../assets/upload/products/".$record->img1)): ?>
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <img src="../assets/upload/products/<?php echo $record->img1; ?>" style="width:100px;">
                            </div>
                        </div>
                        <!-- end rows -->
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh phụ 2</label><br>
                            <input type="file" name="img2">
                            
                        </div>
                        <?php if(isset($record->img2) && file_exists("../assets/upload/products/".$record->img2)): ?>
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <img src="../assets/upload/products/<?php echo $record->img2; ?>" style="width:100px;">
                            </div>
                        </div>
                        <!-- end rows -->
                        <?php endif; ?>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-secondary">Xong</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->