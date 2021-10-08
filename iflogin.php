<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["userlogin"]) || $_SESSION["userlogin"] !== true){
    header("location: login.php");
    exit;
}
 include 'admin/db.php';

 $sql = "SELECT * FROM tbl_profile where pf_id=$_SESSION[pf_id]";
   $result=mysqli_query($con,$sql);
    $profile_info = mysqli_fetch_assoc($result);

?>