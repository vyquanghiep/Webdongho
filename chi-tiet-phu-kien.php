<?php require ("include/header.php") ?>
<style>
	#thanhtien{
	width: 200px !important;
	border: none;
	background: #fff;
	font-size: 20px;
	font-weight: bold;
	color: green;
	text-align: center;
	margin-left: 50px;
	border-bottom: 2px solid green;
}
</style>
<?php 
if(isset($_GET['ma'])){
	$productid = $_GET['ma'];

	$sql_select_detail_product = "select * from phukien  where mapk = '$productid'";
	$rs = mysqli_query($conn, $sql_select_detail_product);

	if($rs){
		if($row = mysqli_fetch_row($rs)){
			$name = $row[1];
			$hinhanh = $row[2];
			$kichthuoc = $row[3];
			$gia = $row[4];
			$soluong = $row[6];
			
		}
	}
}
?>
<div class="dieu-huong">
	<a href="phukien.php">Trang chủ >></a>
	<a href="chi-tiet-phu-kien.php">  Danh mục sản phẩm >></a>
	<a href=""><?php echo $name; ?></a>
</div>
<div class="detail-product">
	<img src="<?php echo $hinhanh; ?>" alt=" <?php echo $name; ?>" width="400" heigth="400">
	<div class="info-laptop">
		<div class="detail1">
			<h2 style="color: green; margin: 10px 0;"><?php echo $name; ?></h2>
			Kích thước - size: <li><?php echo $kichthuoc ?></li><br>
			Giá Tiền <li style="color: green; padding: 10px;font-size: 20px; font-weight: bold";><?php echo number_format($gia)." VNĐ" ?></li><br>
		</div>
	
	</div>
	<div class="form-order">
		<script>
			function minus(){
				var soluong = document.getElementById("soluong");
				var gia = document.getElementById("gia").value;
				var thanhtien = document.getElementById("thanhtien");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + " VNĐ";
			}

			function plus(){
				var soluong = document.getElementById("soluong");
				var gia = document.getElementById("gia").value;
				var thanhtien = document.getElementById("thanhtien");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + " VNĐ";

			}
		</script>
		<?php 
		if(isset($_SESSION['user'])){

			if($soluong <= 0){
				echo "<span>SẢN PHẨM NÀY ĐÃ HẾT HÀNG</span>";
			}else{
				$query_login = "SELECT * FROM khachhang where username = '".$_SESSION['user']."'";
				$rs2 = mysqli_query($conn, $query_login);
				if($rs2){
					while($row = mysqli_fetch_row($rs2)){
						$fullname = $row[1];
						$diachi = $row[3];
						$phone = $row[4];
					}
				}

				if(isset($_POST['order'])){
					$soluong_order = $_POST['soluong'];
					$address = $_POST['address'];
					$sdt = $_POST['phone'];
					$thanhtien = $soluong_order * $gia;
					if($soluong_order > $soluong){
						echo "<script> alert('Bạn đã order quá số lượng hiện còn')</script>";
					}else{
						if(KiemTraOrder($_SESSION['user'],$_GET['ma'],$soluong_order,$diachi,$sdt)){
							echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng của bạn');</script>";
						}else{
							echo "<script>alert('ERROR: Vui lòng thử lại');</script>";
						}
					}
				}
				?>
				<button class="minus" onclick="minus();"></button>
				<button onclick="plus();" class="plus"></button>
				<form action="" method="POST">
					Số lượng đặt hàng: 
					<div class="order-soluong">
						<input required="" type="text" class="number"  readonly="" id="soluong" name="soluong" value="1" min="1" max="<?php echo $soluong ?>" step="1"> 
						TỔNG TIỀN:  
						<input type="text" value="<?php echo number_format($gia).' VNĐ';?>" id="thanhtien" readonly="" name="thanhtien">
					</div>
					<input type="hidden" value=" <?php  echo($gia)?>" name="gia" id="gia">
					<br>
					Địa chỉ giao hàng
					<input type="text" required="" placeholder="Nhập địa chỉ giao hàng" name="address" value="<?php  echo $diachi;?>">
					Số điện thoại
					<input type="text" required="" placeholder="Nhập số điện thoại" value=" <?php echo($phone);?>" name="phone">
					<input type="submit" value="Thêm vào giỏ hàng" class="submit" name="order">
					<h2 style="font-size: 30px;">Đánh giá của bạn</h2>
				</form>
				<div class="stars">
					  <form action="">
					    <input class="star star-5" id="star-5" type="radio" name="star"/>
					    <label class="star star-5" for="star-5"></label>
					    <input class="star star-4" id="star-4" type="radio" name="star"/>
					    <label class="star star-4" for="star-4"></label>
					    <input class="star star-3" id="star-3" type="radio" name="star"/>
					    <label class="star star-3" for="star-3"></label>
					    <input class="star star-2" id="star-2" type="radio" name="star"/>
					    <label class="star star-2" for="star-2"></label>
					    <input class="star star-1" id="star-1" type="radio" name="star"/>
					    <label class="star star-1" for="star-1"></label>
					  </form>
					</div>
				</form>
	
				<?php 
			}
		}else{
			echo "<h3>Xin mời đăng nhập để đặt hàng </h3><br><a class='submit' href='dang-nhap.php'>Đăng Nhập</a>";
		}
		?>
	</div>


</div>
<?php require ("include/footer.php") ?>