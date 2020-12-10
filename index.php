<?php session_start(); 
include 'connection/connect.php';
include 'includes/login_process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Engineering Ltd | Saif Power Group</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<style>
.bgimg {
	background: url(images/bg.jpg) no-repeat 50% fixed;
}
</style>
<body class="hold-transition login-page bgimg">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><img src="images/logo.png" height="60px"/></a>
    </div>
    <div class="card-body">
		<form id="login_form" name="login_form" method="post">
			<div class="form-group">
				<label for="inputEmail">Email address</label>
				<input type="text" id="email" name="email" class="form-control" placeholder="Email address" autocomplete="off">
				<?php if (isset($_SESSION['error_message']['email_empty']) && !empty($_SESSION['error_message']['email_empty'])) { ?>
					<div class="alert alert-warning">
						<strong>Warning!</strong> <?php echo $_SESSION['error_message']['email_empty']; ?>
					</div>
					<?php
					unset($_SESSION['error_message']['email_empty']);
				}
				?>
				<?php if (isset($_SESSION['error_message']['email_valid']) && !empty($_SESSION['error_message']['email_valid'])) { ?>
					<div class="alert alert-warning">
						<strong>Warning!</strong> <?php echo $_SESSION['error_message']['email_valid']; ?>
					</div>
					<?php
					unset($_SESSION['error_message']['email_valid']);
				}
				?>
			</div>
			<div class="form-group">
				<label for="inputPassword">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
				<?php if (isset($_SESSION['error_message']['password_empty']) && !empty($_SESSION['error_message']['password_empty'])) { ?>
					<div class="alert alert-warning">
						<strong>Warning!</strong> <?php echo $_SESSION['error_message']['password_empty']; ?>
					</div>
					<?php
					unset($_SESSION['error_message']['password_empty']);
				}
				?>
			</div>
			<input type="submit" name="login_submit" value="Login" class="btn btn-primary btn-block">
		</form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
