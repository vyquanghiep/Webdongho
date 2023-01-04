<?php require ("header_admin.php") ?>

<table class="table">
	<thead>
		<tr>
			<th class="cart_product">STT</th>
			<th>Tên Đăng Nhập</th>
			<th>Họ Và Tên</th>
			<th>Mật Khẩu</th>
			<th>Địa Chỉ</th>
			<th>Số Điện Thoại</th>
			<th>Trạng Thái</th>
			<th style="text-align: center;">Cập Nhật</th>
			<th style="text-align: center;">Vô Hiệu Hóa</th>
		</tr>
	</thead>
	<tbody>
		<?php	

		$sql ="SELECT * FROM khachhang";

		if($rs = mysqli_query($conn,$sql)){
			$i = 1;

			while($row = mysqli_fetch_row($rs)){
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php  echo "$row[0]";?></td>
					<td><?php  echo "$row[1]";?></td>
					<td>*****</td>
					<td><?php  echo "$row[3]";?></td>
					<td><?php  echo "$row[4]";?></td>
					<td><?php  echo getStatusUser($row[5]); ?></td>
					<td class="center"><a class='submit' href="cap-nhat-thong-tin-user.php?id=<?php echo($row[0]); ?>">Cập nhật</a></td>

					<?php 
					if($row[5] == 'K'){
						?>
						<td class="center"><a onclick="return confirm('Vô Hiệu Hóa User này!');" class='submit' href="disable-user.php?id=<?php echo($row[0]);?>">Vô Hiệu Hóa</a></td>
						<?php  
					}else{
						?>
						<td class="center"><a onclick="return confirm('Hủy Bỏ Vô Hiệu Hóa User này!');" class='submit' href="enable-user.php?id=<?php echo($row[0]);?>">Hủy</a></td>
						<?php 
					}
					?>

				</tr>
				<?php 
			}
		}
		?>
	</tbody>
</table>

<?php require ("footer_admin.php") ?>