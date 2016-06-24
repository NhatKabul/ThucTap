<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="image/logo.ico">
<title>Cdimex</title>
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/css.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/styles.css" type="text/css">
<link rel="stylesheet" href="css/custom.css" type="text/css">
<link rel="stylesheet" href="css/non-responsive.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css">
<script src="js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 30px 0px;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 100%;
        margin: 50px;
        top: 0px;
        left: -50px;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #0380ff;
    }
  </style>
</head>
<body>
    <div class="container">
    	<div class="nen row navbar navbar-default"><!-- banner -->
		  <div class="col-xs-2 row"><a href="index.php"><img src="image/logo/logo.png" width="100%" height="100%"></a></div>
		  <div class="col-xs-10">
		  </div>
		</div><!-- banner -->
		<div class="row">
			<!-- start header -->
			<?php
				include("Views/Header.php"); 
			?>
			<!-- end header -->
			<!-- modal -->
			<!-- modal Login -->
			<div class="modal" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng Nhập</h3>
				       <p align="center">Nếu bạn chưa có tài khoản, <a href="#" align="left" data-toggle="modal" data-target="#modalpugin">Đăng Ký</a><p>
				      </div>
				      <div class="modal-body">
							<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-4 control-label"> Nhập Email</label>
								    <div class="col-sm-6">
								      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label"> Nhập Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Lưu tài khoản
								        </label>
								      </div>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="button" class="btn btn-link" data-dismiss="modal">Quên mật khẩu</button>
				       				 <button type="button" class="btn btn-primary">Đăng Nhập</button>
								    </div>
								  </div>
							</form>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
				<!-- modal dang ky-->
				<div class="modal " id="modalpugin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng ký tài khoản</h3>
				        <p align="center">Nếu bạn đã có tài khoản, <a href="#"data-toggle="modal" data-target="#modallogin" >Đăng Nhập </a><p>
				      </div>
				      <div class="modal-body">
							<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
								    <div class="col-sm-6">
								      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Mật Khẩu</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Họ và tên</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputname" placeholder="name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Giới tính</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputsex" placeholder="Sex">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Ngày sinh</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputNS" placeholder="NS">
								    </div>
								  </div>
								   <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox">
								          <h4> <font size="2">Nhan Cac Thong Tin Va Chuong Trinh Khuyen Mai Qua Email</font></h4>
								          <h4><font size="2">Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo điều kiện sử dụng và chính sách của Tiki.</font></h4>
								        </label>
								      </div>
								    </div>
								  <div class="form-group">
								    <div class="col-sm-offset-4 col-sm-10">
				       				 <button type="button" class="btn btn-primary">Đăng Ký</button>
								    </div>
								  </div>
							</form>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<!-- start content -->
			<div class="container row">
				<div class="navbar">
					<div class="col-xs-12">
						<br><p class="font-footer2"><font>HÌNH THỨC THANH TOÁN</font></p><br>
					</div>
					<div class="col-xs-12 border"></div>
					<div class="container"><font class="font-tintuc">
						<div class="font-chu2"><h4><b><font color="black">Thanh toán trong nước</font></b></h4>

							<font color="blue">1. Thanh toán bằng tiền mặt:</font><br>
							Nhân viên của công ty sẽ liên hệ với quí khách để hẹn lịch giao hàng. Trong trường hợp quí khách đi vắng, vui lòng uỷ thác cho người khác nhận hàng và thanh toán tiền thay.<br><br>

							<font color="blue">2. Thanh toán qua ngân hàng:</font><br>

							Quý khách nộp tiền vào tài khoản của công ty theo chi tiết sau:<br>

							Người thụ hưởng: <font color="#333333">Công ty CỔ PHẦN XNK & Phát triển Văn hóa (CDIMEX)</font><br>

							Tài khoản :<font color="#333333">102010000096355</font><br>

							Tại : <font color="#333333">Ngân hàng Thương Mại Cổ Phần Công Thương Việt Nam _ Chi nhánh TP HCM</font><br><br>

							<font color="blue">3. Thanh toán vào thẻ tín dụng:</font><br>

							Quý khách vui lòng nộp tiền vào số thẻ tín dụng theo chi tiết sau:<br>

							Loại thẻ:        <font color="#333333"> Visa Card</font><br>

							Số TK thẻ :    <font color="#333333"> 200014948061503</font><br>

							Ngân hàng:    <font color="#333333"> Eximbank</font>
							<br><br>
						<h4><b><font color="black">Thanh toán quốc tế</font></b></h4>

							<font color="blue">Chuyển tiền Western Union:</font><br>

							Quí khách vui lòng đến đại lý Western Union gần nhất (www.westernunion.com) để chuyển tiền cho chúng tôi theo thông tin dưới đây:<br>

							Receiver: <font color="#333333">Lê Thị Hồng</font><br>
							Address: <font color="#333333">99A Nguyen Van Troi Street - Phu Nhuan District, Ho Chi Minh city. Viet nam.</font><br>
							Tel: <font color="#333333">84-8-39974755</font><br><br>

							Giao tiền và phiếu gởi tiền cho Đại lý, bạn sẽ nhận biên lai với mã số chuyển tiền (MTCN - Money Transfer Control Number) gồm 10 số.<br>
							Khi hoàn tất thủ tục chuyển tiền với Western Union, ban vui lòng cung cấp thông tin cuộc chuyển tiền gồm tên người gởi, nước gởi, số tiền và mã số chuyển tiền (MTCN) đến cho chúng tôi theo địa chỉ e-mail: <font color="#333333">nhasachngoaivan@cdimex.com.vn.</font> Ngay sau khi nhận được e-mail, chúng tôi sẽ tiến hành giao hàng ngay theo yêu cầu của bạn.<br><br>

							(Điện thoại cho chúng tôi số: (84.8)-39974755 nếu bạn cần sự hỗ trợ)</div>
					</div>
				</div>
			</div>
			<!-- end content -->
			<!-- start footer -->
			<?php
				include("Views/Footer.php");
			?>
			<!-- end footer -->
		</div>
		
    </div>
    
</body>
</html>