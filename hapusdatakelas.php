
<?php
include 'database.php';
mysqli_query($database, "DELETE FROM data_kelas WHERE no_kelas='$_GET[id]'");
echo "<script>alert('Data Kelas berhasil Di Hapus');</script>";
echo "<script>location='index.php?Halaman=data_kelas';</script>";
?>
