<?php
session_start();
if (!$_SESSION['login']) {
  echo "<scipt type='text/javascipt'>
  alert('Maaf anda harus login terlebih dahulu!');
  window.location = '/login.php'
  </scipt>";
}
else {
  include('../config/database.php');
  $user = new Database();
  $user = mysqli_query($user->koneksi,
  "select * from users where password='$_session[login]'");
  // var_dump($_SESSION['login']);
  $user = mysql_fetch_array($user); ?>

<!-- Header -->
<?php include('../layouts/includes/header.php'); ?>
<!-- End Header -->

  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show"></body>

  <!-- navbar -->
  <?php include('../layouts/includes/navbar.php'); ?>
  <!-- end navbar -->

  <div class="app-body">
  
  <!-- sidebar -->
  <?php include('../layouts/includes/sidebar.php'); ?>
  <!-- end sidebar -->

  <!-- main content -->
  <main class="main"></main>
  <!-- end main content -->

  <!-- script -->
  <?php include('../layouts/includes/script.php'); ?>
  <!-- end script -->
<?php }?>