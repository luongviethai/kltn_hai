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
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Slide</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
          <div class="card-body">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Ảnh</label><br>
              <input type="file" name="photo">
              
            </div>
            <?php if(isset($record->photo) && file_exists("../assets/upload/slider/".$record->photo)): ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
              <div class="col-md-2"></div>
              <div class="col-md-10">
                <img src="../assets/upload/slider/<?php echo $record->photo; ?>" style="width:500px;">
              </div>
            </div>
            <!-- end rows -->
            <?php endif; ?>
            <div style="margin-top: 50px;" class="form-check">
              <label for="exampleInputEmail1">Vị trí</label><br>
              <input type="radio" value="1" name="location" id="1">
              <label for="1">Slide trên</label><br>
              <input type="radio" value="2" name="location" id="2">
              <label for="2">Slide dưới</label>
              
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-warning">Xong</button>
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