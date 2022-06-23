<?php 
//start session
session_start();
//load file connection
include "../application/Connection.php";
include "../application/Controller.php";

 ?>


<?php 
//load động mvc dựa vào tham số controlller truyền len url
     $controller = isset($_GET['controller'])?$_GET['controller']:"Login";
     $action = isset($_GET['action'])?$_GET['action']:"index";
     // tạo đường dẫn vật lý của file controller trong MVC. VD: Controllers/PhongBanController.php
     // hàm ucfirst(string) sẽ viết hoa ký tự đầu tiên
     $controllerFile = "controllers/".ucfirst($controller)."Controller.php";
     // file_exists(đương dẫn) trả về true nếu file tồn tại, ngược lại trả về false
     if(file_exists($controllerFile))
     {
        include $controllerFile;
        $controllerClass=$controller."Controller";
        // khởi tạo object của class
        $obj = new $controllerClass();
        // gọi đến action
        $obj->$action();
     }
     else die("File $controllerFile không tồn tại");
     //hàm die("chuỗi") xuất ra thông báo chuỗi
 ?>
