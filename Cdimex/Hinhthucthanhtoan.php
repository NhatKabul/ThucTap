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
							    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail">Hình Thức Thanh Toán</font></a></li>
						</ul>
					</div>
					<div class="font-chu2">
							<h4><b><font color="black">Thanh toán trong nước</font></b></h4>

							<font color="blue">1. Thanh toán bằng tiền mặt:</font><br>
							Nhân viên của công ty sẽ liên hệ với quí khách để hẹn lịch giao hàng. Trong trường hợp quí khách đi vắng, vui lòng uỷ thác cho người khác nhận hàng và thanh toán tiền thay.<br><br>

							<font color="blue">2. Thanh toán qua ngân hàng:</font><br>

							Quý khách nộp tiền vào tài khoản của công ty theo chi tiết sau:<br>

							Người thụ hưởng: <font color="#333333">Công ty CỔ PHẦN XNK & Phát triển Văn hóa (CDIMEX)</font><br>

							Tài khoản :<font color="#333333">102010000096355</font><br>

							Tại : <font color="#333333">Ngân hàng Thương Mại Cổ Phần Công Thương Việt Nam _ Chi nhánh TP HCM</font><br><br>

							<font color="blue">3. Thanh toán vào thẻ tín dụng:</font><br>

							Quý khách vui lòng nộp tiền vào số thẻ tín dụng theo chi tiết sau:<br>

							Loại thẻ:        <font color="#333333"> Visa Card</font><br>

							Số TK thẻ :    <font color="#333333"> 200014948061503</font><br>

							Ngân hàng:    <font color="#333333"> Eximbank</font>
							<br><br>
						<h4><b><font color="black">Thanh toán quốc tế</font></b></h4>

							<font color="blue">Chuyển tiền Western Union:</font><br>

							Quí khách vui lòng đến đại lý Western Union gần nhất (www.westernunion.com) để chuyển tiền cho chúng tôi theo thông tin dưới đây:<br>

							Receiver: <font color="#333333">Lê Thị Hồng</font><br>
							Address: <font color="#333333">99A Nguyen Van Troi Street - Phu Nhuan District, Ho Chi Minh city. Viet nam.</font><br>
							Tel: <font color="#333333">84-8-39974755</font><br><br>

							Giao tiền và phiếu gởi tiền cho Đại lý, bạn sẽ nhận biên lai với mã số chuyển tiền (MTCN - Money Transfer Control Number) gồm 10 số.<br>
							Khi hoàn tất thủ tục chuyển tiền với Western Union, ban vui lòng cung cấp thông tin cuộc chuyển tiền gồm tên người gởi, nước gởi, số tiền và mã số chuyển tiền (MTCN) đến cho chúng tôi theo địa chỉ e-mail: <font color="#333333">nhasachngoaivan@cdimex.com.vn.</font> Ngay sau khi nhận được e-mail, chúng tôi sẽ tiến hành giao hàng ngay theo yêu cầu của bạn.<br><br>

							(Điện thoại cho chúng tôi số: (84.8)-39974755 nếu bạn cần sự hỗ trợ)
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