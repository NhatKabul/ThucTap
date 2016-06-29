
			<div class="modal" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng Nhập</h3>
				      </div>
				      <div class="modal-body" name="dn">
							<form class="form-horizontal" role="form" name="dn" method="POST">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-4 control-label">Nhập Email</label>
								    <div class="col-sm-6">
								      <input class="form-control" name="txtEmail" placeholder="Email" >
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Nhập Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" name="txtPW" placeholder="Password" >
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-4 col-sm-10">
				       				 <button type="submit" class="btn btn-primary" name="btnDN" id="dn">Đăng Nhập</button>
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
				        <!--<p align="center">Nếu bạn đã có tài khoản, <a href="#"data-toggle="modal" data-target="#modallogin" >Đăng Nhập </a><p>-->
				      </div>
				      <div class="modal-body" name="dk">
							<form class="form-horizontal" role="form" name="dk" method="POST">
								  <div class="form-group">
								    <label class="col-sm-4 control-label">Nhập Email</label>
								    <div class="col-sm-6">
								      <input class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-4 control-label">Nhập Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="txtPW" name="txtPW" placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-4 control-label">Nhập Lại Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="txtRPW" name="txtRPW" placeholder="Confirm Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-4 col-sm-10">
				       				 	<button type="submit" class="btn btn-primary" name="btnDK" id="dk">Đăng Ký</button>
								    </div>
								  </div>
							</form>
							<?php
								if(isset($_POST['btnDK']))
								{
									if (!isset($_POST['txtEmail'])){
						              die('');
						          	}
						          	$pw= isset($_POST['txtPW']) ? md5($_POST['txtPW']) : '';
						          	$rpw= isset($_POST['txtRPW']) ? md5($_POST['txtRPW']) : '';
						          	$email= isset($_POST['txtEmail']) ? mysql_escape_string($_POST['txtEmail']) : '';
						            if (mysql_num_rows(mysql_query("SELECT email FROM user WHERE email='".$email."'")) > 0)
						            {
						                echo "<p align='center'><img src='image/icons/Delete.ico'><font color='red'><b> Email này đã có người dùng. Vui lòng chọn Email khác !</b></font></p>";
						                exit;
						            }
						            $sql=mysql_query("INSERT INTO user VALUES('','".$pw."','".$email."','0')");
						            if ($sql)
						                echo "<script language='javascript'> confirm('Thành Công');</script>";
						            else
						                echo "<script language='javascript'> confirm('Thất Bại');</script>";
						        }
							?>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
				<div class="modal" id="modaldmk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h3  align="center" class="modal-title" id="myModalLabel"><image src="image/icon/login.png" width="30" height="30">  Đăng Nhập</h3>
				      </div>
				      <div class="modal-body" name="dmk">
							<form class="form-horizontal" role="form" name="dmk" method="POST">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-4 control-label">Nhập Password Cũ</label>
								    <div class="col-sm-6">
								      <input class="form-control" name="txtEmail" placeholder="Email" >
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Nhập Password Mới</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" name="txtPW" placeholder="Password" >
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-4 control-label">Nhập Lại Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" name="txtPW" placeholder="Password" >
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-4 col-sm-10">
				       				 <button type="submit" class="btn btn-primary" name="btnLuu" id="luu">Lưu</button>
								    </div>
								  </div>
							</form>
							<?php
								if(isset($_POST['btnDK']))
								{
									if (!isset($_POST['txtEmail'])){
						              die('');
						          	}
						          	$pw= isset($_POST['txtPW']) ? md5($_POST['txtPW']) : '';
						          	$rpw= isset($_POST['txtRPW']) ? md5($_POST['txtRPW']) : '';
						          	$email= isset($_POST['txtEmail']) ? mysql_escape_string($_POST['txtEmail']) : '';
						            if (mysql_num_rows(mysql_query("SELECT email FROM user WHERE email='".$email."'")) > 0)
						            {
						                echo "<p align='center'><img src='image/icons/Delete.ico'><font color='red'><b> Email này đã có người dùng. Vui lòng chọn Email khác !</b></font></p>";
						                exit;
						            }
						           	$sql=mysql_query("UPDATE user SET password='".$npw."' WHERE email='".$_SESSION['email']."'");
						            if ($sql)
						                echo "<script language='javascript'> confirm('Thành Công');</script>";
						            else
						                echo "<script language='javascript'> confirm('Thất Bại');</script>";
						        }
							?>
				      </div>
				      <div class="modal-footer">
				       
				      </div>
				    </div>
				  </div>
				</div>
			</div>
	