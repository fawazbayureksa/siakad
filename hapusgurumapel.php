
<?php
include 'database.php';
mysqli_query($database,"DELETE FROM data_guru_mapel WHERE nip='$_GET[id]'");
echo "<script>alert('Data Guru berhasil Di Hapus');</script>";
echo "<script>location='index.php?Halaman=data_guru_mata_pelajaran';</script>";    
?>
