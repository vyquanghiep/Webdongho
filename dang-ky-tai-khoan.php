<?php require ("include/header.php") ?>

<?php 	

if(isset($_POST['submit'])){
	$username = $_POST['username'];

	$fullname = $_POST['fullname'];

	$phone = $_POST['phone'];

	$address = $_POST['address'];

	$psw = $_POST['psw'];

	$psw_repeat = $_POST['psw-repeat'];

	dangky($username,$fullname,$psw,$psw_repeat,$address,$phone);

}
?>

<form action="" method="POST">
	<div class="container">
		<h1>Đăng Ký Tài Khoản</h1>
		<hr>

		<label for="username"><b>Tên Đăng Nhập</b></label>
		<input type="text"  name="username" required placeholder="Nhập Tên Đăng Nhập ...">

		<label for="fullname"><b>Họ Và Tên</b></label>
		<input type="text"  name="fullname" required placeholder="Nhập Họ Tên Đầy Đủ Của Bạn"> 

		<label for="phone"><b>Số Điện Thoại</b></label>
		<input type="text"  name="phone" required placeholder="Nhập Số Điện Thoại ...">

		<label for="address"><b>Địa Chỉ</b></label>
		<input type="text"  name="address" required placeholder="Nhập Địa Chỉ ...">

		<label for="psw"><b>Mật Khẩu</b></label>
		<input type="password"  name="psw" required placeholder="Nhập Mật Khẩu ...">

		<label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
		<input type="password"  name="psw-repeat" required placeholder="Xác Thực Mật Khẩu ...">

		<hr>

		<button type="submit" class="registerbtn" name="submit">Đăng ký</button>
	</div>

	<div class="container signin">
		<p>Bạn đã có tài khoản? <a href="dang-nhap.php">Đăng Nhập</a>.</p>
	</div>
</form>

<?php require ("include/footer.php") ?>