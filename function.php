<?php

include 'database.php';

$nis = $_GET['nis'];

$query = mysqli_query($database, "SELECT * FROM data_siswa where nis='$nis'");
$data = mysqli_fetch_assoc($query);

$array = array(
    'noabsen' => $data['noabsen'],
    'nama' => $data['nama_siswa'],
    'kelas' => $data['kelas'],
    'semester' => $data['semester'],
    'tahun' => $data['tahun_ajaran'],
);
echo json_encode($array);
?>

