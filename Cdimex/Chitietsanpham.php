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
			<div class="modal" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng Nhập</h3>
				       <p align="center">Nếu bạn chưa có tài khoản, <a href="#" align="left" data-toggle="modal" data-target="#modalpugin">Đăng Ký</a><p>
				      </div>
				      <div class="modal-body">
							<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-4 control-label"> Nhập Email</label>
								    <div class="col-sm-6">
								      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label"> Nhập Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Lưu tài khoản
								        </label>
								      </div>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="button" class="btn btn-link" data-dismiss="modal">Quên mật khẩu</button>
				       				 <button type="button" class="btn btn-primary">Đăng Nhập</button>
								    </div>
								  </div>
							</form>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
				<!-- modal dang ky-->
				<div class="modal " id="modalpugin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng ký tài khoản</h3>
				        <p align="center">Nếu bạn đã có tài khoản, <a href="#"data-toggle="modal" data-target="#modallogin" >Đăng Nhập </a><p>
				      </div>
				      <div class="modal-body">
							<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
								    <div class="col-sm-6">
								      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Mật Khẩu</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Họ và tên</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputname" placeholder="name">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Giới tính</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputsex" placeholder="Sex">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Ngày sinh</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputNS" placeholder="NS">
								    </div>
								  </div>
								   <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox">
								          <h4> <font size="2">Nhan Cac Thong Tin Va Chuong Trinh Khuyen Mai Qua Email</font></h4>
								          <h4><font size="2">Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo điều kiện sử dụng và chính sách của Tiki.</font></h4>
								        </label>
								      </div>
								    </div>
								  <div class="form-group">
								    <div class="col-sm-offset-4 col-sm-10">
				       				 <button type="button" class="btn btn-primary">Đăng Ký</button>
								    </div>
								  </div>
							</form>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
			</div>
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
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
				    </div> <!-- /col-md-3 -->
				    <div class="col-md-4">
				    	<p class="pos-tensach"><font class="tieude">Tên Sách: </font><font class="font-tensachdetail">Sách Giáo Khoa</font></p>
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
				</div>
				<div class="col-md-12 posdetail">
						 <ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#menu1">GIỚI THIỆU</font></a></li>
						    <li><a data-toggle="tab" href="#menu2">THÔNG TIN</font></a></li>
						    <li><a data-toggle="tab" href="#menu3">TAG</font></a></li>
						 </ul>

						 <div class="tab-content">
						    <div id="menu1" class="tab-pane fade in active">
						      <table border="1" width="1130" height="90">
						      	<tr>
						      		<td>
						      		 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
						      		 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
						      		</td>
						      	</tr>
						      </table>
						   
						    </div>
						    <div id="menu2" class="tab-pane fade">
						      <table border="1"  bordercolor="#000000" width="1130" height="330">
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
						      <table border="1" width="1130">
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