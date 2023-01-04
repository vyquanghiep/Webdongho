<?php require ("header_admin.php") ?>
<style>
    .form_doimk{
    width: 30%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    .h1{
        text-align:center;
        margin-bottom:30px;
    }
</style>
<div class="form_doimk">

        <!-- <h1 style="margin-bottom:50px; margin-right:50%; color:red;">Change / update password in PHP using MySql and WampServer</h1> -->
       <h1 class="h1" >Đổi mật khẩu</h1>

        <div >
          <form action="update_password.php" method="post">
            <div class="form-group">
              <label for="exampleInputPassword1" style="">Password</label>
              <input type="password" class="form-control" name="old_pass" id="exampleInputPassword1" placeholder="Old Password...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="">New Password</label>
              <input type="password" class="form-control" name="new_pass" id="exampleInputPassword1" placeholder="New Password...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="">Re-Type New Password</label>
              <input type="password" class="form-control" name="re_pass" id="exampleInputPassword1" placeholder="Re-Type New Password...">
            </div>
            <button type="submit" name="re_password" class="btn btn-primary">Submit</button>
          </form>

        </div>

      </div>