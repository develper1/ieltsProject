<?php
session_start();
if(isset($_SESSION["adminlogin"]) && $_SESSION["adminlogin"] == true){
  header("location: index.php");
  exit;
}
?>