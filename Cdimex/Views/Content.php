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
			<div class="row">
				<div class="col-xs-9 navbar-left">
				<?php
					if(isset($_GET['key']))
					{ ?>
						<div class="posdetail">
						  	<ul class="nav nav-tabs">
								    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail">
								    Tìm Kiếm
								    </font></a></li>
							</ul>
						</div>
						<div class="posdetail">
						  	<img src="image/banner/banner1.jpg" width="100%" height="250px">
						</div>
						<section>
					  	<?php
					  		$key=$_GET['key'];
					  		$sql1=mysql_query("SELECT tensach, dongia, giamgia, hinhanh  FROM products WHERE tensach LIKE '%$key%'");
					  		$sodong = 4;
					  		$tongsodong = mysql_num_rows($sql1);
					  		$tongsotrang = ceil($tongsodong/$sodong);
					  		if(isset($_GET['p']))
					  			$p=$_GET['p'];
					  		else
					  			$p=1;
					  		$vitri=($p-1)*$sodong;
					  		$sql2=mysql_query("SELECT tensach, dongia, giamgia, hinhanh  FROM products WHERE tensach LIKE '%$key%' LIMIT $vitri,$sodong");
					  		while ($row1=mysql_fetch_array($sql2)) {
					  			$giagiam=$row1[1] * $row1[2]/100;
					  	?>
					    <div class="col-md-3">
					      <a href="Chitietsanpham.php"><img src="<?php echo $row1[3]; ?>" height="200px" width="100%"></a>
					      <p class="pos-tensach"><font class="font-tensach"><?php echo $row1[0]; ?></font></p>
					      <p class="pos-giasach"><font class="font-giasach"><?php echo $row1[1] - $giagiam; ?> &#8363</font><font class="font-giamgia">- <?php echo $row1[2]; ?>%</font></p>
					      <p class="pos-giasach"><font class="font-giadau"><?php echo $row1[1]; ?> &#8363</font></p>
					      <p class="btn-themgiohang"><button type="button" class="btn btn-default">Thêm Vào Giỏ Hàng</button></p>
					    </div>
					    <?php
						}
						?>
					  	</section>
					<?php }
					else
					{
					$sql=mysql_query("SELECT * FROM menu");
					while ($row=mysql_fetch_array($sql)) {
				?>
				  <div class="posdetail">
				  	<ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail"><?php echo $row[1]?></font></a></li>
					</ul>
				  </div>
				  <div class="posdetail">
				  	<img src="image/banner/banner1.jpg" width="100%" height="250px">
				  </div>
				  <section class="center slider">
				  	<?php
				  		$sql1=mysql_query("SELECT tensach, dongia, giamgia, hinhanh, pd.id FROM products pd, menu_detail md, menu m WHERE m.id=md.menu_id AND md.tenmenu=pd.detail_id AND md.menu_id='$row[0]' LIMIT 0,10");
				  		while ($row1=mysql_fetch_array($sql1)) {
				  			$giagiam=$row1[1] * $row1[2]/100;
				  	?>
				    <div>
				      <a href="Chitietsanpham.php"><img src="<?php echo $row1[3]; ?>" height="200px" width="100%"></a>
				      <p class="pos-tensach"><font class="font-tensach"><?php echo $row1[0]; ?></font></p>
				      <p class="pos-giasach"><font class="font-giasach"><?php echo $row1[1] - $giagiam; ?> &#8363</font><font class="font-giamgia">- <?php echo $row1[2]; ?>%</font></p>
				      <p class="pos-giasach"><font class="font-giadau"><?php echo $row1[1]; ?> &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default" onclick="location.href='add.php?id=<?php echo $row1[4]; ?>'">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <?php
					}
					?>
				  </section>
				  <a  href="Load-SanPham-Menucha.php?page=<?php echo $row[0] ?>"><p align="center">Xem tất cả</p></a>
				<?php
					}
				}
				?>
				</div>
				<div class="col-xs-3 col-xs-6 navbar-right">
					<div class="box_produt_hot">
						<div class="title_box">
							<h2><b>SẢN PHẨM BÁN CHẠY</b></h2>
						</div>
						<ul class="available_pc">
							<?php
								$sql=mysql_query("SELECT tensach, dongia, giamgia, hinhanh  FROM products ORDER BY luotmua DESC LIMIT 0,10");
								while ($row=mysql_fetch_array($sql)) {
								$giamgia=$row[1]*$row[2]/100;
							?>
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<img src="<?php echo $row[3];?>" with="50px" height="100px">
									</div>
									<div class="box_pr_title">
										<h3><a href=""><?php echo $row[0];?></a></h3>
									</div>
									<div class="box_pr_price">
										<span class="pr_new"><?php echo $row[1]-$giamgia;?></span>
									</div>
								</div>
							</li>
							<?php
							}
							?>
							<div class="more_view"><a href="SanPham.php?page=luotmua">Xem Thêm</a>
							</div>
						</ul>
					</div>
					<div class="box_produt_hot">
						<div class="title_box">
							<h2><b>SẢN PHẨM GIẢM GIÁ</b></h2>
						</div>
						<ul class="available_pc">
							<?php
								$sql=mysql_query("SELECT tensach, dongia, giamgia, hinhanh  FROM products ORDER BY giamgia DESC LIMIT 0,10");
								while ($row=mysql_fetch_array($sql)) {
								$giamgia=$row[1]*$row[2]/100;
							?>
							<li>
								<div class="box_pr_small">
									<div class="box_pr_img">
										<img src="<?php echo $row[3];?>" with="50px" height="100px">
									</div>
									<div class="box_pr_title">
										<h3><a href=""><?php echo $row[0];?></a></h3>
									</div>
									<div class="box_pr_price">
										<span class="pr_new"><?php echo $row[1]-$giamgia;?></span>
									</div>
								</div>
							</li>
							<?php
							}
							?>
							<div class="more_view"><a href="SanPham.php?page=giamgia">Xem Thêm</a>
							</div>
						</ul>
					</div>
				</div>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$('.autoplay').slick({
						  slidesToShow: 5,
						  slidesToScroll: 1,
						  autoplay: true,
						  autoplaySpeed: 2000,
						});
					});
				</script>
				<div class="col-xs-12">
				  <div id="phanvung">
					<p><b>Đối Tác</b></p>
				  </div>
				  <section class="autoplay slider">
				    <div>
				      <img src="image/HinhSach/9780132056779.jpg" height="70px">
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="70px">
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132336765.jpg" height="70px">
				    </div>
				    <div>
				      <img src="image/HinhSach/9780132795470.jpg" height="70px">
				    </div>
				   <div>
				      <img src="image/HinhSach/9780132881876.jpg" height="70px">
				    </div>
				    <div>
				      <img src="image/HinhSach/9780133437546.jpg" height="70px">
				    </div>
				    <div>
				      <img src="image/HinhSach/9780136038993.jpg" height="70px">
				    </div>
				  </section>
				</div>
			</div>