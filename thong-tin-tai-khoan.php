<?php require ("include/header.php") ?>
<?php if(isset($_SESSION['user'])){
	$username = getValueUser($_SESSION['user'],0);
	$fullname = getValueUser($_SESSION['user'],1);
	$diachi = getValueUser($_SESSION['user'],3);
	$sdt = getValueUser($_SESSION['user'],4);
	$stt = getValueUser($_SESSION['user'],5);

	if(isset($_POST['submit'])){
		if(capnhatthongtinuser($username,$_POST['fullname'], $_POST['address'],$_POST['phone'],$stt)){
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

				<hr>

				<button  type="submit" class="registerbtn" name="submit">Cập Nhật</button>
			</div>
		</form>
	</div>
	<?php 
} ?>


<?php require ("include/footer.php") ?>