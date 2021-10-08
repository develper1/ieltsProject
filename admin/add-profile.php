<?php include 'sessiondash.php';?>
<?php

include 'db.php';
$date = date('Y-m-d');
if(isset($_POST['submit'])){
 
  $given_name = mysqli_real_escape_string($con,$_POST['given_name']);
  $family_name=mysqli_real_escape_string($con,$_POST['family_name']);
  $id_number = mysqli_real_escape_string($con,$_POST['id_number']);
  $candidate_number= mysqli_real_escape_string($con,$_POST['candidate_number']);
  $test_type = mysqli_real_escape_string($con,$_POST['test_type']);
  $speaking = mysqli_real_escape_string($con,$_POST['speaking']);
  $writing = mysqli_real_escape_string($con,$_POST['writing']);
  $message = mysqli_real_escape_string($con,$_POST['message']);
  $listening = mysqli_real_escape_string($con,$_POST['listening']);
  $test_date = mysqli_real_escape_string($con,$_POST['test_date']);
  $center_number = mysqli_real_escape_string($con,$_POST['center_number']);
  $trf_number = mysqli_real_escape_string($con,$_POST['trf_number']);
  $reading = mysqli_real_escape_string($con,$_POST['reading']);
  $overall = mysqli_real_escape_string($con,$_POST['overall']);
  $date_birth = mysqli_real_escape_string($con,$_POST['date_birth']);
  
  /*
$date= date("Y-m-d");
$time=date("H:m");
$lupdate=$date."T".$time;*/

  if($given_name!="" && $id_number!="" && $family_name!="" && $candidate_number!="" ){
    $sql_n = "SELECT * FROM tbl_profile WHERE id_number='$id_number' ";
    $result_n=mysqli_query($con, $sql_n);
    
  
    if(mysqli_num_rows($result_n) > 0)  {
      $validation_err="id_number is already exist.";
    }

   if(!isset($validation_err)){

   
        
  $sql = "INSERT INTO tbl_profile (family_name,name,test_date,id_number,candidate_number,test_type,message,speaking,writing,listening,Date_birth,reading,overall,center_number,trf_number) 
  VALUES ('$family_name','$given_name','$test_date','$id_number','$candidate_number','$test_type','$message','$speaking','$writing','$listening','$date_birth','$reading','$overall','$center_number','$trf_number')";

  $result=mysqli_query($con, $sql);

  
  if($result==1){   
    
    $Insert_err="Account has been created successfully.";
  } else{
    $validation_err="Data is not insert unsucceccfully.";
  }

   }
    
  
  }
  else{

    $validation_err="Please fill the required fields.";
  }

  
}

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
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
            
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Basic information to create new Profile</h3>
            </div>
            <?php
      if(isset($Insert_err))

      { 

      ?>
      <div class="alert alert-success m-3" role="alert">
      <?php
      echo $Insert_err;
      ?>
    </div>
<?php
      }
      ?>
      <?php
      if(isset($validation_err))

      { 

      ?>
      <div class="alert alert-danger m-3" role="alert">
      <?php
      echo $validation_err;
      ?>
    </div>
<?php
      }
      ?>

<form  method="post" enctype="multipart/form-data">
            <div class="row card-body col-12">
        <div class="col-sm-6">
              <div class="form-group">
                <label for="inputName">Given/Other Name<span class="text-danger">* </span></label>
                <input required="required" type="text" name="given_name"  class="form-control" value="">
              </div>

              <div class="form-group">
                <label for="inputName">Family Name<span class="text-danger">*</span></label>
                <input type="text" required="required" name="family_name"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Passport number/ID number<span class="text-danger">*</span></label>
                <input type="email" required="required" name="id_number"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Candidate Number<span class="text-danger">*</span></label>
                <input type="text" required="required" name="candidate_number"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Test Type<span class="text-danger">* </span></label>
                <input type="text" name="test_type" required="required" class="form-control" value="">
              </div>

              <div class="form-group">
                <label for="inputName">Speaking<span class="text-danger">* </span></label>
                <input type="number" name="speaking" required="required"  class="form-control" value="">
              </div> 
              <div class="form-group">
                <label for="inputName">Writing<span class="text-danger">* </span></label>
                <input type="number" name="writing" required="required"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Listening<span class="text-danger">* </span></label>
                <input type="number" name="listening" required="required"  class="form-control" value="">
              </div>  
              </div>
              <div class="col-sm-6">

              <div class="form-group">
                <label for="inputName">Test Date:<span class="text-danger">* </span><span class="text-danger">*</span></label>
                <input type="date" required="required" name="test_date"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Date of Birth:<span class="text-danger">* </span><span class="text-danger">*</span></label>
                <input type="date" required="required" name="date_birth"  class="form-control" value="">
              </div>
             
                <div class="form-group">
                <label for="inputName">Centre Number:<span class="text-danger">* </span><span class="text-danger">*</span></label>
                <input type="text" required="required" name="center_number"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">TRF Number<span class="text-danger">* </span></label>
                <input type="text" name="trf_number" required="required"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Reading<span class="text-danger">* </span></label>
                <input type="number" name="reading" required="required"  class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Overall<span class="text-danger">* </span></label>
                <input type="number" name="overall" required="required" class="form-control" value="">
              </div> 
              <div class="form-group">
                <label for="inputEstimatedBudget">Message:<span class="text-danger">* </span></label>

                <textarea required="true" type="text" required="required" name="message" class="form-control"></textarea>

              </div>


        </div>
       
            </div>
            <!-- /.card-body -->         
         <div class="row">
        <div class="col-12 pt-2 pr-5 pb-2">
        <button name="submit" type="submit" class="btn btn-success float-right">Submit</button>    
          
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