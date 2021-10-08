<?php include 'sessiondash.php';?>
<?php

include 'db.php';


if(isset($_POST['submit'])){
 
    $information = mysqli_real_escape_string($con,$_POST['information']);
    $warning=mysqli_real_escape_string($con,$_POST['warning']);

    $sql = "UPDATE tbl_setting set  information='$information',warning='$warning' WHERE st_id='1'";

    if(mysqli_query($con, $sql)){   
        
        $update_success="Data update Successfully.";
      } else{
        $validation_err="Data is not updated.";
      }



}







$sql = "SELECT * FROM tbl_setting";
$result=mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

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
   
            
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Basic information</h3>
            </div>
            <?php
      if(isset($update_success))

      { 

      ?>
      <div class="alert alert-success m-3" role="alert">
      <?php
      echo $update_success;
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
        <div class="col-sm-12">
              <div class="form-group">
                <label for="inputinformation">Information</label>
                <textarea  rows="15" name="information" class="form-control editor" placeholder="Enter description here" ><?php echo ($row['information']); ?></textarea>
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