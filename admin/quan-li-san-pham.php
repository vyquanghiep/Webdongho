<?php require ("header_admin.php") ?>
<div class="formSearch">
	
	<a href="them-san-pham.php" class="submit">Thêm sản phẩm</a>
</div>


<table class="table" id="my-table">
	<thead>
		<tr>
			<th class="cart_product">Sản Phẩm</th>
			<th style="width:600px">Mô Tả</th>
			<th>Giá tiền</th>
			<th style="text-align: center;">Cập Nhật</th>
			<th style="text-align: center;">xóa</th>
		</tr>
	</thead>
	<tbody>
		<?php	

		$sql ="SELECT * FROM sanpham";

		if($rs = mysqli_query($conn,$sql)){

			while($row = mysqli_fetch_row($rs)){
				?>
				<tr>
					<td>
						<img src="<?php echo($row[2]); ?>" alt="" width="100" height="100">
					</td>
					<td class="">
						<p style="font-weight: bold;">
							<?php echo $row[1]; ?>
						</p>
						<br>
						<b>Đường kính mặt:</b> <?php echo $row[3]; ?>
						<br>
						<b>Chất liệu dây:</b> <?php echo $row[4]; ?>
						<br>
						<b>Đối tượng sử dụng:</b>: <?php echo $row[5]; ?>
						<br>
						<b>Nguồn năng lượng:</b> <?php echo $row[6]; ?>
						<br>
						<b>Mặt kính:</b> <?php echo $row[7]; ?>
						<br>
						<b>Trọng lượng:</b> <?php echo $row[8]; ?>
						<br>
						<b>Hãng:</b> <?php echo $row[9]; ?>
						<br>
						<b>Năm sản xuất:</b> <?php echo $row[10]; ?>
						<br>
						<b>Hiện còn:</b> <b style="color: #ff0000;"><?php echo $row[15]; ?></b>
						
					</td>
					<td>
						<b><?php echo number_format($row[11]). " VNĐ"; ?></b>
					</td>
					<td class="center"><a class='submit' href="cap-nhat-san-pham.php?sanpham=<?php echo($row[0]); ?>">Cập nhật</a></td>
					<td class="center"><a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này hay không!');" class='submit' href="xoa-san-pham-admin.php?sanpham=<?php echo($row[0]);?>">Xóa</a></td>
				</tr>
				<?php 
			}
		}
		?>
	</tbody>
</table>

<?php require ("footer_admin.php") ?>
