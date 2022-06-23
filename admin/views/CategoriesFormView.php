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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Danh mục sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo $action; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                   <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả danh mục</label>
                   <input type="text" value="<?php echo isset($record->description)?$record->description:""; ?>" name="description" class="form-control">
                  </div>

                    <div class="form-group">

                    <label for="exampleInputPassword1"></label>
                 <input type="checkbox" <?php if(isset($record->displayhomepage)&&$record->displayhomepage==1): ?> checked <?php endif; ?> name="displayhomepage" id="displayhomepage"> <label for="displayhomepage">&nbsp;&nbsp;Hiển thị trên màn hình Home</label>

                  </div>

  

                   <div class="form-group">
                    <label class="col-md-12" for="exampleInputPassword1">Danh mục</label>
              <select name="parent_id" class="custom-select col-md-2" id="inlineFormCustomSelect">
       <option value="0"></option>
                        <?php 
                            $categories = $this->modelCategories();
                         ?>
                         <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->parent_id)&&$record->parent_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php endforeach; ?>
                    </select>
      </select>

                  </div>
          
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Xong</button>
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