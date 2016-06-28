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
				  		$sql1=mysql_query("SELECT tensach, dongia, giamgia, hinhanh FROM products pd, menu_detail md, menu m WHERE m.id=md.menu_id AND md.tenmenu=pd.detail_id AND md.menu_id='$page'");
				  		$sodong = 4;
				  		$tongsodong = mysql_num_rows($sql1);
				  		$tongsotrang = ceil($tongsodong/$sodong);
				  		if(isset($_GET['p']))
				  			$p=$_GET['p'];
				  		else
				  			$p=1;
				  		$vitri=($p-1)*$sodong;
				  		$sql2=mysql_query("SELECT tensach, dongia, giamgia, hinhanh FROM products pd, menu_detail md, menu m WHERE m.id=md.menu_id AND md.tenmenu=pd.detail_id AND md.menu_id='$page' LIMIT $vitri,$sodong");
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
				<?php
				}
				?>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<ul class="pagination">
						<?php
							$url=$_SERVER['PHP_SELF'];
								if($p>1)
								{
									$pages=$p-1;
									$prev="
									<li>
										<a href='$url?page=$page&p=$pages'>
										    <span aria-hidden='true'>&lsaquo;</span>
										</a>
									</li>";
									$first="
									<li>
										<a href='$url?page=$page&p=1'>
										    <span aria-hidden='true'>&laquo;</span>
										</a>
									</li>";
								}
								else
								{
									$prev=' ';
									$first=' ';
								}
								if($p<$tongsotrang)
								{
									$pages=$p+1;
									$next="
									<li>
										<a href='$url?page=$page&p=$pages'>
										    <span aria-hidden='true'>&rsaquo;</span>
										</a>
									</li>";
									$last="
									<li>
										<a href='$url?page=$page&p=$tongsotrang'>
										    <span aria-hidden='true'>&raquo;</span>
										</a>
									</li>";
								}
								else
								{
									$next=' ';
									$last=' ';
								}
								echo $first.$prev;
								for($i=1;$i<=$tongsotrang;$i++)
								{
									if($i==$p)
									{
										echo "<li class='active'><a> $i <span class='sr-only'>(current)</span></a></li>";
									}
									else
									{
										echo "<li><a href='$url?page=$page&p=$i'>$i</a></li>";
									}
								}
								echo $next.$last;
								?>
						</ul>
					</div>
					<div class="col-md-4"></div>
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