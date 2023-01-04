<?php require ("header_admin.php") ?>

<?php 

if(isset($_POST['submit'])){
	$danhmucmoi = $_POST['new-dm'];
	$sql = "INSERT INTO danhmucsanpham (tendanhmuc) VALUES ('$danhmucmoi')";

	if($rs = mysqli_query($conn, $sql)){
		echo "<script> alert('Thêm Thành Công!')</script>";
	}
}
?>	
<div class="formSearch">

	<form action="" method="POST">
		<input class="txttext" type="text" placeholder="Nhập Tên Danh mục..." name="new-dm" required=""><br>
		<input type="submit" value="Thêm mới " class="submit" name="submit">
	</form>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>STT</th>
			<th>Mã danh mục</th>
			<th>Tên Danh mục</th>
			<th style="text-align: center;">Cập Nhật</th>
			<th style="text-align: center;">Xóa</th>
		</tr>
	</thead>
	<tbody>
		<?php	

		$sql ="SELECT * FROM danhmucsanpham";

		if($rs = mysqli_query($conn,$sql)){
			$i = 1;

			while($row = mysqli_fetch_row($rs)){
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php  echo "$row[0]";?></td>
					<td><?php  echo "$row[1]";?></td>
					<td class="center"><a class='submit' href="cap-nhat-danh-muc.php?id=<?php echo($row[0]);?>">Cập Nhật</a></td>
					<td class="center"><a onclick="return confirm('Xóa danh mục này!');" class='submit' href="xoa-danh-muc.php?id=<?php echo($row[0]);?>">Xóa</a></td>
				</tr>
				<?php 
			}
		}
		?>
	</tbody>
</table>

<?php require ("footer_admin.php") ?>