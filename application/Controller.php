<?php 

class Controller{
	public $fileName = Null;
	public $fileLayout = Null;
	public $view = Null;
	public function loadView($fileName,$data = null)
	{
		if($data != Null)
			extract($data);
		// kiểm tra xem đường dẫn file có tồn tại không
		if(file_exists("views/$fileName"))
		{
			$this->fileName = $fileName;
			//đọc nội dung của $fileName gắn vào một biến
			ob_start();
				include "views/$fileName";
				$this->view = ob_get_contents();
			ob_get_clean();
			// kiểm tra nếu mà biến $this->fileLayout không Nukk thì include nó
			if($this->fileLayout != Null)
			{
				include "views/$this->fileLayout";
			}
			else
			{
				echo $this->view;
			}		
		}
	}

	public function authen()
	{
			if (isset($_SESSION['email']) == false) {
			header('location:index.php?controller=login');

		}
	}

}

 ?>