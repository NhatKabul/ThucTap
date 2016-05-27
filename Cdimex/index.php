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
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 90%;
        margin: 50px;
        top: -20px;
    }

    .slick-slide {
      margin: 10px 20px;
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
		  <div class="col-md-2 row"><img src="image/logo/logo.png"></div>
		  <div class="col-md-10">
		  	<h3 align="center" class="font-chu" size="5">CÔNG TY TNHH MTV XUẤT NHẬP KHẨU <br>
					VÀ PHÁT TRIỂN VĂN HÓA
			</h3>
		  </div>
		</div><!-- banner -->
		<div class="row">
			<div class="container">	
				<div class="navbar-right">
						<div class="row">
							<div class="col-md-8">
							  	<div class="form-group">
							  		<form class="form-inline">
									  	<input type="text" class="form-control" placeholder="Nhập từ tìm kiếm..." size="65"><button type="button" class="btn btn-primary">Tìm</button>
									</form>
								</div>
							</div>
							<div class="col-md-2">
							  	<button type="button" class="btn btn-link"> <img src="image/icon/dn.jpg" width="30" height="28"><font size="2">Đăng Nhập</font></button>
							</div>
							<div class="col-md-2"><button type="button" class="btn btn-link"> <img src="image/icon/images.png" width="30" height="28"><font size="2">Giỏ Hàng<a href=""></a></font></button></div>
							
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
					<ul>
<<<<<<< HEAD
					   <li class="active"><p>Danh Mục</p></li>
					   <li class="active"><a href='index.html'><span>Trang Chủ</span></a></li>
					   <li class="has-sub"><a href='#'><span>Sách Học Tiếng Anh </span></a>
=======
					   <li><p>Danh Mục</p></li>
					   <li><a href='index.html'><span>Home</span></a></li>
					   <li class="has-sub"><a href='#'><span>Products</span></a>
>>>>>>> origin/master
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
					   <li><a href='#'><span>Professional English</span></a></li>
					</ul>
				</div>
			</div>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".center").slick({
							dots: true,
							infinite: true,
							centerMode: true,
							slidesToShow: 3,
							slidesToScroll: 3
							});
						});
				</script>
				<div class="col-md-9 navbar-left">
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
				<div class="col-md-3 col-md-6 navbar-right">
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
										<a href="/laptop-apple-macbook-air-md711zp-b"><img alt="Laptop Macbook Air" src="image/sach/download.jpg" width="60" height="60"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/laptop-apple-macbook-air-md711zp-b">Laptop Macbook Air</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">20.900.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/laptop-toshiba-satellite-c40-a138"><img alt="Laptop Toshiba Satellite" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/19409_12896_satellite-c40-a102e-1.jpg?v=1446716755747"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/laptop-toshiba-satellite-c40-a138">Laptop Toshiba Satellite</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">9.000.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/laptop-hp-probook-440-g2-k9r17pa"><img alt="Laptop HP Probook" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/hp_probook_440_01.jpg?v=1446716755943"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/laptop-hp-probook-440-g2-k9r17pa">Laptop HP Probook</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">14.790.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/laptop-dell-vostro-14-5000-series"><img alt="Laptop Dell Vostro" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/dell_vostro_14_5480_01.jpg?v=1446716755953"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/laptop-dell-vostro-14-5000-series">Laptop Dell Vostro</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">11.510.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/laptop-asus-transformer-book-flip-tp550la-cj040h"><img alt="Laptop Asus Transformer" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/tp550ld-cj084h-01_rabz-50_ieap-cm_dv21-0f.jpg?v=1446716755810"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/laptop-asus-transformer-book-flip-tp550la-cj040h">Laptop Asus Transformer</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">10.590.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/bo-chia-cong-usb-ibuffalo-4-cong"><img alt="Bộ chia cổng USB" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/hub-usb-ibuffalo-bsh4u06bk.jpg?v=1446716757290"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/bo-chia-cong-usb-ibuffalo-4-cong">Bộ chia cổng USB</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_new">260.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/o-cung-di-dong-wd-my-passport-ultra-1tb"><img alt="Ổ cứng di động WD" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/wd-my-passport-ultra-black-01.jpg?v=1446716755797"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/o-cung-di-dong-wd-my-passport-ultra-1tb">Ổ cứng di động WD</a></h3>
									</div>
									
									<div class="box_pr_price">
										<span class="pr_old">1.890.000₫</span>
									</div>
									<div class="box_pr_price">
										<span class="pr_new">1.850.000₫</span>
									</div>
									
								</div>
							</li>
							
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<a href="/chuot-hong-ngoai-elecom"><img alt="Chuột hồng ngoại" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/elecom-m-ir06drbk-01.jpg?v=1446716756750"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/chuot-hong-ngoai-elecom">Chuột hồng ngoại</a></h3>
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
										<a href="/ban-phim-khong-day-rapoo-e2700"><img alt="Bàn phím không dây" src="//bizweb.dktcdn.net/thumb/large/100/029/262/products/rapoo-e2700-b-01.jpg?v=1446716755767"> </a>
									</div>
									<div class="box_pr_title">
										<h3><a href="/ban-phim-khong-day-rapoo-e2700">Bàn phím không dây</a></h3>
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

				</div>
			</div>
    </div>
</body>
</html>