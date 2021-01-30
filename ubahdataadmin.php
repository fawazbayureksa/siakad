<?php
include 'database.php';
$session = $_SESSION['login']['id_admin'];
$query = mysqli_query($database, "SELECT * FROM admin WHERE id_admin='$session'");
while ($data = mysqli_fetch_assoc($query)) {;
    ?>
   <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2 class="text-center">UBAH DATA</h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><?php if($_SESSION['login']['level'] == 1){
                             echo"username" ;
                        }
                        else{
                             echo "NIP / NIS";
                        }?>
                        </label>
                        <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password2">
                    </div>
                    <button class="btn btn-primary" name="edit">Simpan</button>
                    <a href="index.php?Halaman=data_login"><i class="btn btn-default">Kembali</i></a>
                </form>
            </div>
        </div>
    </div>

<?php } ?>
<?php
if (isset($_POST['edit'])) {
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];

    if ($pass !== $pass2) {
        echo "<script>alert('password tidak sama');</script>";
        echo "<meta http.equiv='refresh' content='1;url=ubahdataadmin.php'>";
    } else {
        $query = mysqli_query($database, "UPDATE admin set username='$nama',password='$pass2' where id_admin='$session'");

        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>location='index.php?Halaman=data_login';</script>";
    }
}
