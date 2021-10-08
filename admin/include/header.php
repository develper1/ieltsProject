<?php
function active($currect_page, $class=''){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      
      if($class !=''){
          echo $class; //class name in css 
      }else{
          echo 'nav-link active '; //class name in css 
      }
      
  } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 
  <link rel="stylesheet" href="./plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">-->
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap 
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
-->  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker 
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">-->

  <link rel="stylesheet" type="text/css" href="./plugins/jquery.datetimepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-red navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="nav-icon fas fa-user"></i> Setting
      <!--    <span class="badge badge-danger navbar-badge">3</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="profile.php" class="dropdown-item">
           Profile
          </a>
          <a href="logout.php" class="dropdown-item">
           Logout
          </a>
          
        </div>
      </li>   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-danger elevation-4 ">
    <!-- Brand Logo -->
    <a  class="brand-link">
      <img src="images/logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: black;">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
           <li class="nav-item">
            <a href="./" class="nav-link <?php active('index.php');?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
 
 <!-- menu-open -->

          <li class="nav-item  <?php active('view-profile.php','menu-is-opening menu-open'). active('add-profile.php','menu-is-opening menu-open');?>">
            <a href="#" class="<?php active('view-profile.php'); active('add-profile.php'); ?> nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="view-profile.php" class="<?php active('view-profile.php');?> nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="add-profile.php" class="<?php active('add-profile.php');?> nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Profile</p>
                </a>
              </li>
              
             
            </ul>

          </li>
         

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>