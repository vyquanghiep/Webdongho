<?php require ("include/header.php") ?>
<?php
if(isset($_SESSION['user'])){

	$sanpham = $_GET['sanpham'];
	if(xoagiohang($_SESSION['user'], $sanpham)){
		echo "<script> alert('Sản phẩm đã được xóa khỏi giỏ hàng của bạn!')</script>";
		echo "<script> window.location = 'gio-hang.php';</script>";
	}else{
		echo "<script> alert('ERROR: Vui Lòng Thử Lại')</script>";
	}
}

?>