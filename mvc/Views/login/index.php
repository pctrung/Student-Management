<!DOCTYPE html>
<html lang="en">
<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/mvc/Views/shared/header.php";
?>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h4>Đồ án Hệ quản trị Cơ sở dữ liệu</h4>
      <a>Phạm Chí Trung - Hầu Diễm Xuân</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Vui lòng đăng nhập</p>

      <form action="/Login/login" method="post">
        <div class="input-group mb-3">
          <input required type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="btn_login" type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
</body>

</html>
