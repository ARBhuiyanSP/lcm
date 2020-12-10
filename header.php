<?php
session_start(); 
if(!isset($_SESSION['logged']['status'])){
    header("location: index.php");
    exit();
}
include 'connection/connect.php';
include 'helper/utilities.php';
include 'includes/industrial_process.php';
include 'includes/commercial_process.php';
include 'includes/bank_process.php';
include 'includes/country_process.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LC Management | Saif Power Group</title>

  <!---------------------------------------- Common Files ---------------------------------------------------->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!---------------------------------------- Common Files ---------------------------------------------------->
  <!---------------------------------------- Pagewise Files ---------------------------------------------------->
			<!-- daterange picker -->
			<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
			<!-- iCheck for checkboxes and radio inputs -->
			<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
			<!-- Bootstrap Color Picker -->
			<link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
			<!-- Tempusdominus Bootstrap 4 -->
			<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
			<!-- Select2 -->
			<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
			<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
			<!-- Bootstrap4 Duallistbox -->
			<link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
			<!-- BS Stepper -->
			<link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
			<!-- dropzonejs -->
			<link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
		  
			<!-- DataTables -->
			<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
			<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
			<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
			  <!-- summernote -->
			<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
			<!-- SweetAlert2 -->
			<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
			<!-- Toastr -->
			<link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!---------------------------------------- Pagewise Files ---------------------------------------------------->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Custom style -->
  <link rel="stylesheet" href="css/invstyle.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-circle-notch" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="includes/logout.php" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
