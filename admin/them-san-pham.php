<?php require ("header_admin.php") ?>

<?php 

$masp = radomMaSanPham();

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$hinhanh = $_POST['hinhanh'];
	$cpu =$_POST['cpu'];
	$ram = $_POST['ram'];
	$disk = $_POST['disk'];
	$manhinh = $_POST['manhinh'];
	$hedieuhanh = $_POST['hedieuhanh'];
	$trongluong = $_POST['trongluong'];
	$kichthuoc = $_POST['kichthuoc'];
	$namsx = $_POST['namsx'];
	$gia = $_POST['gia'];
	$danhmuc = $_POST['danhmuc'];
	$loaisp =$_POST['loaisp'];
	$gioithieu = $_POST['gioithieu'];
	$soluong = $_POST['soluong'];

	if(themsanphamadmin($masp, $name, $hinhanh, $cpu, $ram, $disk, $manhinh, $hedieuhanh, $trongluong,$kichthuoc,$namsx,$gia,$danhmuc,$loaisp,$gioithieu,$soluong)){
		echo "<script> alert('Thêm Sản Phẩm Thành Công!');</script>";
	}else{
			echo "<script> alert('ERROR: Xin mời thử lại!');</script>";
	}
}
?>

<form action="" method="POST">
	<div class="container">
		<h1>Thêm Sản Phẩm</h1>
		<a style="float: right;" href="quan-li-san-pham.php" class="submit">Về Trang Trước</a>

		<hr>

		<label for="masanpham"><b>Mã sản phẩm</b></label>
		<input style="font-weight: bold; background: #999" type="text" disabled="" name="masp" required value="<?php 
		echo $masp;
		?>">

		<label for="fullname"><b>Tên sản phẩm</b></label>
		<input type="text"  name="name" required > 

		<label for="phone"><b>Hình ảnh</b></label>
		<input type="text"  name="hinhanh" required >
		
		<label for="address"><b>Bộ máy</b></label>
		<input type="text"  name="cpu" required >

		<label for="address"><b>Chất liệu dây</b></label>
		<input type="text"  name="ram" required >

		<label for="address"><b>Thời gian sử dụng pin</b></label>
		<input type="text"  name="disk" required >
		<label for="address"><b>Đường kính mặt</b></label>
		<input type="text"  name="manhinh" required >
		<label for="address"><b>Nguồn năng lượng</b></label>
		<input type="text"  name="hedieuhanh" required >
		<label for="address"><b>Chống nước</b></label>
		<input type="text"  name="trongluong" required >
		<label for="address"><b>Kích thước</b></label>
		<input type="text"  name="kichthuoc" required >
		<label for="address"><b>Năm sản xuất</b></label>
		<input type="text"  name="namsx" required >
		<label for="address"><b>Giá</b></label>
		<input type="text"  name="gia" required>
		<label for="address"><b>Mã danh mục</b></label>
		<input type="text"  name="danhmuc" required >
		<label for="address"><b>Loại sản phẩm</b></label>
		<input type="text"  name="loaisp" required >
		<label for="address"><b>Số lượng</b></label>
		<input type="text"  name="soluong" required >
		<label for="address"><b>Giới Thiệu</b></label><br>
		<textarea rows="4" cols="150" name="gioithieu" placeholder="Nhập nội dung giới thiệu ..."></textarea>
		<hr>

		<button type="submit" class="registerbtn" name="submit">Thêm Sản Phẩm</button>
	</div>
</form>

<?php require ("footer_admin.php") ?>