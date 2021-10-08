<?php include 'sessiondash.php';?>

<?php

 include 'db.php';

if(isset($_POST['reset'])){
 
$username = mysqli_real_escape_string($con,$_POST['email']);
$currpasswrd = mysqli_real_escape_string($con,$_POST['c_password']);
$newpasswrd = mysqli_real_escape_string($con,$_POST['new_password']);
$confirmpasswrd = mysqli_real_escape_string($con,$_POST['cfm_password']);

if($username!=""){

  if($currpasswrd!="" || $newpasswrd!="" || $confirmpasswrd!=""){
  
    $sql = "SELECT * FROM tbl_users WHERE passowrd='$currpasswrd' and User_id=$_SESSION[User_id]";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);


    if($count !== 1 ){ 
      
      $validation_err="please Enter your correct current password";

    }
      
if($newpasswrd !== $confirmpasswrd ){

  $validation_err="Your new password and confirm password is not match";

}
}

if(!isset($validation_err)){ //run when no any Error
  $sql = "UPDATE  tbl_users set email='$username'"  ; 

  if($confirmpasswrd!=""){
    $sql.=", passowrd ='$confirmpasswrd'";
  }
  $sql.=" WHERE User_id=$_SESSION[User_id]"; 

  if(mysqli_query($con, $sql)){
    $update_msg="Update successfully.";
} else {
  $update_msg="Record is not updated unsuccessfully.";
}
  }





}else{
  $validation_err="Please enter email address.";
}
}//if isset

$sql = "SELECT * FROM tbl_users WHERE  User_id=$_SESSION[User_id]";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

?>






<?php 
 include "include/header.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
      if(isset($update_msg))

      { 

      ?>
      <div class="alert alert-success" role="alert">
      <?php
      echo $update_msg;
      ?>
    </div>
<?php
      }
      ?>
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

      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-md-12 col-12">
                   <!-- jquery validation -->
            <div class="card card-primary">
                <!-- form start -->
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required="required" name="email" value="<?php echo $row["email"]?> " class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Current Password</label>
                    <input type="password" name="c_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" name="new_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

              <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="cfm_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="reset" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>


        </div>



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  include "include/footer.php";