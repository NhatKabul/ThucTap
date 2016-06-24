			<div>	
				<div>
					<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container">

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li><a href="Giohang.php"><img src="image/icon/images.png" height="20"><b> <font color="#3366FF">Giỏ Hàng</font> <span class="badge">0
						    </span></b></a></li>
					      </ul>
					       <ul class="nav navbar-nav">
					        <li><a href="show_cart.php"><img src="image/icon/hotline.jpg" height="20"><b><font color="#3366FF"> Hỗ Trợ Khách Hàng</font> </b></a></li>
					      </ul>
					      <form class="navbar-form navbar-left" role="search">
					        <div class="input-group">
					          <tr>
					          	<input type="text" class="form-control" placeholder="Search" size="50%">
					          	<span class="input-group-btn"><button type="submit" class="btn btn-primary">Tìm</button></span>
					          </tr>
					        </div>
					      </form>
					        <ul class="nav navbar-nav">
					        <li><a href="show_cart.php"><img src="image/icon/phone.png" height="20"><b> <font color="#3366FF">HotLine:<font color="#ff0000">(08)39974755</font></font> 
						    </b></a></li>
					      </ul>
					      <ul class="nav navbar-nav navbar-right">
					        <li class="dropdown">
					          <a class="dropdown-toggle"><b><font color="#3366FF">Đăng Nhập</font><b><span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a class="btn btn-link btn-sl menu" data-toggle="modal" data-target="#modallogin"><image src="image/icon/dn.jpg" width="20" height="20"> Đăng Nhập</a></li>
					            <li><a class="btn btn-link btn-sl menu" data-toggle="modal" data-target="#modalpugin"><image src="image/icon/dk.png" width="20" height="20"> Đăng Ký</a></li>
					          </ul>
					        </li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div> 
				<div>
					<div class="navbar-right col-xs-10 row">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="image/slideshow/harrison.gif" alt="Chania">
						    </div>

						    <div class="item">
						      <img src="image/slideshow/4.jpg" alt="Chania">
						    </div>

						    <div class="item">
						      <img src="image/slideshow/5.jpg" alt="Flower">
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
					<div id="cssmenu" class="navbar-left col-xs-2 row">
								<p class="danhmuc">Danh Mục</p>
								<ul>
									<?php
										include("ketnoi.php");
										$sql=mysql_query("SELECT * FROM menu");
										while ($row=mysql_fetch_array($sql)) {
									?>
								   <li class="active"><a href='Load-SanPham.php?page'><span><?php echo $row[1];?></span></a>
								   <?php
								   		$sql2=mysql_query("SELECT * FROM menu_detail where menu_id='$row[0]'");
								   		$count=mysql_num_rows($sql2);
								   		if($count>1){
								   ?>
								   		<ul>
								   			<li>
									            <div class="div-menu">
														<div class="col-md-3">
															<?php
																$sql1=mysql_query("SELECT * FROM menu_detail where menu_id='$row[0]' limit 0,10");
																while ($row1=mysql_fetch_array($sql1)) {
															?>
															<button class="btn btn-link menu" onclick="location.href='index.php'"><?php echo $row1[0];?></button>
															<?php
															}
															?>
														</div>
														<div class="col-md-3">
															<?php
																$sql1=mysql_query("SELECT * FROM menu_detail where menu_id='$row[0]' limit 11,20");
																while ($row1=mysql_fetch_array($sql1)) {
															?>
															<button class="btn btn-link menu" onclick="location.href='index.php'"><?php echo $row1[0];?></button>
															<?php
															}
															?>
														</div>
														<div class="col-md-3">
															<?php
																$sql1=mysql_query("SELECT * FROM menu_detail where menu_id='$row[0]' limit 21,30");
																while ($row1=mysql_fetch_array($sql1)) {
															?>
															<button class="btn btn-link menu" onclick="location.href='index.php'"><?php echo $row1[0];?></button>
															<?php
															}
															?>
														</div>
														<div class="col-md-3">
															<?php
																$sql1=mysql_query("SELECT * FROM menu_detail where menu_id='$row[0]' limit 31,40");
																while ($row1=mysql_fetch_array($sql1)) {
															?>
															<button class="btn btn-link menu" onclick="location.href='index.php'"><?php echo $row1[0];?></button>
															<?php
															}
															?>
														</div>
										     	</div>
									     	</li>
										</ul>
										<?php } ?>
								   </li>
								   <?php
									}
								   ?>
								   <li><a href='#'><span>SÁCH BÁN CHẠY</span></a></li>
								   <li><a href='#'><span>SÁCH GIẢM GIÁ</span></a></li>
								   <li><a href='#'><span>SÁCH MỚI</span></a></li>
								</ul>
					</div>
				</div>
			</div>