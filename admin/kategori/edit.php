<?php
session_start();
if (!$_SESSION['login']) {
  echo "<scipt type='text/javascipt'>
  alert('Maaf anda harus login terlebih dahulu!');
  window.location = '/login.php'
  </scipt>";
}
else {
  include('../config/koneksi.php');
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
    <div class="modal fade kategori-<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/admin/kategori/proses.php?aksi=update" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit kategori </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="save" class="btn btn-block btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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