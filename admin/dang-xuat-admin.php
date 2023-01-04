<?php 
	session_start();
	unset($_SESSION['admin']);
	echo "<script> alert('Bạn đã đăng xuất khỏi hệ thống');</script>";
	echo "<script> window.location = '../dang-nhap.php';</script>";
 ?>