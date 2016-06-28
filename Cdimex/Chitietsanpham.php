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
			<div class="row">
				<div class="posdetail">
					<div class="col-md-3">
						<div class="row container">
						  <a href="" data-toggle="modal" data-target="#myModal"><img src="image/HinhSach/9780132056779.jpg" width="250px" height="300px"></a>
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
				    
				    <?php
				    	$id=$_GET['id'];
				    	$sql=mysql_query("SELECT * FROM products WHERE id=$id");
				    	while ($row=mysql_fetch_array($sql)) {?>
						    <div class="col-md-4">
						    	<p class="pos-tensach"><font class="tieude">Tên Sách: </font><font class="font-tensachdetail"><?php echo $row[1]; ?></font></p>
							    <p class="pos-giasach"><font class="tieude">Tác Giả: </font><font class="name">ABC</font></p>
							    <p class="pos-giasach"><font class="tieude">Nhà Xuất Bản: </font><font class="name">Kim Đồng</font></p>
							    <p class="pos-giasach"><font class="tieude">Năm Xuất Bản: </font><font class="name">1995</font></p>
							    <p class="pos-giasach"><font class="tieude">Giá: </font><font class="font-giasachdetail">400000 &#8363</font><font class="font-giamgia">-40%</font><font class="font-giadau">500000 &#8363</font></p>
							    <p class="pos-giasach"><font class="tieude">Tình Trạng: </font><font class="conhang">Còn hàng</font></p></p>
						    </div>
						    <div class="col-md-5">
						    	<p>Giới thiệu</p>
						    	<font class="seo">
						    		Sách báo, tạp chí, xuất bản phẩm và tài liệu khoa học kỹ thuật, văn hóa phục vụ cho các viện, trường đại học và thư viện trong nước.- 
									Các loại vật tư, thiết bị, hàng hóa phục vụ ngành văn hóa như: nhạc cụ, thiết bị âm thanh ánh sáng dùng cho biểu diễn, hội nghị,
									phòng thu… Tranh, tượng, đồ gỗ, sản phẩm mỹ nghệ, các chương trình âm thanh, chương trình hình ảnh động, các ấn phẩm, sản phẩm quảng cáo. - Vật tư thiết bị, nguyên vật liệu phục vụ sản xuất.
									Vật tư thiết bị ngành in, các ấn phẩm in trên các chất liệu khác nhau.- Trang thiết bị văn phòng, văn hóa phẩm, vật liệu trang trí nội thất và các mặt hàng tiêu dùng khác.
									Mua bán, cho thuê văn phòng làm việc.
									Thi công thực hiện việc trang âm (cách âm, hút âm) cho phòng thu, nhà hát, phòng hội nghị… Hoàn thiện nội thất công trình.- Các sản phẩm văn hóa khác theo qui định của pháp luật.
						    	</font>
						    </div>
				    	<?php } 
				    ?>
				    
				</div>
				<div class="col-md-12 posdetail">
						 <ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#menu1">GIỚI THIỆU</font></a></li>
						    <li><a data-toggle="tab" href="#menu2">THÔNG TIN</font></a></li>
						    <li><a data-toggle="tab" href="#menu3">TAG</font></a></li>
						 </ul>

						 <div class="tab-content">
						    <div id="menu1" class="tab-pane fade in active">
						      <table class="table table-bordered">
						      	<tr>
						      		<td>
						      		 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
						      		 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
						      		</td>
						      	</tr>
						      </table>
						   
						    </div>
						    <div id="menu2" class="tab-pane fade">
						      <table class="table table-bordered">
						      	<tr class="ctsp">
						      		<td class="ctsp">
						      			Mã hàng:
						      		</td>
						      		<td>
						      			Unknown
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			Tác giả
						      		</td>
						      		<td>
						      			Unknown
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			NXB
						      		</td>
						      		<td>
						      			Unknown
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			Năm XB
						      		</td>
						      		<td>
						      			Unknown
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			Kích thước
						      		</td>
						      		<td>
						      			Unknown
						      		</td>
						      	</tr>
						      	<tr class="ctsp">
						      		<td>
						      			Ngôn ngữ
						      		</td>
						      		<td>
						      			Unknown
						      		</td>
						      	</tr>
						      </table>
						    </div>
						    <div id="menu3" class="tab-pane fade">
						      <table class="table table-bordered">
						      	<tr>
						      		<td>
						      		 <p>Thêm tags của bạn:</p>
						      		 <input type="text" class="form-control" size="10%">
					          		<button type="submit" class="btn btn-primary">THÊM TAGS</button><br><br>
					          		<p>Sử dụng khoảng trắng để phân cách các tags. Sử dụng dấu nháy đơn (') cho cụm từ.</p><br>
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