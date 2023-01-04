<?php require ("header_admin.php") ?>
<?php
if(isset($_SESSION['admin'])){

	$sanpham = $_GET['sanpham'];
	
	if(xoasanphamadmin($sanpham)){
		echo "<script> alert('Sản phẩm đã được xóa thành công!')</script>";
		echo "<script> window.location = 'quan-li-san-pham.php';</script>";
	}else{
		echo "<script> alert('ERROR: Vui Lòng Thử Lại')</script>";
	}
}

?>