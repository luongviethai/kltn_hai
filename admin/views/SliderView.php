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
          <div style="padding-bottom: 10px;">
            <a href="slider-create.html" class="btn btn-warning">Thêm mới silde</a>
          </div>
          <div class="table-responsive">
            <div class="card card-warning">
              <div class="card-header">
                <h1 style="font-size:16px" class="card-title">Danh sách slide</h1>
              </div>
              
              <table class="table table-bordered table-hover">
                
                <thead class="thead-light">
                  
                  <th style="width: 500px;">Ảnh slide</th>
                  <th style="width: 500px;">Location</th>
                  <th style="width: 100px;text-align: center;">Edit</th>
                  <th style="width: 100px;text-align: center;">Delete</th>
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
                    <td><?php if ($rows->location==1): ?>
                      Slide trên
                      <?php elseif($rows->location==2): ?>
                      Slide dưới
                    <?php endif ?></td>
                    <td style="text-align: center;"><a href="slider/<?php echo $rows->id; ?>.html"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-edit"></span></button></p></a></td>
                    <td style="text-align:center;"><a href="index.php?controller=slider&action=delete&id=<?php echo $rows->id; ?>"onclick="return window.confirm('Are you sure?');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></a></td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
                
              </table>
              <nav aria-label="Page" style="padding-right: 20px;">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" style="color:#ffc107;" href="#" tabindex="-1">Previous</a>
                  </li>
                  <?php for($i = 1; $i <= $numPage; $i++): ?>
                  <li class="page-item"><a href="slider&page-<?php echo $i; ?>.html" class="page-link" style="color:#ffc107;" ><?php echo $i; ?></a></li>
                  <?php endfor; ?>
                  <li class="page-item">
                    <a class="page-link" style="color:#ffc107;"  href="#">Next</a>
                  </li>
                </ul>
              </nav>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>