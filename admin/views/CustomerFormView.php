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
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Customers</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="<?php echo $action; ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Họ và tên</label>
              <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> name="email" class="form-control">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Địa chỉ</label>
              <input type="text" value="<?php echo isset($record->address)?$record->address:""; ?>" name="address" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Điện thoại</label>
              <input type="text" value="<?php echo isset($record->phone)?$record->phone:""; ?>" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> class="form-control">
            </div>
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Xong</button>
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