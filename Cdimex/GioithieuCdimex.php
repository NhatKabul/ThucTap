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
			<div class="container row">
				<div class="navbar">
					<div class="posdetail">
					  	<ul class="nav nav-tabs">
							    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail">Giới Thiệu Cdimex</font></a></li>
						</ul>
					</div>
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