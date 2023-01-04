<?php 
	session_start();
	unset($_SESSION['user']);
	echo "<script> alert('Bạn đã đăng xuất khỏi hệ thống');</script>";
	echo "<script> window.location = 'dang-nhap.php';</script>";
 ?>