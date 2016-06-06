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
		  <div class="col-xs-2 row"><img src="image/logo/logo.png" width="100%" height="100%"></div>
		  <div class="col-xs-10">
		  	<h3 align="center" class="font-chu">CÔNG TY TNHH MTV XUẤT NHẬP KHẨU <br>
					VÀ PHÁT TRIỂN VĂN HÓA
			</h3>
		  </div>
		</div><!-- banner -->
		<div class="row">
			<!-- start header -->
			<div class="container">	
				<div class="row">
					<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container">

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li><a href="show_cart.php"><img src="image/icon/images.png" height="20"><b> Giỏ Hàng <span class="badge">0
						    </span></b></a></li>
					      </ul>
					      <form class="navbar-form navbar-left" role="search">
					        <div class="input-group">
					          <tr>
					          	<input type="text" class="form-control" placeholder="Search" size="50%">
					          	<span class="input-group-btn"><button type="submit" class="btn btn-primary">Tìm</button></span>
					          </tr>
					        </div>
					      </form>
					      <ul class="nav navbar-nav navbar-right">
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="#0000FF"><b>Đăng Nhập<b><span class="caret"></span></font></span></a>
					          <ul class="dropdown-menu">
					            <li><a class="btn btn-link btn-sl" data-toggle="modal" data-target="#myModal"><image src="image/icon/dn.jpg" width="20" height="20">Đăng Nhập</a></li>
					             <li><a class="btn btn-link btn-sl" data-toggle="modal" data-target="#myModal"><image src="image/icon/dk.png" width="20" height="20">   Đăng Ký</a></li>
					          </ul>
					        </li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div> 
				<div class="row container-fuild">
					<div class="navbar-right col-xs-10">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						    <li data-target="#myCarousel" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="image/slideshow/hinh1.jpg" alt="Chania">
						    </div>

						    <div class="item">
						      <img src="image/slideshow/hinh2.jpg" alt="Chania">
						    </div>

						    <div class="item">
						      <img src="image/slideshow/hinh3.jpg" alt="Flower">
						    </div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
					<div id="cssmenu" class="navbar-left col-xs-2">
								<p class="danhmuc">Danh Mục</p>
								<ul>
								   <li class="active"><a href='index.html'><span>Home</span></a></li>
								   <li class="has-sub"><a href='#'><span>Products</span></a>
								      <ul>
								         <li class="has-sub"><a href='#'><span>Product 1</span></a>
								            <ul>
								               <li><a href='#'><span>Sub Item</span></a></li>
								               <li><a href='#'><span>Sub Item</span></a></li>
								            </ul>
								         </li>
								         <li class="has-sub"><a href='#'><span>Product 2</span></a>
								            <ul>
								               <li><a href='#'><span>Sub Item</span></a></li>
								               <li><a href='#'><span>Sub Item</span></a></li>
								            </ul>
								         </li>
								      </ul>
								   </li>
								   <li><a href='#'><span>About</span></a></li>
								   <li><a href='#'><span>Contact</span></a></li>
								   <li><a href='#'><span>About</span></a></li>
								   <li class="has-sub"><a href='#'><span>Products</span></a>
								      <ul>
								         <li class="has-sub"><a href='#'><span>Product 1</span></a>
								            <ul>
								               <li><a href='#'><span>Sub Item</span></a></li>
								               <li><a href='#'><span>Sub Item</span></a></li>
								            </ul>
								         </li>
								         <li class="has-sub"><a href='#'><span>Product 2</span></a>
								            <ul>
								               <li><a href='#'><span>Sub Item</span></a></li>
								               <li><a href='#'><span>Sub Item</span></a></li>
								            </ul>
								         </li>
								      </ul>
								   </li>
								   <li><a href='#'><span>About</span></a></li>
								</ul>
					</div>
				</div>
			</div>
			
			<!-- end header -->
			<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
			<!-- start content -->
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".center").slick({
							dots: true,
							infinite: true,
							centerMode: false,
							slidesToShow: 4,
							});
						});
			</script>
			<div>
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
				<div class="col-xs-9 navbar-left">
				  <div id="phanvung">
					<p><b>Thời Trang</b></p>
				  </div>
				  <div>
				  	<img src="image/banner/banner1.jpg" width="100%" height="250px">
				  </div>
				  <section class="center slider">
				    <div>
				      <img src="image/HinhSach/9780132056779.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132336765.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				   <div>
				      <img src="image/HinhSach/9780132881876.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780133437546.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780136038993.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				  </section>
				  <div id="phanvung">
					<p><b>Thiết Bị Số</b></p>
				  </div>
				  <div>
				  	<img src="image/banner/banner.jpg" width="100%" height="250px">
				  </div>
				  <section class="center slider">
				    <div>
				      <img src="image/HinhSach/9780132056779.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132336765.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				   <div>
				      <img src="image/HinhSach/9780132881876.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780133437546.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780136038993.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				  </section>
				  <div id="phanvung">
					<p><b>Phụ Kiện</b></p>
				  </div>
				  <div>
				  	<img src="image/banner/dich-vu-dang-tin.jpg" width="100%" height="250px">
				  </div>
				  <section class="center slider">
				    <div>
				      <img src="image/HinhSach/9780132056779.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132336765.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				   <div>
				      <img src="image/HinhSach/9780132881876.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780133437546.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <div>
				      <img src="image/HinhSach/9780136038993.jpg" height="200px">
				      <p class="pos-tensach"><font class="font-tensach">Sách Giáo Khoa</font></p>
				      <p class="pos-giasach"><font class="font-giasach">400000 &#8363</font><font class="font-giamgia">-40%</font></p>
				      <p class="pos-giasach"><font class="font-giadau">500000 &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				  </section>
				</div>
				<div class="col-xs-3 col-xs-6 navbar-right">
					<div class="box_produt_hot">
						<div class="title_box">
							<h2><b>SẢN PHẨM BÁN CHẠY</b></h2>
						</div>
						<ul class="available_pc">
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/Boost ! Grammar 4:Student's Book With Cd + Practice Book"><img alt="Boost ! Grammar 4:Student's Book With Cd + Practice Book" src="image/BanChay/product_s2123.jpg" > </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/Boost ! Grammar 4:Student's Book With Cd + Practice Book">Boost ! Grammar 4:Student's Book With Cd + Practice Book</a></h3>
										
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">100.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/Inspiration 4: Student Book"><img alt="Inspiration 4: Student Book" src="image/BanChay/2.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/Inspiration 4: Student Book">Inspiration 4: Student Book</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">90.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/New American Inside Out Upper-Int"><img alt="New American Inside Out Upper-Int" src="image/BanChay/3.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/New American Inside Out Upper-Int">New American Inside Out Upper-Int: Workbook+CD-ROM Pack</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">90.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/New American Inside Out Beginner"><img alt="New American Inside Out Beginner" src="image/BanChay/4.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="New American Inside Out Beginner">New American Inside Out Beginner: Student Book + CD-ROM Pack</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">11.510.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/Renergy 2010"><img alt="Renergy 2010" src="image/BanChay/5.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/Renergy 2010">Renergy 2010</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">59.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/Field and Laboratory Exercises in Animal Behavior"><img alt="Field and Laboratory Exercises in Animal Behavior" src="image/BanChay/6.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/Field and Laboratory Exercises in Animal Behavior">Field and Laboratory Exercises in Animal Behavior</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">260.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/Morden Foreign Languages 5-11"><img alt="Morden Foreign Languages 5-11" src="image/BanChay/7.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/Morden Foreign Languages 5-11">Morden Foreign Languages 5-11</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_old">190.000₫</span>
									</div>
									<div class="box_pr_price">
										<span class="pr_new">150.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/The Macroeconomic Theory of Exchange Rate Crises"><img alt="The Macroeconomic Theory of Exchange Rate Crises" src="image/BanChay/9.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/The Macroeconomic Theory of Exchange Rate Crises">The Macroeconomic Theory of Exchange Rate Crises</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_old">239.000₫</span>
									</div>
									<div class="box_pr_price">
										<span class="pr_new">209.000₫</span>
									</div>
									
								</div>
							</li>
							
							
							<div class="more_view"><a href="/san-pham-noi-bat">Xem Thêm</a>
							</div>
						</ul>
					</div>
					<div class="box_produt_hot">
						<div class="title_box">
							<h2><b>SẢN PHẨM GIẢM GIÁ</b></h2>
						</div>
						<ul class="available_pc">
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/Get Ready For Business 2: Student's Book"><img alt="Get Ready For Business 2: Student's Book" src="image/giamgia/1.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/Get Ready For Business 2: Student's Book">Get Ready For Business 2: Student's Book</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">199.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/English Explorer 1: Student Book"><img alt="English Explorer 1: Student Book" src="image/giamgia/2.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="English Explorer 1: Student Book">English Explorer 1: Student Book</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">150.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/Concise Oxford English Dictionary"><img alt="Concise Oxford English Dictionary" src="image/giamgia/3.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="Concise Oxford English Dictionary">Concise Oxford English Dictionary</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">854.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="Active Listening 1: Student Book with Cd"><img alt="Active Listening 1: Student Book with Cd" src="image/giamgia/4.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="Active Listening 1: Student Book with Cd">Active Listening 1: Student Book with Cd</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">254.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/laptop-asus-transformer-book-flip-tp550la-cj040h"><img alt="Laptop Asus Transformer" src="image/giamgia/5.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/laptop-asus-transformer-book-flip-tp550la-cj040h">English First Hands 1: Student Book with Cds/a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">194.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/bo-chia-cong-usb-ibuffalo-4-cong"><img alt="Bộ chia cổng USB" src="image/giamgia/6.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/bo-chia-cong-usb-ibuffalo-4-cong">English First Hands 2: Student Book with Cds</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">194.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/o-cung-di-dong-wd-my-passport-ultra-1tb"><img alt="Ổ cứng di động WD" src="image/giamgia/7.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/o-cung-di-dong-wd-my-passport-ultra-1tb">English Explorer 3: Student Book</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_old">180.000₫</span>
									</div>
									<div class="box_pr_price">
										<span class="pr_new">162.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/chuot-hong-ngoai-elecom"><img alt="Chuột hồng ngoại" src="image/giamgia/8.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/chuot-hong-ngoai-elecom">Cheese-Rolling Races (AmE)</a></h3>
									</div>
									<div class="box_pr_price">
										<span class="pr_new">Call</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/ban-phim-khong-day-rapoo-e2700"><img alt="Bàn phím không dây" src="image/giamgia/10.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/ban-phim-khong-day-rapoo-e2700">An Introduction to Community Development</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">406.221₫</span>
									</div>
									
								</div>
							</li>
							
							
							<div class="more_view"><a href="/san-pham-noi-bat">Xem Thêm</a>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end content -->
		<!-- start footer -->
		<div class="row navbar navbar-default">
			<p align="center" class="font-footer"><font>Copyright &copy; Cdimex</font></p>
		</div>
		<!-- end footer -->
    </div>
    
</body>
</html>