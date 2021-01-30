<?php
include 'database.php';
?>
<div class="content-wrapper">
  <h2 class="text-center"> TAMBAH DATA ADMIN </h2>
  <hr>
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
              <label>Konfirmasi Password</label>
              <input type="password" class="form-control" name="password2">
            </div>
            <div class="form-group">
              <label>Level</label>
             <select name="level" class="form-control" required>
               <option value="">-Pilih-</option>
               <option value="1">Admin</option>
               <option value="2">Guru</option>
               <option value="3">Siswa</option>
             </select>

            </div>
            <button class="btn btn-primary" name="simpan">Simpan</button>
            <a href="index.php?Halaman=data_login" class="btn btn-danger">Batal</a>
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
  $level = $_POST['level'];

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