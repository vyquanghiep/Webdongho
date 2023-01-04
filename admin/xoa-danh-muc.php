<?php require ("header_admin.php") ?>
<?php
if(isset($_SESSION['admin'])){

	$sanpham = $_GET['sanpham'];
	if(xoadanhmucsanpham($_GET['id'])){
		echo "<script> alert('Danh mục đã được xóa thành công!')</script>";
		echo "<script> window.location = 'quan-li-danh-muc.php';</script>";
	}else{
		echo "<script> alert('ERROR: Vui Lòng Thử Lại')</script>";
	}
}

?>