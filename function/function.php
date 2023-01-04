<?php 
function getStatusUser($stt){
	if($stt == "K"){
		return "BT";
	}else{
		return "Vô Hiệu Hóa";
	}
}

function radomMaSanPham(){
	$chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$str ="LT".substr(str_shuffle($chars), 0, 3)."-".substr(str_shuffle($chars), 0, 4);
	return $str;
}
function dangky($username,$fullname,$psw,$psw_repeat,$diachi,$sdt){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';
	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "select * from khachhang where username = '".$username."'";
	$rs = mysqli_query($conn, $sql);

	if($rs){
		if(mysqli_num_rows($rs) > 0){
			echo "<script>alert('username này đã được sử dụng');</script>";
		}else{
			if(strlen($username) < 5){
				echo "<script>alert('Tên Đăng Nhập Quá Ngắn');</script>";
			}
			else if($psw != $psw_repeat){
				echo "<script>alert('Mật khẩu nhập lại không khớp');</script>";
			}
			else if(strlen($psw) < 5){
				echo "<script>alert('Mật khẩu phải từ 5 ký tự trở lên');</script>";
			}
			else{
				$query_insert = "INSERT INTO khachhang(username,fullname,password,address,phone) VALUES ('".$username."','".$fullname."','".$psw."','".$diachi."','".$sdt."')";
				if($rs_insert = mysqli_query($conn,$query_insert))
					echo "<script>alert('Đăng Ký Thành Công');</script>";
			}

		}
	}
}

function login($username, $psw){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';
	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$query_login = "SELECT * FROM khachhang where username = '".$username."' AND password = '".$psw."'";

	if($rs = mysqli_query($conn,$query_login)){
		if(mysqli_num_rows($rs) > 0){
			return true;
		}else{
			return false;
		}
	}
}

function capnhatthongtinuser($username, $fullname, $diachi, $sdt,$stt){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';
	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$query_login = "UPDATE khachhang SET fullname = '$fullname', address = '$diachi', phone = '$sdt', vohieuhoa = '$stt' WHERE username = '$username'"; 

	if($rs = mysqli_query($conn,$query_login)){
		return true;
	}
	return false;
}

function TachChuoi($str){

	if(strlen($str) > 18){
		return substr($str, 0, 18)." ...";
	}
	return $str;
}

function  getValueProduct($masp, $vitri){
	
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "select * from sanpham where masp = '".$masp."'";

	$value ;
	if($rs = mysqli_query($conn,$sql)){
		while ($row = mysqli_fetch_row($rs)) {
			$value = $row[$vitri];
		}
	}
	return $value;
}
function  getValueProduct1($mapk, $vitri){
	
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "select * from phukien where mapk = '".$mapk."'";

	$value ;
	if($rs = mysqli_query($conn,$sql)){
		while ($row = mysqli_fetch_row($rs)) {
			$value = $row[$vitri];
		}
	}
	return $value;
}

function getValueUser($username, $vitri){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "select * from khachhang where username = '".$username."'";

	$value ;
	if($rs = mysqli_query($conn,$sql)){
		while ($row = mysqli_fetch_row($rs)) {
			$value = $row[$vitri];
		}
	}
	return $value;
}

function giamSoLuonCon($sanpham,$soluong){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "UPDATE sanpham SET soluong = $soluong WHERE masp = '".$sanpham."'";

	if($rs = mysqli_query($conn,$sql)){
		return true;
	}else{
		return false;
	}

}

function CapNhatSoLuong($username, $sanpham, $soluong, $gia){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "UPDATE giohang SET soluong = $soluong , thanhtien = $gia WHERE khachhang = '".$username."' AND sanpham = '".$sanpham."'";

	if($rs = mysqli_query($conn,$sql)){
		return true;
	}else{
		return false;
	}
}

function TaoOrder($username,$sanpham,$soluong,$gia,$diachi, $sdt){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$query_insert_cart = "INSERT INTO giohang (khachhang,sanpham,soluong,thanhtien,diachi,sodienthoai) VALUES 
	('".$username."','".$sanpham."','".$soluong."','".$gia."','".$diachi."','".$sdt."')";

	if($rs_insert_cart = mysqli_query($conn,$query_insert_cart)){
		return true;
	}

	return false;

}

function KiemTraOrder($username, $sanpham, $soluong_congvao,$diachi,$sdt){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "SELECT * FROM giohang WHERE khachhang = '".$username."' AND sanpham = '".$sanpham."'";

	$gia = getValueProduct($sanpham,11);
	$soluongcon = getValueProduct($sanpham,15);
	$soluongconsauorder = $soluongcon - $soluong_congvao;

	if($rs = mysqli_query($conn,$sql)){
		if(mysqli_num_rows($rs) > 0){
			while($row = mysqli_fetch_row($rs)){
				$soluong_daco = $row[3];
			}

			$soluong = $soluong_congvao + $soluong_daco;

			$thanhtien = $soluong * $gia;

			CapNhatSoLuong($username,$sanpham,$soluong, $thanhtien);

			if(giamSoLuonCon($sanpham,$soluongconsauorder)){
				return true;
			}
		}else{
			$thanhtien_neworder = $gia * $soluong_congvao;

			if(TaoOrder($username,$sanpham,$soluong_congvao,$thanhtien_neworder,$diachi,$sdt)){
				
				if(giamSoLuonCon($sanpham,$soluongconsauorder)){
					return true;
				}
			}else{
				return false;
			}
		}

	}
	return false;
}
function xoagiohang($username, $sanpham){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$soluong_hiencon = getValueProduct($sanpham,15);

	$soluong_tronggiohang = getValuesGioHang($username,$sanpham,3);

	$sl_capnhat = $soluong_hiencon + $soluong_tronggiohang;

	if(giamSoLuonCon($sanpham, $sl_capnhat)){

		$sql = "DELETE FROM giohang WHERE khachhang = '".$username."' AND sanpham = '".$sanpham."'";

		if($rs = mysqli_query($conn,$sql)){
			return true;
		}
		return false;
	}
	return false;
}
function xoahetgiohang($username){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

		$sql = "DELETE FROM giohang WHERE khachhang = '".$username."'";

		if($rs = mysqli_query($conn,$sql)){
			return true;
		}
		return false;
}

function laySoLuongGioHang($username){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "SELECT COUNT(idgiohang) FROM giohang WHERE khachhang = '".$username."'";
	$count = 0;
	if($rs = mysqli_query($conn,$sql)){
		while ($row = mysqli_fetch_row($rs)) {
			$count = $row[0];
		}
	}		
	return $count;
}

function getValuesGioHang($username,$sanpham,$vitri){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "SELECT * FROM giohang WHERE nhanvien = '".$username."' AND sanpham = '".$sanpham."'";

	$value ;
	if($rs = mysqli_query($conn,$sql)){
		while ($row = mysqli_fetch_row($rs)) {
			$value = $row[$vitri];
		}
	}
	return $value;
}


function capnhatsanphamadmin($masp,$ten,$hinhanh,$cpu,$ram,$disk,$mh,$hdh,$tl,$kt,$nsx,$gia,$dm,$lsp,$gt,$slc){

	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "UPDATE sanpham SET tensp = '$ten', hinhanh = '$hinhanh', cpu= '$cpu', ram = '$ram', disk = '$disk', manhinh = '$mh',hedieuhanh = '$hdh', trongluong = '$tl', kichthuoc = '$kt', namsx = $nsx, gia = $gia, madanhmuc = $dm, loaisanpham = '$lsp', gioithieu = '$gt', soluong = $slc WHERE masp = '$masp'";

	if($rs = mysqli_query($conn,$sql)){
		return true;
	}else{
		return false;
	}

}

function themsanphamadmin($masp,$ten,$hinhanh,$cpu,$ram,$disk,$mh,$hdh,$tl,$kt,$nsx,$gia,$dm,$lsp,$gt,$slc){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "INSERT INTO sanpham VALUES ('$masp','$ten','$hinhanh','$cpu','$ram','$disk','$mh','$hdh','$tl','$kt',$nsx,$gia,$dm,'$lsp','$gt',$slc)";

	if($rs = mysqli_query($conn,$sql)){
		return true;
	}else{
		return false;
	}
}

function xoasanphamadmin($sanpham){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "DELETE FROM sanpham WHERE masp = '$sanpham'";

	if($rs = mysqli_query($conn,$sql)){
		return true;
	}
	return false;

}

function xoadanhmucsanpham($id){
	$server_name ='localhost';
	$user = 'root';
	$password = '';
	$database_name = 'doanphp';

	$conn = mysqli_connect($server_name, $user, $password, $database_name);

	$sql = "DELETE FROM danhmucsanpham WHERE madanhmuc = '$id'";

	if($rs = mysqli_query($conn,$sql)){
		return true;
	}
	return false;
}


?>