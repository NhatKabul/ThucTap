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
<<<<<<< HEAD
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
			
=======
			<?php
				include("Views/Header.php"); 
			?>
>>>>>>> origin/master
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
			<?php
				include("Views/Content.php");
			?>
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