    <?php
      include("Thuvien.php");
    ?>
		<!-- ahihi -->
		<div class="row">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a class="dropdown-toggle"><b><font color="#3366FF">Đăng Nhập</font><b><span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a class="btn btn-link btn-sl menu" data-toggle="modal" data-target="#modallogin"><image src="image/icon/dn.jpg" width="20" height="20"> Đăng Nhập</a></li>
			            <li><a class="btn btn-link btn-sl menu" data-toggle="modal" data-target="#modalpugin"><image src="image/icon/dk.png" width="20" height="20"> Đăng Ký</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<!-- ahihi2 -->
		<div class="container">
              <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                          <ul class="nav navbar-nav">
                              <li class="dropdown">
                                  <a class="dropdown-toggle" role="button"><b>Sản Phẩm</b></a>   
                                  <ul class="dropdown-menu">
                                        <li><a href="adminDSsanpham.php">Danh Sách Sản Phẩm</a></li>
                                        <li><a href="">Thêm Sản Phẩm</a></li>
                                        <li><a href="">Thêm Số Lượng Sản Phẩm</a></li>
                                  </ul>                           
                              </li>
                              <li class="dropdown">
                                    <a class="dropdown-toggle" role="button"><b>Menu</b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="adminMenu.php">Menu Chính</a></li>
                                        <li><a href="adminCTMenu.php">Chi tiết Menu</a></li>
                                    </ul>
                              </li>
                              <li class="dropdown">
                                    <a href="adminDathang.php"><b>Đặt Hàng</b></a>
                              </li>
                              <li class="dropdown">
                                    <a class="dropdown-toggle" href="adminThanhvien.php"><b>Thành Viên</b></a>
                              </li>
                    </div><!--/.nav-collapse -->
                  </div><!--/.container-fluid -->
              </nav>
          </div>
  <div align="center">
    <form id="form1" name="form1" method="post" action="">
      <table width="300" border="1" align="center">
          <p align="center"><font size="+2"><b>Danh Sách Menu</b></font></p>    
          <tr>
            <td align="center" bgcolor="#9ea7b6"><b> Chi Tiết Menu </b></td>
          <td align="center" bgcolor="#9ea7b6"><b> Menu </b></td>
          </tr>
      </table>
    </form>
  </div>
</body>
</html>