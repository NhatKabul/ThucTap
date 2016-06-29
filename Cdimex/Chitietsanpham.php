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
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$('.autoplay').slick({
						  slidesToShow: 1,
						  slidesToScroll: 1,
						  autoplay: true,
						  autoplaySpeed: 2000,
						});
					});
				</script>
				<div id="goTop" class="toTop">
					<img src="image/icon/back-to-top.png"/>
				</div>
			<?php
				$id=$_GET['id'];
				$sql=mysql_query("SELECT * FROM products WHERE id=$id");
				while ($row=mysql_fetch_array($sql)) {
				    $giagiam=$row[2] * $row[10]/100;
				?>
			<div class="row">
				<div class="posdetail">
				
					<div class="col-md-3">
						<div class="row container">
						  <a href="" data-toggle="modal" data-target="#myModal"><img src="<?php echo $row[7]; ?>" width="250px" height="300px"></a>
						  <div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Xem trước</h4>
						        </div>
						        <div class="modal-body row">
										<section class="autoplay slider">
										    <div>
										      <img src="image/HinhSach/9780132056779.jpg" height="500px">
										    </div>
										    <div>
										      <img src="image/HinhSach/9780132795470.jpg" height="500px">
										    </div>
										    <div>
										      <img src="image/HinhSach/9780132336765.jpg" height="500px">
										    </div>
										    <div>
										      <img src="image/HinhSach/9780132795470.jpg" height="500px">
										    </div>
										   <div>
										      <img src="image/HinhSach/9780132881876.jpg" height="500px">
										    </div>
										    <div>
										      <img src="image/HinhSach/9780133437546.jpg" height="500px">
										    </div>
										    <div>
										      <img src="image/HinhSach/9780136038993.jpg" height="500px">
										    </div>
										</section>
						        </div>
						        <div class="modal-footer">
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
				    </div> <!-- /col-md-3 -->
						    <div class="col-md-4">
						    	<p class="pos-tensach"><font class="tieude">Tên Sách: </font><font class="font-tensachdetail"><?php echo $row[1]; ?></font></p>
							    <p class="pos-giasach"><font class="tieude">Tác Giả: </font><font class="name"><?php echo $row[5]; ?></font></p>
							    <p class="pos-giasach"><font class="tieude">Nhà Xuất Bản: </font><font class="name"><?php echo $row[4]; ?></font></p>
							    <p class="pos-giasach"><font class="tieude">Năm Xuất Bản: </font><font class="name"><?php echo $row[6]; ?></font></p>
							    <p class="pos-giasach"><font class="tieude">Giá: </font><font class="font-giasachdetail"><?php echo number_format($row[2]-$giagiam,0,'.',','); ?> &#8363</font><font class="font-giamgia">- <?php echo $row[10] ?>%</font><font class="font-giadau"><?php echo number_format($row[2],0,'.',','); ?> &#8363</font></p>
							    <p class="pos-giasach"><font class="tieude">Tình Trạng: </font><font class="conhang"><?php if($row[3]>0)echo "Còn Hàng"; else echo "Hết Hàng"; ?></font></p></p>
						    </div>
						    <div class="col-md-5">
						    	<p>Giới thiệu</p>
						    	<font class="seo">
						    		<?php echo $row[11]; ?>
						    	</font>
						    </div>
				</div>
				<div class="col-md-12 posdetail">
						 <ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#menu1">GIỚI THIỆU</font></a></li>
						    <li><a data-toggle="tab" href="#menu2">THÔNG TIN</font></a></li>
						 </ul>

						 <div class="tab-content">
						    <div id="menu1" class="tab-pane fade in active">
						      <table class="table table-bordered">
						      	<tr>
						      		<td>
						      		 <?php echo $row[11]; ?>
						      		</td>
						      	</tr>
						      </table>
						   
						    </div>
						    <div id="menu2" class="tab-pane fade">
						      <table class="table table-bordered">
						      	<tr class="ctsp">
						      		<td class="ctsp">
						      			Tên Sách:
						      		</td>
						      		<td>
						      			<?php echo $row[1]; ?>
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			Tác giả:
						      		</td>
						      		<td>
						      			<?php echo $row[5]; ?>
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			Nhà Xuất Bản:
						      		</td>
						      		<td>
						      			<?php echo $row[4]; ?>
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			Năm Xuất Bản:
						      		</td>
						      		<td>
						      			<?php echo $row[6]; ?>
						      		</td>
						      	</tr>
						      </table>
						    </div>
						 </div>
				</div>
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
				<div class="col-xs-12">
				  <div id="phanvung">
					<p><b>SẢN PHẨM CÙNG LOẠI</b></p>
					<section class="center slider">
				  	<?php
				  		$sql1=mysql_query("SELECT tensach, dongia, giamgia, hinhanh, id FROM products WHERE detail_id='$row[8]'");
				  		while ($row1=mysql_fetch_array($sql1)) {
				  			$giagiam=$row1[1] * $row1[2]/100;
				  	?>
				    <div>
				      <a href="Chitietsanpham.php?id=<?php echo $row1[4]; ?>"><img src="<?php echo $row1[3]; ?>" height="200px" width="100%"></a>
				      <p class="pos-tensach"><font class="font-tensach"><?php echo $row1[0]; ?></font></p>
				      <p class="pos-giasach"><font class="font-giasach"><?php echo number_format($row1[1]-$giagiam,0,'.',',') ?> &#8363</font><font class="font-giamgia">- <?php echo $row1[2]; ?>%</font></p>
				      <p class="pos-giasach"><font class="font-giadau"><?php echo number_format($row1[1],0,'.',','); ?> &#8363</font></p>
				      <p class="btn-themgiohang"><button type="button" class="btn btn-default" onclick="location.href='add.php?id=<?php echo $row[0]; ?>'">Thêm Vào Giỏ Hàng</button></p>
				    </div>
				    <?php
					}
					?>
				  	</section>
				  </div>
				</div>
			</div>
			<?php } 
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