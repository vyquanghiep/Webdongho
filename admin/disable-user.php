<?php require ("header_admin.php") ?>

<?php if(isset($_GET['id'])){
	$username = getValueUser($_GET['id'],0);
	$fullname = getValueUser($_GET['id'],1);
	$diachi = getValueUser($_GET['id'],3);
	$sdt = getValueUser($_GET['id'],4);
	$stt = getValueUser($_GET['id'],5);

	if(capnhatthongtinuser($username,$fullname, $diachi,$sdt, 'C')){
		echo "<script> alert('Khách Hàng này đã bị vô hiệu hóa')</script>";
		echo "<script> window.location = 'quan-li-user.php';</script>";
	}else{
		echo "<script> alert('ERROR: Vui Lòng Thử Lại')</script>";
	}
}

?>