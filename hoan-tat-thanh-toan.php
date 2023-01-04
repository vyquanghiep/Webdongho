<?php require ("include/header.php") ?>
<?php
if(isset($_SESSION['user'])){
	if(xoahetgiohang($_SESSION['user'])){
		echo "<script> alert('Thanh toán hoàn tất!')</script>";
		echo "<script> window.location = 'trang-chu.php';</script>";
	}else{
		echo "<script> alert('ERROR: Vui Lòng Thử Lại')</script>";
	}
}

?>