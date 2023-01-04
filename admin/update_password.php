
<?php
   $conn= mysqli_connect('localhost','root','','doanphp');
   mysqli_set_charset($conn,'utf8');

  if(isset($_POST['re_password']))
  {
  $old_pass=$_POST['old_pass'];
  $new_pass=$_POST['new_pass'];
  $re_pass=$_POST['re_pass'];
  $sql="SELECT * from admin where stt='1'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);
  $data_pwd=$row['matkhau'];
  // $chg_pwd=mysql_query("select * from users where id='1'");
  // $chg_pwd1=mysql_fetch_array($chg_pwd);
  // $data_pwd=$chg_pwd1['password'];
  if($data_pwd==$old_pass){
  if($new_pass==$re_pass){
    $update_pwd="UPDATE admin set matkhau='$new_pass' where stt='1'";
    $result=mysqli_query($conn,$update_pwd);
    if($result){
      echo "<script>alert('Đổi mật khẩu thành công'); window.location='doi-mat-khau-admin.php'</script>";
    }
   
  }
  else{
    echo "<script>alert('Mật khẩu vừa nhập không đúng'); window.location='doi-mat-khau-admin.php'</script>";
  }

  }
  else
  {
  echo "<script>alert('Mật khẩu củ không đúng'); window.location='doi-mat-khau-admin.php'</script>";
  }}
?>
