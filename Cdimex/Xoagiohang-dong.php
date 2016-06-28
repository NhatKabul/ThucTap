<?php
session_start();
$delete=$_GET['id'];// xoa 1 item gio hang
if($delete!="")
{
	if(isset($_SESSION['giohang'][$delete])) 
	{
		unset($_SESSION['giohang'][$delete]);
	}
	header('location: Giohang.php');
}

?>