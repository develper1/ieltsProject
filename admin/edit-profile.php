<?php include 'sessiondash.php';?>
<?php

include 'db.php';
$date = date('Y-m-d');
$date_birth = date('Y-m-d');
if(isset($_GET['id'])){
  $id = mysqli_real_escape_string($con,$_GET['id']);
}else{
  header("location: view-profile.php");
}
if(isset($_POST['update-status'])){
 
  $computer_delivered = mysqli_real_escape_string($con,$_POST['computer_delivered']);
  $paper_based=mysqli_real_escape_string($con,$_POST['paper_based']);
  $life_skills = mysqli_real_escape_string($con,$_POST['life_skills']);

  $sql_p = "SELECT * FROM ielts_result_msg where pf_id='$id'";
     $result=mysqli_query($con,$sql_p);
     $count=mysqli_num_rows($result);

if($count== 0){

  $sql_s = "INSERT INTO ielts_result_msg (computer_based_result,paper_based_result,skills_based,pf_id) 
  VALUES ('$computer_delivered','$paper_based','$life_skills','$id');";

$result=mysqli_query($con, $sql_s);
  
    
if(isset($result)){   
  
  $update_success="Insert Successfully.";
} else{
  $validation_err="Not Insert unsucceccfully.";
}

}
else{
  $sql = "UPDATE ielts_result_msg set  computer_based_result='$computer_delivered',paper_based_result='$paper_based',skills_based='$life_skills',pf_id='$id'"; 
 
  if(mysqli_query($con, $sql)){
      $update_success="Data updated Successfully.";
    } else{
      $validation_err="Data is not updated.";
    }
}
  
  
  
  
  }

  // Update Profile
   if(isset($_POST['update'])){
 
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
  

    if($given_name!="" && $id_number!="" && $family_name!="" && $candidate_number!="" ){
  
    $sql_n = "SELECT * FROM tbl_profile WHERE pf_id <> '$id' and id_number='$id_number'";

 
    $result_n=mysqli_query($con, $sql_n);
    if(mysqli_num_rows($result_n) > 0)  {
      $validation_err="id number is already exist.";
    }
    if(!isset($validation_err)){
      $sql = "UPDATE tbl_profile set  family_name='$family_name',name='$given_name',test_date='$test_date',id_number='$id_number',candidate_number='$candidate_number',test_type='$test_type',message='$message',speaking='$speaking',writing='$writing',Date_birth='$date_birth',listening='$listening',reading='$reading',overall='$overall',center_number='$center_number',trf_number='$trf_number' where pf_id='$id'"; 
      if(mysqli_query($con, $sql)){
        $update_success="Data updated Successfully.";
      } else{
        $validation_err="Data is not updated.";
      }   
    
    }
 
  }
  else{
    $validation_err="please fill the required fields";
  }


}


//profile data
  $sql = "SELECT * FROM tbl_profile WHERE pf_id='$id'";
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
          <div class="col-sm-8">
            <h1 class="m-0">Edit Profile (<span class="text-bold"><?= $row['name'].' '.$row['family_name'] ?></span>)</h1>
            <?php
if(isset( $_SESSION["Success-msg"])){
  ?>
  <div class="alert alert-success m-3" role="alert">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <?php
  echo  $_SESSION["Success-msg"];
  unset ($_SESSION["Success-msg"]);
?>
</div>
 <?php
  }?>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
      if(isset($update_success)){ 
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

<div class="container" id="myload">
    <ul id="tabs" class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a id="tab-A" href="#pane-A"    class="nav-link <?php if(count($_POST)==0){echo "active";}?>" data-toggle="tab" role="tab">
             <span class="text-success">
                   
              <?= $row['name'].' '.$row['family_name'] ?>
            </span>
            </a>
        </li>

        <li class="nav-item">
            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Score Explaination</a>
        </li>
        <li class="nav-item">
            <a id="tab-k" href="#pane-k" class="nav-link" data-toggle="tab" role="tab">Result Messages</a>
        </li>

       
    </ul>


    <div id="content" class="tab-content" role="tablist">
        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
            <div class="card-header" role="tab" id="heading-A">
                <h5 class="mb-0">
                    <!-- Note: `data-parent` removed from here -->
                  
                </h5>
            </div>

            <!-- Note: New place of `data-parent` -->
            <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
              
            <div class="col-md-12 mt-3">
            <div class="card card-secondary">
            <div class="card-header">
            <h3 class="card-title"><?= $row['name'].' '.$row['family_name'] ?></h3>

<div class="card-tools">
  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
  </button>
</div>
            </div>

<div class="card-body">

<form  method="post" enctype="multipart/form-data">
            <div class="row card-body col-12">
        <div class="col-sm-6">
              <div class="form-group">
                <label for="inputName">Given/Other Name<span class="text-danger">* </span></label>
                <input required="required" type="text" name="given_name"  class="form-control" value="<?= $row['name']?>">
              </div>

              <div class="form-group">
                <label for="inputName">Family Name<span class="text-danger">*</span></label>
                <input type="text" required="required" name="family_name"  class="form-control" value="<?= $row['family_name']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Passport number/ID number<span class="text-danger">*</span></label>
                <input type="text" required="required" name="id_number"  class="form-control" value="<?= $row['id_number']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Candidate Number<span class="text-danger">*</span></label>
                <input type="text" required="required" name="candidate_number"  class="form-control" value="<?= $row['candidate_number']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Test Type<span class="text-danger">* </span></label>
                <input type="text" name="test_type" required="true" class="form-control" value="<?= $row['test_type']?>">
              </div>

              <div class="form-group">
                <label for="inputName">Speaking<span class="text-danger">* </span></label>
                <input type="number" name="speaking" required="true" class="form-control" value="<?= $row['speaking']?>">
              </div> 
              <div class="form-group">
                <label for="inputName">Writing<span class="text-danger">* </span></label>
                <input type="number" name="writing" required="true" class="form-control" value="<?= $row['writing']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Listening<span class="text-danger">* </span></label>
                <input type="number" name="listening" required="true" class="form-control" value="<?= $row['listening']?>">
              </div>  
              </div>
              <div class="col-sm-6">

              <div class="form-group">
                <label for="inputName">Test Date:<span class="text-danger">*</span></label>
                <input type="date" required="required" name="test_date"  class="form-control" value="<?= $row['test_date']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Date of Birth:<span class="text-danger">*</span></label>
                <input type="date" required="required" name="date_birth"  class="form-control" value="<?= $row['Date_birth']?>">
              </div>
             
                <div class="form-group">
                <label for="inputName">Centre Number:<span class="text-danger">*</span></label>
                <input type="text" required="required" name="center_number"  class="form-control" value="<?= $row['center_number']?>">
              </div>
              <div class="form-group">
                <label for="inputName">TRF Number<span class="text-danger">* </span></label>
                <input type="text" name="trf_number" required="true"  class="form-control" value="<?= $row['trf_number']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Reading<span class="text-danger">* </span></label>
                <input type="number" name="reading" required="true" required="true"  class="form-control" value="<?= $row['reading']?>">
              </div>
              <div class="form-group">
                <label for="inputName">Overall<span class="text-danger">* </span></label>
                <input type="number" name="overall" required="true" class="form-control" value="<?= $row['overall']?>">
              </div> 
              <div class="form-group">
                <label for="inputEstimatedBudget">Message:<span class="text-danger">* </span></label>

                <textarea required="true" type="text" required="true" name="message" class="form-control"><?= $row['message']?></textarea>

              </div>


        </div>
       
            </div>
            <!-- /.card-body -->         
         <div class="row">
        <div class="col-12 pt-2 pr-5 pb-2">
        <button name="update" type="submit" class="btn btn-success float-right">Update</button>    
          
        </div>
      </div>

        </form>
            </div>
            </div>
            </div>
            </div>
            


        </div>



      <div id="pane-B" class="card tab-pane fade " role="tabpanel" aria-labelledby="tab-B">
        <div class="card-header" role="tab" id="heading-B">
        <h5 class="mb-0">
      
                </h5>
            </div>
            <div id="collapse-B" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
          
              
      <div class="row">
      
      
        <div class="col-md-12 mt-3">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Manage Messages For Score</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body">
            <form method="post" id="message_form" enctype="multipart/form-data">
            <div class="form-group">
       <label for="inputSpentBudget">Score Type</label>
       <select  name="score_type" class="form-control" required="true">
         <option class="wc-option" value=""  selected="">Please select a value...</option>
         <option class="wc-option" value="Speaking" >Speaking</option>
         <option class="wc-option" value="Reading" >Reading</option>
         <option class="wc-option" value="Writing" >Writing</option>
         <option class="wc-option"  value="Listening">Listening</option>
         <option class="wc-option" value="Overall" >Overall</option>
         
       </select>
     </div>
            
     <div class="form-group">
                <label for="inputEstimatedBudget">Your score explained?</label>

                <textarea required="true" type="text" name="score_explain" class="form-control editor"></textarea>
                <input type="hidden" name="pf_id" value="<?= $id ?>">
              </div>

              <button name="corespondence" class="btn btn-success">Submit</button> 
              <div id="corres-message" class="mt-3"></div>

              <table class="table">
                <thead>
                  <tr>
                    <th>Score Type</th>
                    <th>Explanation Message</th>               
                  </tr>
                </thead>
                <tbody id="message_form_table">

<?php 
 ///Get all data
        $sql = "SELECT Msg_id,score_explained,score_type FROM tbl_message
        inner join tbl_profile on (tbl_profile.pf_id=tbl_message.pf_id)
        order by Msg_id Desc";

    $result=mysqli_query($con,$sql);
    
    while ($row = mysqli_fetch_assoc($result)) {
    ?>

                  <tr id="corres_item_<?= $row['Msg_id'] ?>">
                    <td><?= $row['score_type'] ?> </td>
                    <td><?= $row['score_explained']?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                    
                        <button type="button" onclick="Deletemessage(<?= $row['Msg_id']?>);" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>

    <?php 
          $output['data'][]=$row;
      }
?>

                </tbody>
              </table> 
            </div>
            </form>
            <!-- /.card-body -->
          </div>

 
            </div>
      </div>
      </div>
          
        
      </div>
      <!-- sub user start -->
         <?php
$sql_p = "SELECT * FROM ielts_result_msg where pf_id='$id'";
   $result=mysqli_query($con,$sql_p);
    $application_status = mysqli_fetch_assoc($result);
   
?>

      <div id="pane-k" class="card tab-pane fade " role="tabpanel" aria-labelledby="tab-k">
        <div class="card-header" role="tab" id="heading-k">
        <h5 class="mb-0">
      
                </h5>
            </div>
            <div id="collapse-k" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-k">
          
              
      <div class="row">
      
      
        <div class="col-md-12 mt-3">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Application Status</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body">
      
            <form method="post" id="status_form" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputEstimatedBudget">When will I get my computer-delivered IELTS results (including IELTS for UKVI)?</label>

                <textarea required="true" type="text" name="computer_delivered" class="form-control editor"><?php echo ($application_status['computer_based_result']); ?></textarea>

              <input type="hidden" name="pf_id" value="<?= $id ?>">

              </div>

              <div class="form-group">
                <label for="inputEstimatedBudget"> When will I get my paper-based IELTS results (including IELTS for UKVI)?</label>

                <textarea required="true" type="text" name="paper_based" class="form-control editor"><?php echo ($application_status['paper_based_result']); ?></textarea>


              </div>

              <div class="form-group">
                <label for="inputEstimatedBudget"> When will I get my IELTS Life Skills results?</label>

                <textarea required="true" type="text" name="life_skills" class="form-control editor"><?php echo ($application_status['skills_based']); ?></textarea>

              </div>
           
              <button name="update-status"  class="btn btn-success">Update</button>
              

          
            </div>
            </form>
            <!-- /.card-body -->
          </div>

 
            </div>
      </div>
      </div>
          
        
      </div>


          
        
      </div>









          </div>      
      </div>
            </div>
            
        </div>
    
</div>


      

      
    
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->
<?php

    if( isset($_POST['form_type'])){
     
      echo  "<script>
document.addEventListener('DOMContentLoaded', 
  function(){
    document.getElementById('".$_POST['form_type']."').click();  
  }
);


</script>";
    }

 ?>

  <?php 
  include "include/footer.php";?>
  <style>
.scrollit {
    overflow:scroll;
    height:200px;
    margin-top: 80px;
}

  </style>
 