
<?php
include 'database.php';
mysqli_query($database, "DELETE FROM data_nilai_harian WHERE nis='$_GET[id]'");
echo "<script>alert('Data Nilai berhasil Di Hapus');</script>";
echo "<script>location='index.php?Halaman=data_nilai_harian';</script>";
?>
