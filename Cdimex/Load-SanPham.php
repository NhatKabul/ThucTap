			<?php
				include("Thuvien.php");
			?>
		<div class="row">
			<!-- start header -->
			<?php
				include("Views/Header.php"); 
			?>
			<!-- end header -->
			<!-- modal -->
			<!-- modal Login -->
			<?php
				include("Login.php");
			?>
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
			<div class="row">
				<div class="col-xs-9">
				<?php
					$page=$_GET['page'];
					$sql=mysql_query("SELECT * FROM menu WHERE id='$page'");
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
				  <section>
				  	<?php
				  		$sql1=mysql_query("SELECT tensach, dongia, giamgia, hinhanh FROM products pd, menu_detail md, menu m WHERE m.id=md.menu_id AND md.tenmenu=pd.detail_id AND md.menu_id='$page' LIMIT 0,10");
				  		while ($row1=mysql_fetch_array($sql1)) {
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
				<?php
				}
				?>
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