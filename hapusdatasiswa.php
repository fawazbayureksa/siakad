<?php
include 'database.php';
mysqli_query($database,"DELETE FROM data_siswa WHERE nis='$_GET[id]'");
echo "<script>alert('Data Siswa berhasil Di Hapus');</script>";
echo "<script>location='index.php?Halaman=data_siswa';</script>";    
?>
