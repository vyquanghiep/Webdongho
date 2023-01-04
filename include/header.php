<?php session_start(); ?>
<?php require 'ketnoi.php';?>
<?php include ("function/function.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ĐHH Watch</title>
	<link rel="stylesheet" href="css/style_for_header.css">
	<link rel="stylesheet" href="css/style_for_footer.css">
	<link rel="stylesheet" href="css/style_for_content.css">
	<link rel="stylesheet" href="css/style_for_index.css">
	<link rel="stylesheet" href="css/style_for_detail.css">
	<link rel="stylesheet" href="css/style_for_register.css">
	<link rel="stylesheet" href="css/style_for_table.css">
	<link rel="stylesheet" href="css/style_for_star.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="shortcut icon" type="image/png" href="images/shopping.png"/>
	<link rel="stylesheet" href="style.css" href="../admin/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
	<head>
		<div class="top">
		
			<?php 
			$fullname = "";
			if(isset($_SESSION['user'])){
				$fullname = getValueUser($_SESSION['user'],1);
				?>
				<div class="login">
					<a id="register" href="thong-tin-tai-khoan.php">
						<?php 
						echo $fullname;
						?></a>
						<a id="login" href="dang-xuat.php">Đăng Xuất</a>
					</div>
					<?php  
				}else{
					?> 
					<div class="login">
						<a id="login" href="dang-nhap.php">Đăng Nhập</a>
						<a id="register" href="dang-ky-tai-khoan.php">Đăng Ký</a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="header">
				<div class="logo">
					<a href="trang-chu.php">
						<img id="logo-img" src="images/logodh.png" alt="logo" width="100" height="100"><br>
						<img src="images/tenlogo.png" alt="logo" height="25">
					</a>
				</div>
				<div class="nav">
					<ul>
						<li><a href="../doanphp1/Trang-chu.php">Trang Chủ</a></li>
						<li><a href="../doanphp1/gioithieu.php">Giới Thiệu</a></li>
						<li><a href="../doanphp1/sanpham.php ">Review</a></li>
						<li><a href="../doanphp1/phukien.php">Phụ kiện</a></li>
						<li><a href="../doanphp1/hotro.php">Hỗ Trợ</a></li>
					</ul>
					<?php
					if(isset($_SESSION['user'])){
						$query_count = "SELECT * FROM giohang WHERE khachhang = '".$_SESSION['user']."'";
						$rs2 = mysqli_query($conn, $query_count);
						if($rs2){
							$count = mysqli_num_rows($rs2);
							?>
							<div class="dropdown">
								<span><a class="cart" href="gio-hang.php">Giỏ hàng (<?php echo "$count"; ?>)</a> </span>
								<div class="dropdown-content">
									<?php 
									if($count == 0){
										echo "<b style='font-size: 14px; color: green;'>Chưa có sản phẩm nào</b><br>";
									}
									$tongtien = 0;
									while($row = mysqli_fetch_row($rs2)){
										$name = getValueProduct($row[2], 1);
										$tongtien += $row[4];
										?>
										<div class="cart-item">
									
											<span><?php echo TachChuoi($name); ?></span>
											<span><?php echo "Số lượng: ".$row[3]; ?></span>
											<b style="font-size: 10px; color: green;"><?php echo number_format($row[4])." VNĐ";?></b>
										</div>
										<?php 
									}
									?>
									Tổng Tiền: <b><?php echo number_format($tongtien)." VNĐ" ?></b>
								</div>
							</div>  
							<?php 
						}					
					}
					?>
				</div>
			</div>
		</head>
		<main>