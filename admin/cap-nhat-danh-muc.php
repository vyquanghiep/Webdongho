<?php require ("header_admin.php") ?>

<?php if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM danhmucsanpham where madanhmuc = $id";

	if($rs = mysqli_query($conn, $sql)){
		while ($row = mysqli_fetch_row($rs)) {
			$tendanhmuc = $row[1];
		}
	}

	if(isset($_POST['submit'])){
		$danhmucmoi = $_POST['tendanhmuc'];

		$sql = "UPDATE danhmucsanpham SET tendanhmuc = '$danhmucmoi' WHERE madanhmuc = $id";

		if($rs = mysqli_query($conn, $sql)){
			echo "<script> alert('Cập nhât thông tin thành công!')</script>";
		}else{
			echo "<script> alert('Cập nhât thông tin thành công!')</script>";
		}
	}

}
?>
<a href="quan-li-danh-muc.php"> Về Quản Lí Danh Mục</a>
<form action="" method="POST">
	Tên danh mục
	<input class="txttext" type="text" placeholder="Nhập Tên Danh mục..." name="tendanhmuc" value="<?php echo($tendanhmuc) ?>"	> <br>
	<input type="submit" value="Cập Nhật" class="submit" name="submit">
</form>

<?php require ("footer_admin.php") ?>