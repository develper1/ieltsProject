<?php 
session_start();
unset($_SESSION['userlogin']);
unset($_SESSION['pf_id']);
unset($_SESSION['id_number']);

header("location: login.php");
?>