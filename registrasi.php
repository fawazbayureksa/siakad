<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
  <h2 class="text-center"> DAFTAR SEBAGAI SISWA </h2>
  <hr>
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
            
            <div class="form-group">
              <label>NIS</label>
              <input type="number" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label>Konfirmasi Password</label>
              <input type="password" class="form-control" name="password2" required>
            </div>
            <div class="form-group">
              <label>Level</label>
             <input type="text" name="level" value="SISWA" class="form-control" readonly>
            </div>
            <button class="btn btn-primary" name="simpan">Simpan</button>
            <a href="login.php" class="btn btn-danger">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['username'];
  $pass = $_POST['password'];
  $pass2 = $_POST['password2'];
  $level = 3;

  if ($pass !== $pass2) {
    echo "<script>alert('password tidak sama');</script>";
    echo "<script>location='index.php?Halaman=tambah_data_admin';</script>";
  } else {
  mysqli_query($database, "INSERT INTO admin (username,password,level) VALUES ('$nama','$pass2','$level')");

    echo "<script>alert('Tambah data Berhasil');</script>";
    echo "<script>location='index.php?Halaman=data_login';</script>";
  }
}
?>
</body>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</html>