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
</head>

<body>
    <div class="container">
    	<div class="nen row"><!-- banner -->
		  <div class="col-md-2"><img src="image/logo/logo.png"></div>
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
									  	<input type="text" class="form-control" placeholder="Nhập từ tìm kiếm..." size="65">
									  	<button type="button" class="btn btn-info">TÌM KIẾM</button>
									</form>
								</div>
							</div>
							<div class="col-md-2">
							  	<button type="button" class="btn btn-default"><font size="2">Đăng Nhập</font></button>
							</div>
							<div class="col-md-2"><button type="button" class="btn btn-link"> <img src="image/icon/images.png" width="30" height="28"><font size="2"> Giỏ Hàng <a href=""></a></font></button></div>
							
						</div>
						<div id="featured">
						  <ul class="ui-tabs-nav">
					        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="image/slideshow/image1-small.jpg" alt="" /><span>15+ Excellent High Speed Photographs</span></a></li>
					        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="image/slideshow/image2-small.jpg" alt="" /><span>20 Beautiful Long Exposure Photographs</span></a></li>
					        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="image/slideshow/image3-small.jpg" alt="" /><span>35 Amazing Logo Designs</span></a></li>
					        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="image/slideshow/image4-small.jpg" alt="" /><span>Create a Vintage Photograph in Photoshop</span></a></li>
					      </ul>

					    	<!-- First Content -->
						    <div id="fragment-1" class="ui-tabs-panel" style="">
								<img src="image/slideshow/image1.jpg" alt="" />
								 <div class="info" >
									<a class="hideshow" href="#" >Hide</a>
									<h2><a href="#" >15+ Excellent High Speed Photographs</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt condimentum lacus. Pellentesque ut diam....<a href="#" >read more</a></p>
								 </div>
						    </div>

						    <!-- Second Content -->
						    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
								<img src="image/slideshow/image2.jpg" alt="" />
								 <div class="info" >
									<a class="hideshow" href="#" >Hide</a>
									<h2><a href="#" >20 Beautiful Long Exposure Photographs</a></h2>
									<p>Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit....<a href="#" >read more</a></p>
								 </div>
						    </div>

						    <!-- Third Content -->
						    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
								<img src="image/slideshow/image3.jpg" alt="" />
								 <div class="info" >
									<a class="hideshow" href="#" >Hide</a>
									<h2><a href="#" >35 Amazing Logo Designs</a></h2>
									<p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>
						         </div>
						    </div>

						    <!-- Fourth Content -->
						    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
								<img src="image/slideshow/image4.jpg" alt="" />
								 <div class="info" >
									<a class="hideshow" href="#" >Hide</a>
									<h2><a href="#" >Create a Vintage Photograph in Photoshop</a></h2>
									<p>Quisque sed orci ut lacus viverra interdum ornare sed est. Donec porta, erat eu pretium luctus, leo augue sodales....<a href="#" >read more</a></p>
						         </div>
						    </div>
						</div>
				</div>
				<div id="cssmenu" class="row navbar-left">
					<ul>
					   <li class="active"><p>Danh Mục</p></li>
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
    </div>
</body>
</html>