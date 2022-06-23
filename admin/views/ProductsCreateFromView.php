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
                    <option value=""></option>
                    <option  value="Việt nam">Việt Nam</option>
                    <option  value="Thái lan">Thái Lan</option>
                    <option  value="Hàn quốc">Hàn Quốc</option>
                    <option  value="Trung quốc">Trung Quốc</option>
                    <option value="Nhật bản">Nhật Bản</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kích cỡ</label>
                  <select class="form-control" id="country" name="size" required="Không được để trống">
                    <option value=""></option>
                    <option value="60x60cm">60x60cm</option>
                    <option value="80x80cm">80x80cm</option>
                    <option value="100x100cm">100x100cm</option>
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"></label>
              <input type="checkbox" name="hot" id="hot"> <label for="hot">&nbsp;&nbsp;Sản phẩm nổi bật</label>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Giá sản phẩm ( VNĐ )</label>
                  <input type="number" id="price" value="" name="price" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Giảm giá ( % )</label>
                  <input type="text" id="discount" value="" name="discount" class="form-control" required>
                </div>
                
              </div>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Danh mục</label>
              <select name="category_id" id="" class="col-md-2 form-control">
                <option value=""></option>
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
              </textarea>
              <script type="text/javascript">
              CKEDITOR.replace("description");
              </script>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Mô tả ngắn</label>
              <input type="text" value="" name="shortdescription" class="form-control">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nội dung</label>
              <textarea name="content">
              </textarea>
              <script type="text/javascript">
              CKEDITOR.replace("content");
              </script>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh chính</label><br>
              <input type="file" name="photo">
              
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh phụ 1</label><br>
              <input type="file" name="img1">
              
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh phụ 2</label><br>
              <input type="file" name="img2">
              
            </div>
            
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