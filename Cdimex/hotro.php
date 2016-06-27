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
				<form class="col-xs-6 row">
					<table class="table-hotro" border="1" width="500" height="300" >
						<tr class="mau-hotro">
							<td colspan="2" align="center"><b>CTY CỔ PHẦN XUẤT NHẬP KHẨU & PHÁT TRIỂN VĂN HÓA<br>
								– – – –¤– – – –<br>
								 Địa chỉ: 99A Nguyễn Văn Trỗi, P. 12, Q. Phú Nhuận, Tp. HCM<br>
								Điện thoại: (08) 399 70829 - Fax (08) 399 73792<br>
								Email:  nhasachngoaivan@cdimex.com.vn</b></td>
						</tr>
						<tr class="mau-hotro">
							
							<td colspan="2"><b><i>PHÒNG KINH DOANH</i></b></td>
						</tr>
						<tr>
							<td>Mr. Trần Trọng Minh - Trưởng phòng ELT<br>
							(08) 39973371 - 0913 193 908<br>
							trongminh@cdimex.com.vn</td>
							<td>Mrs. Ngô Thị Hương Thủy -Trưởng phòng ACADEMIC<br>
								(08) 39970829 - 01698 828 098<br>
								huongthuy@cdimex.com.vn</td>
						</tr>
						<tr class="mau-hotro">
							<td><b><i>ĐẠI DIỆN TẠI HÀ NỘI</i></b></td>
							<td><b><i>HỔ TRỢ TRỰC TUYẾN</i></b></td>
						</tr>
						<tr>
							<td>Mr. Pham Minh Thắng<br>
								01252 909 528<br>
								minhthang@cdimex.com.vn</td>
							<td>Mr. Lương Tuấn Kiệt<br>
							(08) 39970829 - 0939 969 706<br>
							nhasachngoaivan@cdimex.com.vn</td>
						</tr>	
					</table>
				</form>
				<div class="col-xs-6 row">
					<p>Những phần đánh dấu ( * ) là bắt buộc.</p>
					<p>Name ( * )</p>
					<input type="text"  size="30%">
					<p>Email ( * )</p>
					<input type="text"  size="40%">
					<p>Phone ( * )</p>
					<input type="text"  size="30%">
					<p>Subject ( * )</p>
					<input type="text"  size="30%">
					<p>Message ( * )</p>
					<textarea rows="5" cols="50"></textarea><br>
					<button type="submit" class="btn btn-primary">SEND</button>
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