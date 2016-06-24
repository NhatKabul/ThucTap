<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="image/logo.ico">
<title>Cdimex</title>
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/css.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/styles.css" type="text/css">
<link rel="stylesheet" href="css/custom.css" type="text/css">
<link rel="stylesheet" href="css/non-responsive.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css">
<script src="js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 30px 0px;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 100%;
        margin: 50px;
        top: 0px;
        left: -50px;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #0380ff;
    }
  </style>
  <script type="text/javascript">

/***********************************************
* Email Validation script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

function checkmail(e){
var returnval=emailfilter.test(e.value)
if (returnval==false){
alert("Please enter a valid email address.")
e.select()
}
return returnval
}
</script>
</head>
<body>
    <div class="container">
    	<div class="nen row navbar navbar-default"><!-- banner -->
      <div class="col-xs-2 row"><a href="index.php"><img src="image/logo/logo.png" width="100%" height="100%"></a></div>
      <div class="col-xs-10">
      </div>
    </div><!-- banner -->
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