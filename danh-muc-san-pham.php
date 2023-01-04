<?php require ("include/header.php") ?>
<style>
		@import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Poppins", sans-serif;
	}

	html,
	body {
		display: grid;
		height: 100%;
		width: 100%;
		place-items: center;
		
		background: #fff;
	}

</style>
<div class="wrap-danhmuc">
	<div class="danhmuc">
		<h2>Danh mục sản phẩm</h2>
		<ul>	
			<?php
			$sql = 'select * from danhmucsanpham';
			$rs = mysqli_query($conn, $sql);
			if($rs){
				while ($row=mysqli_fetch_row($rs)) {
					?>
					<li><a id="<?php  echo "icondm".$row['0'];?>"href="danh-muc-san-pham.php?id=<?php echo $row[0];?>"><?php echo "Laptop ".$row[1]; ?></a></li>
					<?php
				}
			}
			?>
		</ul>
	</div>
<div class="slider">
	<?php
	$sql = 'select * from slide';
	$rs = mysqli_query($conn, $sql);
	if ($rs) {
		while ($row = mysqli_fetch_row($rs)) {
	?>
			<div class="slide" id="<?php echo "slide-" . $row[0]; ?>"><img src="<?php echo $row[1]; ?>" height="340"></div>
	<?php
		}
	}
	?>
</div>

<div class="formSearch">
	<style> 
input[type=search] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
h2{

	text-align: center;
}
</style>
	<form action="search.php" method="GET">
		<input  name="search" type="search" placeholder="Tìm Kiếm Sản phẩm ..." class="txttext" >
		<input type="submit" value="Tìm kiếm" class="submit" name="submit-search">
	
	</form>
	
	
	
	</div>
	<div>
		<?php 
		$madanhmuc = $_GET['id'];

		$sql ="SELECT * FROM sanpham WHERE madanhmuc = '$madanhmuc'";

		$rs = mysqli_query($conn, $sql);
		if($rs){
			while ($row=mysqli_fetch_row($rs)) {
				?>
				<a href="chi-tiet-san-pham.php?ma=<?php echo $row[0]; ?>">
					<div class="item-sv" style="background: #fff; margin-left: 20px; margin-bottom: 20px;" >
						<div class="rowtren">
							<img src="<?php echo $row[2];?>" height="250" width="250"/><br>
							<h4 class="price"><?php echo $row[1]; ?></h4><br>
							<h5><?php echo number_format($row[11])." VNĐ"; ?></h5>
						</div>
						<div class="rowduoi">
							Đường kính mặt: <span><?php echo $row[6]; ?></span><br>
							Chất liệu mặt kính: <span><?php echo $row[5]; ?></span><br>
							Chất liệu dây: <span><?php echo $row[4] ?></span><br>
							Bộ máy: <span><?php echo $row[3] ?></span><br>
							Chống nước: <span><?php echo $row[8] ?></span>
						</div>
					</div>
				</a>
				<?php
			}
		}
		?>
	</div>
	
</div>

<?php require ("include/footer.php") ?>