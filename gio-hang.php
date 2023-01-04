<?php require ("include/header.php") ?>

<div class="wrapper">
	<?php
	if(isset($_SESSION['user'])){
		$query_count = "SELECT * FROM giohang WHERE khachhang = '".$_SESSION['user']."'";
		$rs2 = mysqli_query($conn, $query_count);
		if($rs2){
			$count = mysqli_num_rows($rs2);
			if($count == 0){
				echo "<div class='empty-cart'>
				<b style='font-size: 14px; color: green;'>GIỎ HÀNG CỦA BẠN CÒN TRỐNG</b><br><br><br><br>
				<a href='trang-chu.php' class='submit'>Mua Ngay</a>
				</div>";
			}else{
				?>
				<table class="table table-bordered cart_summary">
					<thead>
						<tr>
							<th class="cart_product">Sản Phẩm</th>
							<th>Mô Tả</th>
							<th>Giá Tiền</th>
							<th>Số Lượng</th>
							<th>Thành Tiền</th>
							<th>xóa sản phẩm</th>
							
						</tr>
					</thead>
					<tbody>
						<?php	
						$tongtien = 0;
						while($row = mysqli_fetch_row($rs2)){
							$name = getValueProduct($row[2], 1);
							$gia = getValueProduct($row[2],11);
							$duongkinmat = getValueProduct($row[2],3);
							$chatlieuday= getValueProduct($row[2],4);
							$doituong = getValueProduct($row[2],5);
							$nguondien = getValueProduct($row[2],6);
							$tongtien += $row[4];
							?>
							<tr>
								<td class="cart_product">
									<a href="#"><img src=" <?php echo getValueProduct($row[2],2)?>" width="300" heigth="300">
									</a>
								</td>
								<td class="cart_description">
									<p class="product-name"><a style="color: green;" href="chi-tiet-san-pham.php?ma=<?php echo($row[2]); ?>"><?php echo $name ?> </a>
									</p>
									<small class="cart_ref">Mã sản phẩm: <?php echo "$row[2]"; ?></small>
									<br>
									<small>Đường kính mặt: <?php echo "$duongkinmat"; ?></small>
									<br>
									<small>Chất liệu dây: <?php echo "$chatlieuday"; ?></small>
									<br>
									<small>Đối tượng sử dụng: <?php echo "$doituong"; ?></small>
									<br>
									<small>Nguồn điện: <?php echo "$nguondien"; ?></small>
									<br>
								</td>
								<td class="price"><span><?php echo number_format($gia). " VNĐ"; ?></span>
								</td>
								<td class="qty">
									<form action="cap-nhat-gio-hang.php" method="POST">
										<input name="sanpham" type="hidden" value="<?php echo($row[2]); ?>">
										<input name="so-luong-cap-nhat" class="form-control input-sm" type="text" value="<?php echo($row[3]); ?>" >
										<input style="background: green; color: #fff; padding: 6px; border: 1px solid green;font-weight: bold; cursor: pointer;" type="submit" value="Cập Nhật" name="submit">
									</form>
								</td>
								<td class="price">
									<span><?php echo number_format($row[4])." VNĐ";?></span>
								</td>
								<td class="action">
									
									<a onclick="return confirm('Xóa sản phẩm <?php echo($name);?> khỏi giỏ hàng của bạn?');" href="xoa-item.php?sanpham=<?php echo($row[2]); ?>"></a>
								</td>
								
							</tr>
							<?php 
						}
						?>
						
					</tbody>
						<tfoot>
						<tr>
							<td colspan="2" rowspan="3" style="text-align: center;">
							<p style="color: green; font-size: 20px;">Quét mã QR để thanh toán</p></br>
							<img style="margin-bottom: 30px;" src="imgQRCode/<?php  echo getValueUser($_SESSION['user'],5);?>" alt=""  width="200" height="200"/>
					</br>
							<a style="position: relative; " onclick="return confirm('Hoàn Tất Thanh Toán ?');" class='submit' href="hoan-tat-thanh-toan.php">Hoàn Tất Thanh Toán</a>
						</td>
							<td colspan="3"><strong>Tổng Tiền</strong></td>
							<td colspan="2"><strong><b><?php echo number_format($tongtien)." VNĐ" ?></b></strong>
							</td>
						</tr>
						<tr>
							<td colspan="3"><strong>Giảm Giá</strong>
							</td>
							<td colspan="2"><strong><b> 0 VNĐ</b></strong>
							</td>
						</tr>
						<tr>
							<td colspan="3"><strong>Tổng Cộng</strong>
							</td>
							<td colspan="2"><strong><b><?php echo number_format($tongtien)." VNĐ" ?></b></strong>
							</td>
						</tr>
						
					</tfoot>
				</table>
			</div>
		</div>  
		<?php 
	}
}					
}
?>
</div>

