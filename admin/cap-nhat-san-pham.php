<?php require ("header_admin.php") ?>

<?php 

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

	if(capnhatsanphamadmin($_GET['sanpham'], $name, $hinhanh, $cpu, $ram, $disk, $manhinh, $hedieuhanh, $trongluong,$kichthuoc,$namsx,$gia,$danhmuc,$loaisp,$gioithieu,$soluong)){
		echo "<script> alert('Cập nhật sản phẩm thành công!');</script>";
	}
}
?>

<form action="" method="POST">
	<div class="container">
		<h1>Cập Nhật Sản Phẩm</h1>
		<a style="float: right;" href="quan-li-san-pham.php" class="submit">Về Trang Trước</a>
		<?php 

		if(isset($_GET['sanpham'])){
			$sanpham = $_GET['sanpham'];

			$sql_select_detail_product = "SELECT * FROM sanpham  WHERE masp = '$sanpham'";
			$rs = mysqli_query($conn, $sql_select_detail_product);

			if($rs){
				if($row = mysqli_fetch_row($rs)){
					$name = $row[1];
					$hinhanh = $row[2];
					$cpu = $row[3];
					$ram = $row[4];
					$disk = $row[5];
					$manhinh = $row[6];
					$hedieuhanh = $row[7];
					$trongluong = $row[8];
					$kichthuoc = $row[9];
					$namsx = $row[10];
					$gia = $row[11];
					$danhmuc = $row[12];
					$loaisp = $row[13];
					$gioithieu = $row[14];
					$soluong = $row[15];
				}
			}


		}
		?>

		<hr>

		<label for="masanpham"><b>Mã sản phẩm</b></label>
		<input style="background: #999" type="text" disabled="" name="masanpham" required value="<?php echo($sanpham) ?>">

		<label for="fullname"><b>Tên sản phẩm</b></label>
		<input type="text"  name="name" required value="<?php echo($name) ?>"> 

		<label for="phone"><b>Hình ảnh</b></label>
		<input type="text"  name="hinhanh" required value="<?php echo($hinhanh) ?>">
		
		<label for="address"><b>Đường kính mặt:</b></label>
		<input type="text"  name="cpu" required value="<?php echo($cpu) ?>">

		<label for="address"><b>Chất liệu dây:</b></label>
		<input type="text"  name="ram" required value="<?php echo($ram) ?>">

		<label for="address"><b>Đối tượng sử dụng:</b></label>
		<input type="text"  name="disk" required value="<?php echo($disk) ?>">
		<label for="address"><b>Nguồn năng lượng:</b></label>
		<input type="text"  name="manhinh" required value="<?php echo($manhinh) ?>">
		<label for="address"><b>Mặt kính:</b></label>
		<input type="text"  name="hedieuhanh" required value="<?php echo($hedieuhanh) ?>">
		<label for="address"><b>Trọng lượng</b></label>
		<input type="text"  name="trongluong" required value="<?php echo($trongluong) ?>">
		<label for="address"><b>Hãng:</b></label>
		<input type="text"  name="kichthuoc" required value="<?php echo($kichthuoc) ?>">
		<label for="address"><b>Năm sản xuất</b></label>
		<input type="text"  name="namsx" required value="<?php echo($namsx) ?>">
		<label for="address"><b>Giá</b></label>
		<input type="text"  name="gia" required value="<?php echo($gia) ?>">
		<label for="address"><b>Mã danh mục</b></label>
		<input type="text"  name="danhmuc" required value="<?php echo($danhmuc) ?>">
		<label for="address"><b>Loại sản phẩm</b></label>
		<input type="text"  name="loaisp" required value="<?php echo($loaisp) ?>">
		<label for="address"><b>Số lượng</b></label>
		<input type="text"  name="soluong" required value="<?php echo($soluong) ?>">
		<label for="address"><b>Giới Thiệu</b></label><br>
		<textarea rows="5" cols="120" name="gioithieu">
			<?php echo "$gioithieu"; ?>
		</textarea>
		<hr>

		<button type="submit" class="registerbtn" name="submit">Cập Nhật</button>
	</div>
</form>

<?php require ("footer_admin.php") ?>