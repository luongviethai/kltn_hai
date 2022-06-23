<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đức Phúc 368</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body style=" font-family: 'Quicksand', sans-serif;">
	<div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <h1>Đặt hàng thành công!</h1>
               <p>Cảm ơn bạn <strong><?php 
               echo $_SESSION['customer_name'];
                ?></strong> đã mua sắm tại <strong>Đức Phúc 368</strong>!!!</p>
               <p>Chúng tôi sẽ liên hệ với bạn trong vòng <strong>15 phút</strong> và cam kết giao hàng miễn phí trong <strong>60 phút</strong></p>
               <p style="padding-bottom: 20px;"><i style="font-size:16px;" class="fa fa-phone"></i>&nbsp;Tư vấn bán hàng: <strong style="color:red;" class="red">1800 1508</strong></p>
               <a href="home.html" style="padding: 13px;">Tiếp tục mua sắm</a>
            </div>
            
         </div>
      </div>
   </div>
</div>
<style type="text/css">


    .red
    {
   
        color: red;    }
    body
    {
        background:url('assets/frontend/images/backgroundcay1.jpg');
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:400px;
        width: 100%;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:#fdd5b8;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:black;
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
   
</style>

</body>
<style type="text/css">
    @media(max-width: 420px){
    .red
    {
   
        color: red;    }
    body
    {
        background:#f2f2f2;
    }

    .payment
    {
        margin-top: 100px;
        border:1px solid #f2f2f2;
        height:450px;
        width: 100%;
        border-radius:20px;
        background:#fff;
    }
   .payment_header
   {
       background:black;
       padding:20px;
       border-radius:20px 20px 0px 0px;
       
   }
   
   .check
   {
       margin:0px auto;
       width:50px;
       height:50px;
       border-radius:100%;
       background:#fff;
       text-align:center;
   }
   
   .check i
   {
       vertical-align:middle;
       line-height:50px;
       font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:black;
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
   


    }
</style>
</html>