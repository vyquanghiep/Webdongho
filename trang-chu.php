<?php require("include/header.php") ?>
<link rel="stylesheet" href="css/style_for_gia.css">


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
	

	


<?php
$so_page;
$item_page = 4;
$page_index;
if(isset($_GET['page_index'])){
	$page_index = $_GET['page_index'];
}else{
	$page_index = 1;
}
?>

<div class="wrap-new-product">
	<h3><br />Đồng hồ độc quyền  </h3>
	<div class="new-product">
		<div>
			<?php

			$sql_select_laptop_sinhvien = "select COUNT(masp) from sanpham where loaisanpham = 'SV'";
			$rs2 = mysqli_query($conn, $sql_select_laptop_sinhvien);
			$row = mysqli_fetch_row($rs2);


			$so_page = ceil(((int)$row[0]) / $item_page);
			$temp = $page_index;
			$page_index  = ($page_index - 1) * 4;

			$sql_select_laptop_sinhvien = "select * from sanpham where loaisanpham = 'SV' limit " . $page_index . ",4 ";
			$rs2 = mysqli_query($conn, $sql_select_laptop_sinhvien);
			if ($rs2) {
				while ($row = mysqli_fetch_row($rs2)) {
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

	::selection {
		color: #fff;
		background: #f23b26;
	}

	.container {
		background: #fff;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		padding: 20px 30px;
		height: 70px;
		
	}

	.container .title {
		font-size: 50px;
		font-weight: 600;
	}

	.container p {
		font-size: 19px;
	}

	.pagination {
		margin: 25px 0 15px 0;
	}

	.pagination,
	.pagination li a {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
	}

	.pagination li {
		background: #228B22;
		list-style: none;
	}

	.pagination li a {
		text-decoration: none;
		color: #fdfdfd;
		height: 50px;
		width: 50px;
		font-size: 18px;
		padding-top: 1px;
		border: 1px solid rgba(0, 0, 0, 0.25);
		border-right-width: 0px;
		box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.35);
	}

	.pagination li:last-child a {
		border-right-width: 1px;
	}

	.pagination li a:hover {
		background: rgba(255, 255, 255, 0.2);
		border-top-color: rgba(0, 0, 0, 0.35);
		border-bottom-color: rgba(0, 0, 0, 0.5);
	}

	.pagination li a:focus,
	.pagination li a:active {
		padding-top: 4px;
		border-left-width: 1px;
		background: rgba(255, 255, 255, 0.15);
		box-shadow: inset 0px 2px 1px 0px rgba(0, 0, 0, 0.25);
	}

	.pagination li.icon a {
		min-width: 120px;
	}

	.pagination li:first-child span {
		padding-right: 8px;
	}

	.pagination li:last-child span {
		padding-left: 8px;
	}
</style>

<div class="container">
	<div class="title"></div>
	<ul class="pagination">

		<?php
		for ($i = 1; $i <= $so_page; $i++) {
			// echo $i." ".$page_index;
			if ($temp == $i) { ?>
				<li style="background: #396"><a href="http://localhost/doanphp1/Trang-chu.php?page_index=<?= $i ?>"><?= $i ?></a></li>
			<?php

			} else {
			?>
				<li><a href="http://localhost/doanphp1/Trang-chu.php?page_index=<?= $i ?>"><?= $i ?></a></li>

			<?php

			}
			?>
		<?php
		}
		?>
	</ul>
</div>
<br>


<?php
$so_page1;
$item_page1 = 4;
$page_index1;
if(isset($_GET['page_index1'])){
	$page_index1 = $_GET['page_index1'];
}else{
	$page_index1 = 1;
}
?>
<div class="wrap-new-product">
	<h3>Đồng hồ cao cấp</h3>
	<div class="new-product">
		<div>
			<?php

			$sql_select_laptop_sinhvien1 = "select COUNT(masp) from sanpham where loaisanpham = 'GM'";
			$rs21 = mysqli_query($conn, $sql_select_laptop_sinhvien1);
			$row1 = mysqli_fetch_row($rs21);


			$so_page1 = ceil(((int)$row1[0]) / $item_page1);
			$temp1 = $page_index1;
			$page_index1  = ($page_index1 - 1) * 4;

			$sql_select_laptop_sinhvien1 = "select * from sanpham where loaisanpham = 'GM' limit " . $page_index1 . ",4";
			$rs21 = mysqli_query($conn, $sql_select_laptop_sinhvien1);
			if ($rs21) {
				while ($row1 = mysqli_fetch_row($rs21)) {
			?>
				
		
					<a href="chi-tiet-san-pham.php?ma=<?php echo $row1[0]; ?>">
						<div class="item-sv">
							<div class="rowtren">
								<img src="<?php echo $row1[2]; ?>" height="250" width="250" /><br>
								<h4 class="price"><?php echo $row1[1]; ?></h4><br>
								<h5><?php echo number_format($row1[11]) . " VNĐ"; ?></h5>
							</div>
							<div class="rowduoi">
								Nguồn năng lượng : <span><?php echo $row1[6]; ?></span><br>
								Đối tượng: <span><?php echo $row1[5]; ?></span><br>
								Chất liệu dây: <span><?php echo $row1[4] ?></span><br>
								Đường kính mặt: <span><?php echo $row1[3] ?></span><br>
								Trọng lượng: <span><?php echo $row1[8] ?></span>
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
<br>
<!--phantrang2-->

<div class="container">
	<div class="title"></div>
	<ul class="pagination">

		<?php
		for ($i = 1; $i <= $so_page1; $i++) {
			// echo $i." ".$page_index;
			if ($temp1 == $i) { ?>
				<li style="background: #396"><a href="http://localhost/doanphp1/Trang-chu.php?page_index1=<?= $i ?>"><?= $i ?></a></li>
			<?php

			} else {
			?>
				<li><a href="http://localhost/doanphp1/Trang-chu.php?page_index1=<?= $i ?>"><?= $i ?></a></li>

			<?php

			}
			?>
		<?php
		}
		?>
	</ul>
</div>



<?php require("include/footer.php") ?>