<?php include 'sessiondash.php';?>
<?php

include 'db.php';


if(isset($_POST['update-subuser'])){
  $id = mysqli_real_escape_string($con,$_POST['sub_id']);
  $pf_id = mysqli_real_escape_string($con,$_POST['pf-id']);
  
  $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
  $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
  $applic_type=mysqli_real_escape_string($con,$_POST['applicant-type']);
  $biomet_no=mysqli_real_escape_string($con,$_POST['biometric-number']);
  $unique_client=mysqli_real_escape_string($con,$_POST['unique-client']);
  $accomp_status=mysqli_real_escape_string($con,$_POST['accomp-status']);
  $country_birth=mysqli_real_escape_string($con,$_POST['country-birth']);
  $city_birth=mysqli_real_escape_string($con,$_POST['city-birth']);
  $Gender=mysqli_real_escape_string($con,$_POST['gender']);
  $date_birth=mysqli_real_escape_string($con,$_POST['date-birth-sub']);
  $biometr_enroll=mysqli_real_escape_string($con,$_POST['biometric-enroll']);
  $biometr_expire=mysqli_real_escape_string($con,$_POST['biometric-expire']);
  $accompany_status=mysqli_real_escape_string($con,$_POST['accompany-status']);
  $immigration_status=mysqli_real_escape_string($con,$_POST['immigration-status']);
  $official_language=mysqli_real_escape_string($con,$_POST['official-language']);

  if($firstname!="" && $lastname!="")
  $sql_u = "UPDATE sub_profile set  firstname='$firstname',accomp_status='$accomp_status',datebirth='$date_birth',country_birth='$country_birth',lastname='$lastname',City_birth='$city_birth',
  biometric_number='$biomet_no',biometric_enroll_date='$biometr_enroll',biometric_expire_date='$biometr_expire',unique_client='$unique_client',applicant_type='$applic_type',accompany_status='$accompany_status',immigration_status='$immigration_status',official_language='$official_language' WHERE sbpf_id='$id'";
  $result=mysqli_query($con, $sql_u);
  
    
  if(isset($result)){   
    $_SESSION["Success-msg"]="Updated Successfully";
    header("location: edit-profile.php?id=$pf_id&Success=true");
  } else{
    header("location: view-profile.php?Error=true");
  }



}

/*
if(isset($_POST['update-health'])){

  $sub_id = mysqli_real_escape_string($con,$_POST['subu_id']);
$profile_id = mysqli_real_escape_string($con,$_POST['profile-id']);
  $sub_health_message = mysqli_real_escape_string($con,$_POST['sub-health-message']);
  $sub_health_tagline=mysqli_real_escape_string($con,$_POST['subprofile-tagline']);

  $sql_he = "UPDATE sub_profile set  health_message='$sub_health_message',health_tagline='$sub_health_tagline' WHERE sbpf_id='$sub_id'";
 
  $result_he=mysqli_query($con, $sql_he);
  if(isset($result_he)){   
    $_SESSION["Success-msg"]="Updated Successfully";
    header("location: edit-profile.php?id=$profile_id&Success=true");
  } else{
    header("location: view-profile.php?Error=true");
  }



}
*/


?>