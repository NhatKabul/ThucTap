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
				include("Login.php")
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
							    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail">Chính Sách Bảo Mật</font></a></li>
						</ul>
					</div>
					<div class="font-chu2">
						<font>
							Bảo mật thông tin khách hàng là một trong những ưu tiên nhằm tạo điều kiện mua sắm tốt nhất cho quí khách tại 
							CDIMEX. Chúng tôi hiểu sử dụng hợp lý và bảo mật thông tin sẽ thể hiện sự quan tâm của CDIMEX dành cho quí khách. 
							Vì thế, CDIMEX cam kết việc sử dụng thông tin trên sẽ chỉ nhằm nâng cao chất lượng dịch vụ khách hàng và tạo môi 
							trường mua sắm an tòan, tiện lợi tại CDIMEX. Cụ thể, thông tin của quí khách chỉ dùng để:<br><br>

							Cung cấp một số tiện ích, nâng cao chất lượng dịch vụ hỗ trợ khách hàng<br><br>

							Giải quyết các vấn đề, tranh chấp phát sinh liên quan đến việc sử dụng website cdimex.com<br><br>

							Ngăn chặn những hoạt động vi phạm pháp luật Việt Nam<br><br>

							CDIMEX cam đoan sẽ không bán, chia sẻ dẫn đến làm lộ thông tin cá nhân của quí khách vì mục đích thương mại vi 
							phạm cam kết của chúng tôi ghi trong chính sách bảo mật này. Tất cả thông tin giao dịch giữa quí khách và CDIMEX 
							sẽ được bảo mật.<br>
							Tuy nhiên, quí khách không nên trao đổi những thông tin tài khoản,thanh toán, giao nhận của mình cho 1 bên thứ 3 
							nào khác để tránh rò rỉ thông tin. Khi sử dụng chung máy tính với nhiều người, vui lòng thoát khỏi tài khoản mỗi 
							khi không sử dụng dịch vụ của CDIMEX nữa để tự bảo vệ thông tin về mật khẩu truy cập của mình.<br>
							Ngoài ra, quí khách tuyệt đối không được sử dụng bất kỳ hình thức nào để can thiệp vào hệ thống hay làm thay đổi 
							cấu trúc dữ liệu. Chúng tôi nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, 
							phá hoại hay xâm nhập vào dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy 
							tố trước pháp luật nếu cần thiết. Mọi thông tin của quí khách tại CDIMEX sẽ được chúng tôi bảo mật nhưng trong trường 
							hợp pháp luật yêu cầu, chúng tôi buộc phải cung cấp thông tin này cho cơ quan pháp luật.<br>
							CDIMEX hiểu rằng quyền lợi của quí khách trong việc bảo vệ thông tin cá nhân cũng chính là trách nhiệm của chúng tôi 
							nên trong bất kỳ trường hợp có thắc mắc, góp ý nào liên quan đến chính sách bảo mật của CDIMEX, vui lòng liên hệ:
							<br><i>Tel: 08.39974755 – 08.39973371<br>
							Email: cdimexco@cdimex.com.vn</i>	
						</font>
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