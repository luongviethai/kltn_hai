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
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Tin tức</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên tiêu đề</label>
              <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"></label>
              <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">&nbsp;&nbsp;Tin nổi bật</label>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nội dung ngắn</label>
              <textarea name="description">
              <?php echo isset($record->description)?$record->description:"";
              ?></textarea>
              <script type="text/javascript">
              CKEDITOR.replace("description");
              </script>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nội dung chi tiết</label>
              <textarea name="content">
              <?php echo isset($record->content)?$record->content:"";
              ?></textarea>
              <script type="text/javascript">
              CKEDITOR.replace("content");
              </script>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh</label><br>
              <input type="file" name="photo">
              
            </div>
            <?php if(isset($record->photo) && file_exists("../assets/upload/news/".$record->photo)): ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
              <div class="col-md-2"></div>
              <div class="col-md-10">
                <img src="../assets/upload/news/<?php echo $record->photo; ?>" style="width:100px;">
              </div>
            </div>
            <!-- end rows -->
            <?php endif; ?>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-danger">Xong</button>
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