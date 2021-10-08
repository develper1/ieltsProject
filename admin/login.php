<?php include 'sessionlogin.php';?>
<?php

 include 'db.php';

if(isset($_POST['signin'])){

$username = mysqli_real_escape_string($con,$_POST['email']);
$passwrd = mysqli_real_escape_string($con,$_POST['password']);

if($username!="" && $passwrd!=""){
    $sql = "SELECT * FROM tbl_users WHERE email='$username' and Passowrd='$passwrd'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if($count == 1 ){

      $_SESSION["adminlogin"] = true;
      $_SESSION["User_id"] = $row['User_id'];

      $_SESSION["email"] = $row['email']; 
        header("location:index.php");
    }
    else {
      $validation_err="Wrong Password/Email";
    }
}else {

  $validation_err="please enter email/password";
}



}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin</b></a>
      <div style="padding : 10px; background: red;max-width: 316px;">
	  <img src="images/logo1.PNG" alt="" style="max-width: 100%;
   ">
    </div>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="color:red" >Sign in to start your session</p>
      <?php
      if(isset($validation_err))

      { 

      ?>
      <div class="alert alert-danger" role="alert">
      <?php
      echo $validation_err;
      ?>
    </div>
<?php
      }
      ?>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-4 text-right">
            <button type="submit" name="signin" class="btn btn-danger btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1" >
        <a href="resetpassword.php" style="color:red">I forgot my password</a>
      </p>

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
