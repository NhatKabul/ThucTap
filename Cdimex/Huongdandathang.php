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
							    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail">Hướng Dẫn Đặt Hàng</font></a></li>
						</ul>
					</div>
					<div class="font-chu2"><h4><b><font color="black">Duyệt và chọn sản phẩm</font></b></h4>

							- Bấm vào "ThemVaoGio" để đưa sản phẩm vào giỏ hàng. Bạn có thể sửa số lượng trong ô "Nhập số lượng".<br><br>

							<font color="blue">1. Xem thông tin giỏ:</font><br>

							- Hệ thống hiển thị các thông tin về sản phẩm bạn đã đặt mua như tên sản phẩm, đơn giá, số lượng, trị giá,...Tại đây bạn có thể thay đổi số lượng hàng hoá bằng cách nhập vào số lượng mới trong ô "Số lượng" và bấm vào nút "CapNhat" để cập nhật số lượng mới.

							- Nếu muốn trả lại sản phẩm đã chọn (không mua nữa), bạn bấm vào nút "Xoa" để xóa sản phẩm đó.

							- Mỗi lần thay đổi số lượng của sản phẩm, bạn nhớ phải click vào nút "CapNhat" để hệ thống ghi nhận lại những thay đổi trong giỏ hàng của bạn.

							- Nếu muốn chọn thêm sản phẩm khác, bạn click vào nút "tieptucmua".<br><br>

							<font color="blue">2. Ghi thông tin khách hàng:</font><br>

							- Bạn điền đầy đủ thông tin khách hàng và thông tin giao hàng theo mẫu. Nếu bạn có những yêu cầu gì khác hãy ghi vào khung phía dưới.
							<br><br>

							<font color="blue">3.Kết thúc:</font><br>

							- Bạn click vào nút thanhtoan để hoàn tất việc đặt hàng.<br>

							Nhân viên CDIMEX sẽ liên hệ với bạn để xác nhận việc đặt hàng và thời gian giao hàng.<br>

							<i>Ghi chú:</i> Điện thoại cho chúng tôi số: <b>08-39974755</b> nếu bạn cần sự hỗ trợ.<br>

							<i>Email liên hệ:</i><b>  nhasachngoaivan@cdimex.com.vn</b>
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