<?php include 'sessiondash.php';?>
<?php

include 'db.php';
if(isset($_GET['id'])){
$id = mysqli_real_escape_string($con,$_GET['id']);

//Define the query
$query = "DELETE FROM tbl_profile WHERE pf_id='$id'";

$result=mysqli_query ($con,$query);

if(isset($result)){

    header("location: view-profile.php?Success=true");
}
else{
    header("location: view-profile.php?Error=true");
}
}
else{
    header("location: view-profile.php");
}
?>

