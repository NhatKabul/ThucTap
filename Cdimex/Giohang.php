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
			<?php 
		    include ("ketnoi.php");
		    if((isset($_POST['capnhat']))&&(count($_SESSION['giohang']) != ""))
    		{         
                    foreach($_POST['soluong'] as $id => $sl)
                    {
                            
                            // nếu đặt sl bằng 0 thì hủy session id đó
                            if($sl == 0)
                            {
                                    unset($_SESSION['giohang'][$id]);
                            }
                            //ngược lại nếu số lượng lớn hơn 0 và kiểm tra là sô thì cập nhật số lượng
                            
                            else if($sl > 0 && is_numeric($sl))
                            {
                                    $_SESSION['giohang'][$id] = $sl;
                            }
                            // Nguoc lai co the xuat thong bao so luong khong hop le (so luong = char)
                            // refresh lại giỏ hàng
                            header("Location: Giohang.php");
                    }
    		}
		    ?>
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
		                  <td align="center" width="30%">Tên Sản Phẩm</td>
		                  <td align="center" width="15%">Hình Ảnh</td>
		                  <td align="center" width="13%">Đơn Giá</td>
		                  <td align="center" width="10%">Tình Trạng</td>
		                  <td align="center" width="10%">Số Lượng</td>
		                  <td align="center" width="15%">Thành Tiền</td>
		                  <td align="center" width="7%">Gỡ Bỏ</td>
		                </tr>
		               
		               <?php
		               $tongTT=0;
		               if(isset($_SESSION['giohang']))
					    {
					        if(count($_SESSION['giohang'])==0)
					        {
					            unset($_SESSION['giohang']);
					            echo "<tr><td colspan='7' align='center'><font color='red'><b>Hiện Không Có Sản Phẩm Nào !</b></font></td></tr>";
					            exit;
					        }
					        else
					        {
					        	foreach ($_SESSION['giohang'] as $id => $ls) {
					        		$sql=mysql_query("SELECT * FROM products WHERE id in ('$id')");
					        		while ($row=mysql_fetch_array($sql)) {
					        ?>
								       	<tr>
						                  <td align="center" width="30%"><?php echo $row[1]; ?></td>
						                  <td align="center" width="15%"><img src="<?php echo $row[7]; ?>" width="70" height="70"></td>
						                  <td align="center" width="13%"><?php echo number_format($row[2],0,'.',','); ?> &#8363</td>
						                  <td align="center" width="10%"><?php if($row[3]>0)echo "Còn Hàng"; else echo "Hết Hàng"; ?></td>
						                  <td align="center" width="10%"><input class="form-control" type="number" size="10" value="<?php echo $ls; ?>" name="soluong[<?php echo $id;?>]"/></td>
						                  <td align="center" width="15%"><?php echo number_format($tong=$row[2]*$ls,0,'.',','); ?> &#8363</td>
						                  <td align="center" width="7%"><a href="Xoagiohang-dong.php?id=<?php echo $row[0]; ?>"><img src="image/icon/iconX.png" width="20" height="20"></a></td>
						                </tr>
					        <?php
					        		$tongTT+=$tong;
					        		}
					        	}
			            	} ?>
			            	<tr>
			            	  <td colspan="4" align="center">
			            	  Tổng Thanh Toán: <?php echo number_format($tongTT,0,'.',','); ?> &#8363 <button class="btn btn-primary">Thanh Toán</button>
			                  </td>
			                  <td colspan="3" align="right">
			                  <a href="Xoagiohang.php" class="btn btn-primary">Xóa Hết Giỏ Hàng</a></button> <button type="submit" name="capnhat" class="btn btn-primary">Cập Nhật Giỏ Hàng</button>
			                  </td>
			                </tr>
			            <?php }
			            else
			            {
			            	echo "<tr><td colspan='7' align='center'><font color='red'><b>Hiện Không Có Sản Phẩm Nào !</b></font></td></tr>";
			            }
			            ?>
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