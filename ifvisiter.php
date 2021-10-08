<?php
session_start();
if(isset($_SESSION["userlogin"]) && $_SESSION["userlogin"] == true){
  header("location: result.php");
  exit;
}
 include 'admin/db.php';
?>