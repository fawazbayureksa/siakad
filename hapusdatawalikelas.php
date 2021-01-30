
<?php
include 'database.php';
mysqli_query($database,"DELETE FROM data_walikelas WHERE nip='$_GET[id]'");
echo "<script>alert('Data Wali Kelas berhasil Di Hapus');</script>";
echo "<script>location='index.php?Halaman=data_wali_kelas';</script>";    
?>
