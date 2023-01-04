<?php session_start(); ?>
<?php require '../ketnoi.php';?>
<?php include ("../function/function.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Website bán đồng hồ</title>
	<link rel="stylesheet" href="../admin/css/style_for_admin.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<link rel="shortcut icon" type="image/png" href="../images/icons8-shopping-cart-30.png"/>
	<link rel="stylesheet" href="style.css" href="../admin/css/jquery.dataTables.min.css">

</head>
<body>
	<?php  
	if(isset($_SESSION['admin'])){

		?>
		<head>
			<div class="top-admin">
				<h2>TRANG QUẢN TRỊ</h2>
			</div>
		</head>

		<main>
			<div class="menu">
				<ul>
					<?php 
					$sql = "SELECT * FROM danhmucadmin";

					if($rs = mysqli_query($conn,$sql)){

						while ($row = mysqli_fetch_row($rs)) {
							?>
							<li><a href="<?php echo($row[2]); ?>"><?php echo($row[1]); ?></a></li>
							<?php 
						}
					}
					?>
				</ul>
			</div>

			<div class="noidung-admin">



			<?php }else{
				echo "<script> alert('Vui lòng đăng nhập với quyền admin');</script>";
				echo "<script> window.location = '../dang-nhap.php';</script>";
			} ?>

			<!-- Bắt đầu phần nội dung -->






