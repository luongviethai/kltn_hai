<?php 

include "models/SearchModel.php";
class SearchController extends Controller
{
	use SearchModel;
	public function name()
	{
		$key = isset($_GET['key'])?$_GET['key']:"";
		// quy định số bản ghi trên một trang
		$recordPerPage = 9;
		// tính số trang
		$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelRead($recordPerPage);
		// gọi view, truyền dữ liệu ra view
		$this->loadView("SearchNameView.php",["data"=>$data,"numPage"=>$numPage,"key"=>$key]);
	}


public function price()
	{
		$fromPrice = isset($_GET['fromPrice']) ? $_GET['fromPrice']:0;
				$toPrice = isset($_GET['toPrice']) ? $_GET['toPrice']:0;
		// quy định số bản ghi trên một trang
		$recordPerPage = 9;
		// tính số trang
		$numPage = ceil($this->modelTotalRecordSearchPrice()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelReadSearchPrice($recordPerPage);

		// gọi view, truyền dữ liệu ra view
		$this->loadView("SearchPriceView.php",["data"=>$data,"numPage"=>$numPage,"fromPrice"=>$fromPrice,"toPrice"=>$toPrice]);
	}

	public function color()
	{
		$key = isset($_GET["key"]) ? $_GET["key"] : "";
		// quy định số bản ghi trên một trang
		$recordPerPage = 9;
		// tính số trang
		$numPage = ceil($this->modelTotalRecordSearchColor()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelReadSearchColor($recordPerPage);

		// gọi view, truyền dữ liệu ra view
		$this->loadView("SearchColorView.php",["data"=>$data,"numPage"=>$numPage,"key"=>$key]);
	}

		public function size()
	{
		$key= isset($_GET["key"]) ? $_GET["key"] : "";
		// quy định số bản ghi trên một trang
		$recordPerPage = 9;
		// tính số trang
		$numPage = ceil($this->modelTotalRecordSearchSize()/$recordPerPage);
		//lấy dữ liệu từ model
		$data  = $this->modelReadSearchSize($recordPerPage);

		// gọi view, truyền dữ liệu ra view
		$this->loadView("SearchSizeView.php",["data"=>$data,"numPage"=>$numPage,"key"=>$key]);
	}
	
	
	public function ajaxSearch(){
			$data = $this->modelAjaxSearch();
			$strResult = "";
			foreach($data as $rows){
				$pricediscount = number_format($rows->price - ($rows->price * $rows->discount)/100);
				$strResult = $strResult."<li>
              <a id='id-search' href='products/detail/{$rows->id}/{$rows->name}.html'>
              <div class='warp-img-suggestion'>
                 <img src='assets/upload/products/{$rows->photo}'>
              </div>
              <div class='warp-right-suggestion'>
                <div class='name-suggestion'>
                 {$rows->name}
                </div>
                <div class='price-suggestion'>
                  <span class='price-well'>{$pricediscount} ₫</span>
                </div>
              </div>
              </a>
             
            </li>";
			}
			echo $strResult;
		}

}
 ?>
