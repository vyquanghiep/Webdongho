<?php require ("header_admin.php") ?>

<?php if(isset($_GET['id'])){
	$username = getValueUser($_GET['id'],0);
	$fullname = getValueUser($_GET['id'],1);
	$diachi = getValueUser($_GET['id'],3);
	$sdt = getValueUser($_GET['id'],4);
	$stt = getValueUser($_GET['id'],5);

	if(isset($_POST['submit'])){
		if(capnhatthongtinuser($username,$_POST['fullname'], $_POST['address'],$_POST['phone'], $_POST['stt'])){
			echo "<script> alert('Cập nhât thông tin thành công!')</script>";
		}else{
			echo "<script> alert('ERROR: Vui Lòng Thử Lại')</script>";
		}
	}	

	?>
	
	<div class="user-info">
		<h2>THÔNG TIN TÀI KHOẢN</h2>
		<form action="" method="POST">
			<div class="container">
				<h1>Khách hàng: <?php echo $fullname ?></h1>
				<hr>

				<label for="username"><b>Tên Đăng Nhập</b></label>
				<input type="text" style="background: #555;color: #ddd" disabled="" name="username" required placeholder="Nhập Tên Đăng Nhập ..." value="<?php echo($username) ?>">

				<label for="fullname"><b>Họ Và Tên</b></label>
				<input type="text"  name="fullname" required placeholder="Nhập Họ Tên Đầy Đủ Của Bạn" value="<?php echo($fullname) ?>"> 

				<label for="phone"><b>Số Điện Thoại</b></label>
				<input type="text"  name="phone" required placeholder="Nhập Số Điện Thoại ..." value="<?php echo($sdt) ?>">

				<label for="address"><b>Địa Chỉ</b></label>
				<input type="text"  name="address" required placeholder="Nhập Địa Chỉ ..." value="<?php echo($diachi) ?>">

				<label for="address"><b>Trạng Thái</b></label>
				<input type="text"  name="stt" required placeholder="Nhập Địa Chỉ ..." value="<?php echo($stt) ?>">

				<hr>

				<button  type="submit" class="registerbtn" name="submit">Cập Nhật</button>
			</div>
		</form>
	</div>
	<?php 
} ?>

<?php require ("footer_admin.php") ?>