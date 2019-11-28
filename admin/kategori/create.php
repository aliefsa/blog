<?php

session_start();
if (!$_SESSION['login']) {
  echo "<scipt type='text/javascipt'>
  alert('Maaf anda harus login terlebih dahulu!');
  window.location = '/login.php'
  </scipt>";
}
else {
  include('../../config/koneksi.php');
  $user = new Database();
  $user = mysqli_query($user->koneksi,
  "SELECT * FROM users WHERE PASSWORD='$_SESSION[login]'");
  // var_dump($_SESSION['login']);
  $user = mysqli_fetch_array($user); ?>

<!-- Header -->
<?php include('../../layouts/includes/header.php'); ?>
<!-- End Header -->

  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  </body>
    <div class="app-body">
        <div class="modal fade kategori" tabindex="-1" role="dialog" aria-labelledy="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modapl-content">
              <form action="admin/kategori/proses.php?akses=create" method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div clas="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                  <button type="submit" name="save" class="btn btn-block btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
  </div>
  <!-- navbar -->
  <?php include('../../layouts/includes/navbar.php'); ?>
  <!-- end navbar -->

  
      
  
  <!-- sidebar -->
  <?php include('../../layouts/includes/sidebar.php'); ?>
  <!-- end sidebar -->

  <!-- main content -->
  <main class="main"></main>
  <!-- end main content -->

  <!-- script -->
  <?php include('../../layouts/includes/script.php'); ?>
  <!-- end script -->
<?php }?>