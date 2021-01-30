
<?php
include 'database.php';
mysqli_query($database, "DELETE FROM data_nilai_siswa_permapel WHERE id='$_GET[id]'");
echo "<script>alert('Data nilai berhasil Di Hapus');</script>";
echo "<script>location='javascript:window.history.go(-1);';</script>";
?>
