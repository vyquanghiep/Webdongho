<?php require ("include/header.php") ?>
<style>
  
  button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: green;
}
</style>
<?php 
if(isset($_POST['submit'])){

    $username = $_POST['uname'];
    $psw = $_POST['psw'];

    if($username == "admin"){
        $query_login_admin = "SELECT * FROM admin WHERE id = '$username' AND MatKhau = '$psw'";
        if($rs = mysqli_query($conn, $query_login_admin)){
            if(mysqli_num_rows($rs) > 0){
                $_SESSION['admin'] = $username;
                echo "<script> alert('Đăng nhập thành công với vai trò quản trị!')</script>";
                echo "<script> window.location = 'admin/quan-li-san-pham.php';</script>";
            }
            else{
                echo "<script> alert('Sai tên đăng nhập hoặc mật khẩu')</script>";
            }
        }
    }else if(login($username,$psw) == true){

        if(getValueUser($username, 5) != 'K'){
           echo "<script> alert('Tài Khoản của bạn đã bị vô hiệu hóa')</script>";
       }else{
          $_SESSION['user'] = $username;
          echo "<script> alert('Đăng nhập thành công!')</script>";
          echo "<script> window.location = 'trang-chu.php';</script>";
      }
      
  }else{
    echo "<script> alert('Sai tên đăng nhập hoặc mật khẩu')</script>";
}
}
?>
<h2>Đăng Nhập</h2>

<form action="" method="POST" >
  <div class="imgcontainer">
    <img src=https://www.w3schools.com/howto/img_avatar2.png alt="Avatar" class="avatar" width="250" height="250">
</div>

<div class="container">
    <label for="uname"><b>Tên Đăng Nhập</b></label>
    <input type="text" placeholder="Nhập Tên Đăng Nhập ..." name="uname" required>

    <label for="psw"><b>Mật Khẩu</b></label>
    <input type="password" placeholder="Nhập Mật Khẩu ..." name="psw" required>

    <button type="submit" name="submit">Đăng Nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Nhớ đăng nhập của tôi
  </label>
</div>

<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Thoát</button>
    <span class="psw">Quên <a href="#">mật khẩu?</a></span>
</div>
</form>
<?php require ("include/footer.php") ?>