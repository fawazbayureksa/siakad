
<?php
include 'database.php';
mysqli_query($database,"DELETE FROM data_mapel WHERE kode_mapel='$_GET[id]'");
echo "<script>alert('Data mata pelajaran berhasil Di Hapus');</script>";
echo "<script>location='index.php?Halaman=data_mata_pelajaran';</script>";    
?>
