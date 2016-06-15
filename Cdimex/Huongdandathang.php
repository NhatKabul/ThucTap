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
    	<div class="nen row navbar container"><!-- banner -->
		  <div class="col-xs-2 row"><a href="index.php"><img src="image/logo/logo.png" width="100%" height="100%"></a></div>
		  <div class="col-xs-10">
		  	<h3 align="center" class="font-chu">CÔNG TY TNHH MTV XUẤT NHẬP KHẨU <br>
					VÀ PHÁT TRIỂN VĂN HÓA
			</h3>
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
			<script type="text/javascript">
					$(function(){
					$(window).scroll(function () {
					if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
					else $('#goTop').fadeOut();
					});
					$('#goTop').click(function () {
					$('body,html').animate({scrollTop: 0}, 'slow');
					});
				});
				</script>
				<div id="goTop" class="toTop">
					<img src="image/icon/back-to-top.png"/>
				</div>
			<div class="container row">
				<div class="navbar">
					<div class="col-xs-12">
						<br><p class="font-footer2"><font>HÌNH THỨC ĐẶT HÀNG</font></p><br>
					</div>
					<div class="col-xs-12 border"></div>
					<div class="container"><font class="font-tintuc">
						<div class="font-chu2"><h4><b><font color="black">Duyệt và chọn sản phẩm</font></b></h4>

							- Bấm vào "ThemVaoGio" để đưa sản phẩm vào giỏ hàng. Bạn có thể sửa số lượng trong ô "Nhập số lượng".<br><br>

							<font color="blue">1. Xem thông tin giỏ:</font><br>

							- Hệ thống hiển thị các thông tin về sản phẩm bạn đã đặt mua như tên sản phẩm, đơn giá, số lượng, trị giá,...Tại đây bạn có thể thay đổi số lượng hàng hoá bằng cách nhập vào số lượng mới trong ô "Số lượng" và bấm vào nút "CapNhat" để cập nhật số lượng mới.

							- Nếu muốn trả lại sản phẩm đã chọn (không mua nữa), bạn bấm vào nút "Xoa" để xóa sản phẩm đó.

							- Mỗi lần thay đổi số lượng của sản phẩm, bạn nhớ phải click vào nút "CapNhat" để hệ thống ghi nhận lại những thay đổi trong giỏ hàng của bạn.

							- Nếu muốn chọn thêm sản phẩm khác, bạn click vào nút "tieptucmua".<br><br>

							<font color="blue">2. Ghi thông tin khách hàng:</font><br>

							- Bạn điền đầy đủ thông tin khách hàng và thông tin giao hàng theo mẫu. Nếu bạn có những yêu cầu gì khác hãy ghi vào khung phía dưới.
							<br><br>

							<font color="blue">3.Kết thúc:</font><br>

							- Bạn click vào nút thanhtoan để hoàn tất việc đặt hàng.<br>

							Nhân viên CDIMEX sẽ liên hệ với bạn để xác nhận việc đặt hàng và thời gian giao hàng.<br>

							<i>Ghi chú:</i> Điện thoại cho chúng tôi số: <b>08-39974755</b> nếu bạn cần sự hỗ trợ.<br>

							<i>Email liên hệ:</i><b>  nhasachngoaivan@cdimex.com.vn</b></div>
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