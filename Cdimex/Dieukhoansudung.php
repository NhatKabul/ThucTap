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
							    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail">Điều Khoản Sử Dụng</font></a></li>
						</ul>
					</div>
					<div class="font-chu2">
						Chào mừng quí khách đến mua sách tại CDIMEX. Sau khi truy cập vào website CDIMEX để tham khảo hoặc mua sắm, 
						quí khách đã đồng ý tuân thủ và ràng buộc với những quy định của CDIMEX. Vui lòng xem kỹ các quy định và hợp 
						tác với chúng tôi để xây dựng 1 website CDIMEX ngày càng thân thiện và phục vụ tốt những yêu cầu của chính quí 
						khách. Ngoài ra, nếu có bất cứ câu hỏi nào về những thỏa thuận trên đây, vui lòng email cho chúng tôi qua địa 
						chỉ cdimexco@cdimex.com.vn.<br><br>

						<font color="black">Tài khoản của khách hàng</font><br><br>

						Khi sử dụng dịch vụ CDIMEX, quí khách sẽ cung cấp cho chúng tôi thông tin về địa chỉ email, mật khẩu và họ tên để 
						có được 1 tài khoản tại đây. Việc sử dụng và bảo mật thông tin tài khoản là trách nhiệm và quyền lợi của quí khách 
						khi sử dụng CDIMEX. Ngoài ra, những thông tin khác trong tài khoản như tên tuổi, địa chỉ.... là những thông tin sẽ 
						giúp CDIMEX phục vụ quí khách tốt nhất. Trong trường hợp thông tin do quí khách cung cấp không đầy đủ hoặc sai dẫn 
						đến việc không thể giao hàng cho quí khách, chúng tôi có quyền đình chỉ hoặc từ chối phục vụ, giao hàng mà không phải 
						chịu bất cứ trách nhiệm nào đối với quí khách. Khi có những thay đổi thông tin của quí khách, vui lòng cập nhật lại 
						thông tin trong tài khoản tại CDIMEX. Quí khách phải giữ kín mật khẩu và tài khoản, hoàn toàn chịu trách nhiệm đối 
						với tất cả các hoạt động diễn ra thông qua việc sử dụng mật khẩu hoặc tài khoản của mình. Quí khách nên đảm bảo thoát 
						khỏi tài khoản tại CDIMEX sau mỗi lần sử dụng để bảo mật thông tin của mình<br><br>

						<font color="black">Quyền lợi bảo mật thông tin của khách hàng</font><br><br>

						Khi sử dụng dịch vụ tại website CDIMEX, quí khách được đảm bảo rằng những thông tin cung cấp cho chúng tôi sẽ chỉ được 
						dùng để nâng cao chất lượng dịch vụ dành cho khách hàng của CDIMEX và sẽ không được chuyển giao cho 1 bên thứ ba nào 
						khác vì mục đích thương mại. Thông tin của quí khách tại CDIMEX sẽ được chúng tôi bảo mật và chỉ trong trường hợp pháp 
						luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.<br><br>

						<font color="black">Trách nhiệm và quyền lợi của CDIMEX</font><br><br>

						Trong trường hợp có những phát sinh ngoài ý muốn hoặc trách nhiệm của mình, CDIMEX sẽ không chịu trách nhiệm về mọi tổn 
						thất phát sinh. Ngoài ra, chúng tôi không cho phép các tổ chức, cá nhân khác quảng bá sản phẩm tại website CDIMEX mà chưa 
						có sự đồng ý bằng văn bản từ CDIMEX. Các thỏa thuận và quy định trong Điều khoản sử dụng có thể thay đổi vào 
						bất cứ lúc nào nhưng sẽ được CDIMEX thông báo cụ thể trên website CDIMEX.
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