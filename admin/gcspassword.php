<?php include 'gcssessiondash.php';?>

<?php

 include 'gcsdb.php';

if(isset($_POST['reset'])){
 
$username = mysqli_real_escape_string($con,$_POST['email']);
$currpasswrd = mysqli_real_escape_string($con,$_POST['currpass']);
$newpasswrd = mysqli_real_escape_string($con,$_POST['newpass']);
$confirmpasswrd = mysqli_real_escape_string($con,$_POST['confirmpass']);

if($username!=""){

  if($currpasswrd!="" || $newpasswrd!="" || $confirmpasswrd!=""){
  
    $sql = "SELECT * FROM tbl_users WHERE passowrd='$currpasswrd' ";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

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
            <h1 class="m-0">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Setting</li>
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
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Basic information to update email or password</h3>
            </div>

<form  method="post">
            <div class="row card-body col-12">
        <div class="col-sm-6">
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="email" value="<?php echo $_SESSION["email"]?> " name="email"  class="form-control" value="">
              </div>

              <div class="form-group">
                <label for="inputName">Current password</label>
                <input type="password" name="currpass"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">New password</label>
                <input type="password" name="newpass"  class="form-control" value="">
              </div>
            <div class="form-group">
                <label for="inputName">Confirm new password</label>
                <input type="password" name="confirmpass"  class="form-control" value="">
              </div>

           


        </div>
       
            </div>
            <!-- /.card-body -->         
         <div class="row">
        <div class="col-12 pt-2 pr-5 pb-2"> 
        <button type="submit" name="reset" class="btn btn-success float-right">Submit</button>   
          
        </div>
      </div>

        </form>
         </div>
                  <!-- /.card -->
        </div>

      </div>
    
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

  <?php 
  include "include/footer.php";