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
				<div id="goTop" class="toTop">
					<img src="image/icon/back-to-top.png"/>
				</div>
			<div class="container row">
				<div class="navbar">
					<div class="col-xs-12">
						<br><p class="font-footer2"><font>GIỚI THIỆU CHUNG</font></p><br>
					</div>
					<div class="col-xs-12 border"></div>
					<div class="container"><font class="font-tintuc">
						<div class="font-chu2"><font color="black">
						Công ty Cổ phần Xuất nhập khẩu và Phát triển Văn hóa<br>
						- Tên giao dịch : CULTURAL DEVELOPMENT & IMPORT-EXPORT JOIN STOCK COMPANY<br>
						- Tên viết tắt: CDIMEX<br>
						- Năm thành lập : 1996<br></FONT>
						
						<p align="center"><img src="image/logo/logo.png" width="12%" height="12%"><br>
							99A Nguyễn Văn Trỗi, Phường 12, Quận Phú Nhuận, Tp. Hồ Chí Minh <br>
							Điện thọai : 08. 39974755 - 08.39973371 – 08.39970829<br>
							Fax : 08.39973792<br>
							Email: nhasachngoaivan@cdimex.com.vn hoặc  cdimexco@cdimex.com.vn<br>
							Website: nhasachngoaivan.vn hoặc www.cdimex.com.vn<br>
							Giấy chứng nhận đăng ký kinh doanh số : 0300444623<br>
						</p>
						
							<font color="black"><p>LĨNH VỰC HOẠT ĐỘNG:<br>

							<b>Xuất nhập khẩu và kinh doanh:</b> <br><br></font>
							Sách báo, tạp chí, xuất bản phẩm và tài liệu khoa học kỹ thuật, văn hóa phục vụ cho các viện, trường đại học và thư viện trong nước.- 
							Các loại vật tư, thiết bị, hàng hóa phục vụ ngành văn hóa như: nhạc cụ, thiết bị âm thanh ánh sáng dùng cho biểu diễn, hội nghị,
							phòng thu… Tranh, tượng, đồ gỗ, sản phẩm mỹ nghệ, các chương trình âm thanh, chương trình hình ảnh động, các ấn phẩm, sản phẩm quảng cáo. - Vật tư thiết bị, nguyên vật liệu phục vụ sản xuất.
							Vật tư thiết bị ngành in, các ấn phẩm in trên các chất liệu khác nhau.- Trang thiết bị văn phòng, văn hóa phẩm, vật liệu trang trí nội thất và các mặt hàng tiêu dùng khác.
							Mua bán, cho thuê văn phòng làm việc.
							Thi công thực hiện việc trang âm (cách âm, hút âm) cho phòng thu, nhà hát, phòng hội nghị… Hoàn thiện nội thất công trình.- Các sản phẩm văn hóa khác theo qui định của pháp luật.
							<br><br>
							<font color="black"><b>Dịch vụ:</b> <br></font>
							Tư vấn đầu tư và tiếp nhận tài trợ để xây dựng công trình văn hóa.<br>
							Đầu tư xây dựng các Trung tâm Văn hóa, các khu vui chơi giải trí. <br>
							Quảng cáo, phát hành xuất bản phẩm. <br>
							Tổ chức biểu diễn các chương trình ca nhạc chuyên nghiệp. <br>
							Cà phê nhạc, biểu diễn thời trang, karaoke.<br></p>
						</div>
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