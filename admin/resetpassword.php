<?php
include 'db.php';
if(isset($_POST['reset'])){
  $email = mysqli_real_escape_string($con,$_POST['email']);
if($email!=""){
  $sql = "SELECT * FROM tbl_users WHERE email='$email'";
  $result=mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);

  if($count > 0 ){
      $pass=$row['Passowrd'];
      $to = $email;
$subject = "Gcs login recover password";
$txt = "Here is you login detail. <br>

Email: $email<br>
Password: $row[Passowrd]<br>

<p>This emails comes from www.gcs.com</p>";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers

$headers .= "From: noreply@online-immi-gov-au.site/" . "\r\n";

if(mail($to,$subject,$txt,$headers)){
    $success="Please check you email inbox/spam to get Password!";
}else{
    $validation_err= "Something went wrong!";
}
  }else{
    $validation_err= "Please enter correct email.";
  }
    }else{
        $validation_err= "Please enter your email.";
    }

}?>




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
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a  class="h1"><b>Admin Gcs</b></a>
      <?php
      if(isset($validation_err)){ 
      ?>
      <div class="alert alert-danger" role="alert">
      <?php
      echo $validation_err;
      ?>
    </div>
<?php
      }
      ?>
      
        <?php
      if(isset($success)){ 
      ?>
      <div class="alert alert-success" role="alert">
      <?php
      echo $success;
      ?>
    </div>
<?php
      }
      ?>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email"  name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="row">
          
          <div class="col-4 text-right">
            <button type="submit" name="reset" class="btn btn-primary btn-block">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="login.php">Go to login?</a>
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
