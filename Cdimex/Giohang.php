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
			<br>
			
			<div class="container row">
				<div class="navbar">
					<form action="" method="POST">
		              <div class="posdetail">
						  	<ul class="nav nav-tabs">
								    <li class="active"><a data-toggle="tab" href="#menu1"><font class="font-detail">Giỏ Hàng</font></a></li>
							</ul>
					  </div>
		              <table class="table table-bordered">
		                <tr>
		                  <td align="center">Tên Sản Phẩm</td>
		                  <td align="center">Size</td>
		                  <td align="center">Đơn Giá</td>
		                  <td align="center">Số Lượng Trong Kho</td>
		                  <td align="center">Số Lượng Đặt</td>
		                  <td align="center">Thành Tiền</td>
		                </tr>
		               </table>
		            </form>
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