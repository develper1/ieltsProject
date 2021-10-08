<?php include 'sessiondash.php';?>
<?php

include 'db.php';
if(isset($_GET['id'])){
$id = mysqli_real_escape_string($con,$_GET['id']);
$pf_id = mysqli_real_escape_string($con,$_GET['pf_id']);
//Define the query
$query = "DELETE FROM sub_profile WHERE sbpf_id='$id'";
$result=mysqli_query ($con,$query);

if(isset($result)){

    header("location: edit-profile.php?id=$pf_id&Success=true");
}
else{
    header("location:  edit-profile.php?id=$pf_id&Error=true");
}
}
else{
    header("location: view-profile.php");
}
?>

