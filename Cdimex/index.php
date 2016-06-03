<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="image/logo.ico">
<title>Cdimex</title>
<link rel="stylesheet" href="css/css.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/styles.css" type="text/css">
<link rel="stylesheet" href="css/custom.css" type="text/css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js" ></script>
<script src="js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript"> jQuery.noConflict(); </script>
<link rel="stylesheet" type="text/css" href="css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css">
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
    	<div class="nen row navbar"><!-- banner -->
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
				<div class="navbar-right">
						<div class="navbar navbar-default navbar-fixed-top">
							<div class="container">
								<div class="navbar-header">
									<div class="col-xs-3">
						                <ul class="nav navbar-nav">
						                    <li><a href="show_cart.php"><img src="image/icon/images.png" height="20"><b> Giỏ Hàng <span class="badge">0
						                    </span></b></a></li>
						                </ul>
					                </div>
					                <div class="col-xs-6">
						                <ul class="nav navbar-nav">
						                    <li>
						                    	<form id="form1" name="form1" method="post" class="navbar-form navbar-left" enctype="multipart/form-data">
												  <div class="input-group">
												    <tr>
												      <input type="text" class="form-control" placeholder="Search for..." size="100%">
												      <span class="input-group-btn">
												        <button class="btn btn-primary" type="button">Tìm</button>
												      </span>
												    </tr>
												  </div>
												</form>
						                    </li>
						                </ul>
					                </div>
					                <div class="col-xs-3">
					                </div>
					            </div>
							</div>
						</div>
						<script type="text/javascript">
							$(document).ready(function(){
								$("#featured").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
									show: function(event, ui){
										$('#featured .ui-tabs-panel .info').hide();
										var infoheight=$('.info', ui.panel).height();
										$('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
									}
								}).tabs("rotate", 5000, true);
								$('#featured').hover(
									function(){ $('#featured').tabs('rotate', 0, true); },
									function(){ $('#featured').tabs('rotate', 5000, true); }
								);
								$('#featured .ui-tabs-panel a.hideshow').click(function(){
									if($(this).text()=='Hide'){
										$(this).parent('.info').animate({ 'height': '0px' }, 500);
										$(this).text('Show');
									}
									else{
										$(this).parent('.info').animate({ 'height': '70px' }, 500);
										$(this).text('Hide');
									}
									return false;
								});
							});
						</script>
						<div id="featured">
						  <ul class="ui-tabs-nav">
					        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="image/slideshow/image1-small.jpg" alt="" /><span>15+ Excellent High Speed Photographs</span></a></li>
					        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="image/slideshow/image2-small.jpg" alt="" /><span>20 Beautiful Long Exposure Photographs</span></a></li>
					        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="image/slideshow/image3-small.jpg" alt="" /><span>35 Amazing Logo Designs</span></a></li>
					        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="image/slideshow/image4-small.jpg" alt="" /><span>Create a Vintage Photograph in Photoshop</span></a></li>
					      </ul>

					    	<!-- First Content -->
						    <div id="fragment-1" class="ui-tabs-panel" style="">
								<img src="image/slideshow/banner.jpg" alt="" width="700" height="255" />
								 <!-- <div class="info" >
									<a class="hideshow" href="#" >X</a>
									<h2><a href="#" >15+ Excellent High Speed Photographs</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt condimentum lacus. Pellentesque ut diam....<a href="#" >read more</a></p>
								 </div> -->
						    </div>

						    <!-- Second Content -->
						    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
								<img src="image/slideshow/banner1.jpg" alt="" width="700" height="255" />
								 <!-- <div class="info" >
									<a class="hideshow" href="#" >X</a>
									<h2><a href="#" >20 Beautiful Long Exposure Photographs</a></h2>
									<p>Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit....<a href="#" >read more</a></p>
								 </div> -->
						    </div>

						    <!-- Third Content -->
						    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
								<img src="image/slideshow/dich-vu-dang-tin.jpg" alt="" width="700" height="255" />
								 <!-- <div class="info" >
									<a class="hideshow" href="#" >X</a>
									<h2><a href="#" >35 Amazing Logo Designs</a></h2>
									<p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>
						         </div> -->
						    </div>

						    <!-- Fourth Content -->
						    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
								<img src="image/slideshow/LOFWI_banner-sach.png" alt="" width="700" height="255" />
								 <!-- <div class="info" >
									<a class="hideshow" href="#" >X</a>
									<h2><a href="#" >Create a Vintage Photograph in Photoshop</a></h2>
									<p>Quisque sed orci ut lacus viverra interdum ornare sed est. Donec porta, erat eu pretium luctus, leo augue sodales....<a href="#" >read more</a></p>
						         </div> -->
						    </div>
						</div>
				</div>
				<div id="cssmenu" class="row navbar-left">
					<p class="danhmuc">Danh Mục</p>
					<ul>
					   <li class="active"><a href='index.php'><span>Trang Chủ</span></a></li>
					   <li class="has-sub"><a href='#'><span>Sách Học Tiếng Anh </span></a>
					      <ul>
					         <li class="active"><a href='#'><span>Primary</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Secondary</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Adults</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Skills</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Exams</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Professional English</span></a>
					         </li>
					      </ul>
					   </li>
					   <li class="has-sub"><a href='#'><span>Sách Giáo Dục</span></a>
						<ul>
					         <li class="active"><a href='#'><span>Primary</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Secondary</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Adults</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Skills</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Exams</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Professional English</span></a>
					         </li>
					     </ul>
					   </li>
					   <li class="has-sub"><a href='#'><span>Sách Chuyên Khảo</span></a>
							<ul>
					         <li class="active"><a href='#'><span>Primary</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Secondary</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Adults</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Skills</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Exams</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Professional English</span></a>
					         </li>
					     </ul>
					   </li>
					   </li>
					   <li class="has-sub"><a href='#'><span>Sách Giảm Giá</span></a>
							<ul>
					         <li class="active"><a href='#'><span>Primary</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Secondary</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Adults</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Skills</span></a>
					         </li>
							 <li class="active"><a href='#'><span>Exams</span></a>
					         </li>
					         <li class="active"><a href='#'><span>Professional English</span></a>
					         </li>
					     </ul>
					   </li>
					   </li>
					   <li class="has-sub"><a href='#'><span>Exams</span></a>
					      <ul>
					         <li class="has-sub"><a href='#'><span>Primary</span></a>
					         	<ul>
							         <li class="has-sub"><a href='#'><span>Primary</span></a>
							         	<ul>
									         <li class="active"><a href='#'><span>Primary</span></a>
									         </li>
									         <li class="active"><a href='#'><span>Secondary</span></a>
									         </li>
											 <li class="active"><a href='#'><span>Adults</span></a>
									         </li>
									         <li class="active"><a href='#'><span>Skills</span></a>
									         </li>
											 <li class="active"><a href='#'><span>Exams</span></a>
									         </li>
									         <li class="active"><a href='#'><span>Professional English</span></a>
									         </li>
									     </ul>
							         </li>
							         <li class="active"><a href='#'><span>Secondary</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Adults</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Skills</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Exams</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Professional English</span></a>
							         </li>
							     </ul>
					         </li>
					         <li class="has-sub"><a href='#'><span>Secondary</span></a>
					         	<ul>
							         <li class="active"><a href='#'><span>Primary</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Secondary</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Adults</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Skills</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Exams</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Professional English</span></a>
							         </li>
							     </ul>
					         </li>
							 <li class="has-sub"><a href='#'><span>Adults</span></a>
							 	<ul>
							         <li class="active"><a href='#'><span>Primary</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Secondary</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Adults</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Skills</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Exams</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Professional English</span></a>
							         </li>
							     </ul>
					         </li>
					         <li class="has-sub"><a href='#'><span>Skills</span></a>
					         	<ul>
							         <li class="active"><a href='#'><span>Primary</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Secondary</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Adults</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Skills</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Exams</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Professional English</span></a>
							         </li>
							     </ul>
					         </li>
							 <li class="has-sub"><a href='#'><span>Exams</span></a>
							 	<ul>
							         <li class="active"><a href='#'><span>Primary</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Secondary</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Adults</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Skills</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Exams</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Professional English</span></a>
							         </li>
							     </ul>
					         </li>
					         <li class="has-sub"><a href='#'><span>Professional English</span></a>
					         	<ul>
							         <li class="active"><a href='#'><span>Primary</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Secondary</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Adults</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Skills</span></a>
							         </li>
									 <li class="active"><a href='#'><span>Exams</span></a>
							         </li>
							         <li class="active"><a href='#'><span>Professional English</span></a>
							         </li>
							     </ul>
					         </li>
					     </ul>
					   </li>
					   <li><a href='#'><span>Professional English</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end header -->
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
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/The Oxford Handbook of Bayesian Econometrics"><img alt="The Oxford Handbook of Bayesian Econometrics" src="image/BanChay/10.jpg"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/The Oxford Handbook of Bayesian Econometrics">The Oxford Handbook of Bayesian Econometrics</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">780.000₫</span>
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