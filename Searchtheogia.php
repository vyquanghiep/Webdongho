<?php require("include/header.php") ?>
<link rel="stylesheet" href="css/style_for_gia.css">
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

<div class="danhmuc">
	<h2>Danh mục sản phẩm</h2>
	<ul>
		<?php
		$sql = 'select * from danhmucsanpham';
		$rs = mysqli_query($conn, $sql);
		if ($rs) {
			while ($row = mysqli_fetch_row($rs)) {
		?>
				<li><a id="<?php echo "icondm" . $row['0']; ?>" href="danh-muc-san-pham.php?id=<?php echo $row[0]; ?>"><?php echo "Đồng hồ " . $row[1]; ?></a></li>
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
  border: 1px solid black;
  background: #fff;
}
</style>
	<form action="search.php" method="get">
		<input name="search" type="search" placeholder="Tìm Kiếm Sản phẩm ..." class="txttext" >
		<input type="submit" value="Tìm kiếm" class="submit" name="submit-search">
	</form>
	
	</div>
<br>
<div class="nav1">
	<h2>CHỌN MỨC GIÁ</h2>
<?php
		$sql = 'select * from price';
		$rs1 = mysqli_query($conn, $sql);
		if ($rs1) {
			while ($row = mysqli_fetch_row($rs1)) {
		?>
				<li><a id="<?php echo $row['0']; ?>" href="Searchtheogia.php?id=<?php echo $row[0];?>"><?php echo  $row[1]; ?></a></li>
		<?php
			}
		}
		?>
		</div>
	<div class="wrap-new-product">
<div class="new-product">
	<div>
	<?php 
		$macheck = $_GET['id'];
		if($macheck==1){

		$sql ="SELECT * FROM sanpham WHERE gia <15000000";
		}elseif ($macheck==2) {
			$sql ="SELECT * FROM sanpham WHERE gia <20000000 and gia >15000000" ;
		}elseif ($macheck==3) {
			$sql ="SELECT * FROM sanpham WHERE gia >20000000 and gia <25000000" ;
		}elseif ($macheck==4) {
			$sql ="SELECT * FROM sanpham WHERE  gia >25000000" ;
		}
		$rs1 = mysqli_query($conn, $sql);
		if($rs1){
			while ($row=mysqli_fetch_row($rs1)) {
				?>
			<a href="chi-tiet-san-pham.php?ma=<?php echo $row[0]; ?>">
						<div class="item-sv">
							<div class="rowtren">
								<img src="<?php echo $row[2]; ?>" height="250" width="250" /><br>
								<h4 class="price"><?php echo $row[1]; ?></h4><br>
								<h5><?php echo number_format($row[11]) . " VNĐ"; ?></h5>
							</div>
							<div class="rowduoi">
								Nguồn năng lượng : <span><?php echo $row[6]; ?></span><br>
								Đối tượng: <span><?php echo $row[5]; ?></span><br>
								Chất liệu dây: <span><?php echo $row[4] ?></span><br>
								Đường kính mặt: <span><?php echo $row[3] ?></span><br>
								Trọng lượng: <span><?php echo $row[8] ?></span>
							</div>
						</div>
					</a>
			<?php
				}
			}
			?>
			</div>
</div>
</div>	

	

	




<?php require("include/footer.php") ?>