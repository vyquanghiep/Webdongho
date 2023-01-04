<?php require ("include/header.php") ?>

<?php 
if(isset($_SESSION['user'])){

	$sanpham = $_POST['sanpham'];

		// số lượng người dùng thay đổi trên form
	$soluongcapnhat = $_POST['so-luong-cap-nhat'];

		// Hiện còn thực tế sản phẩm
	$soluonghiencon = getValueProduct($sanpham, 15);

		//Số lượng nằm trong giỏ hàng
	$soluongtronggiohang = getValuesGioHang($_SESSION['user'], $sanpham, 3);

		//Tổng số lượng hiện còn và ở trong giỏ hàng
	$tongsoluongcon = $soluonghiencon + $soluongtronggiohang;

	if($soluongcapnhat == 0){
		if(xoagiohang($_SESSION['user'], $sanpham)){
			echo "<script> alert('Cập nhật giỏ hàng thành công!)</script>";
			echo "<script> window.location = 'gio-hang.php';</script>";
		}
		else{
			echo "<script> alert('ERROR: Vui Lòng Thử Lại')</script>";
		}
	}
	else if($soluongcapnhat > $tongsoluongcon){
		echo "<script> alert('Số Lượng Cập Nhật Vượt Quá Hiện Còn Thực Tế Của Sản Phẩm')</script>";
		echo "<script> window.location = 'gio-hang.php';</script>";
	}
	else{

		// Cập nhật lại sô lượng còn thực tế (không tính trong giỏ hàng) của sản phâm
		$conthucte = $tongsoluongcon - $soluongcapnhat;
		$giasanpham = getValueProduct($sanpham,11);
		$thanhtien = $giasanpham * $soluongcapnhat;
		if(giamSoLuonCon($sanpham,$conthucte)){

			if(CapNhatSoLuong($_SESSION['user'],$sanpham,$soluongcapnhat,$thanhtien)){
				echo "<script> alert('Cập nhật giỏ hàng thành công!)</script>";
				echo "<script> window.location = 'gio-hang.php';</script>";
			}
		}
	}

}else{
	echo "<script> window.location = 'dang-nhap.php';</script>";
}
?>