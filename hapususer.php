<?php
include 'database.php';
mysqli_query($database,"DELETE FROM admin WHERE id_admin='$_GET[id]'");
echo "<script>alert('Data Pengguna berhasil Di Hapus');</script>";
echo "<script>location='index.php?Halaman=data_login';</script>";    
?>
