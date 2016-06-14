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
			<div class="container">
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
				<div class="posdetail">
					<div class="col-md-3">
				        <div id="carousel" class="carousel slide" data-ride="carousel">
				            <div class="carousel-inner">
				                <div class="item active">
				                    <img src="image/HinhSach/9780132056779.jpg">
				                </div>
				                <div class="item">
				                    <img src="image/HinhSach/9780132056779.jpg">
				                </div>
				                <div class="item">
				                    <img src="image/HinhSach/9780132056779.jpg">
				                </div>
				                <div class="item">
				                    <img src="image/HinhSach/9780132056779.jpg">
				                </div>
				            </div>
				        </div> 
					    <div class="clearfix">
					        <div id="thumbcarousel" class="carousel slide" data-interval="false">
					            <div class="carousel-inner">
					                <div class="item active">
					                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="image/HinhSach/9780132056779.jpg"></div>
					                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="image/HinhSach/9780132056779.jpg"></div>
					                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="image/HinhSach/9780132056779.jpg"></div>
					                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="image/HinhSach/9780132056779.jpg"></div>
					                </div><!-- /item -->
					            </div><!-- /carousel-inner -->
					            <!-- <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
					                <span class="glyphicon glyphicon-chevron-left"></span>
					            </a>
					            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
					                <span class="glyphicon glyphicon-chevron-right"></span>
					            </a> -->
					        </div> <!-- /thumbcarousel -->
					    </div><!-- /clearfix -->
				    </div> <!-- /col-md-4 -->
				    <div class="col-md-4">
				    	<p class="pos-tensach"><font class="tieude">Tên Sách: </font><font class="font-tensachdetail">Sách Giáo Khoa</font></p>
					    <p class="pos-giasach"><font class="tieude">Tác Giả: </font><font class="name">ABC</font></p>
					    <p class="pos-giasach"><font class="tieude">Nhà Xuất Bản: </font><font class="name">Kim Đồng</font></p>
					    <p class="pos-giasach"><font class="tieude">Năm Xuất Bản: </font><font class="name">1995</font></p>
					    <p class="pos-giasach"><font class="tieude">Giá: </font><font class="font-giasachdetail">400000 &#8363</font><font class="font-giamgiadetail">-40%</font><font class="font-giadaudetail">500000 &#8363</font></p>
					    <p class="pos-giasach"><font class="tieude">Tình Trạng: </font><font class="conhang">Còn hàng</font></p></p>
				    </div>
				    <div class="col-md-5">
				    	<p class="pos-tensach"></p>
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