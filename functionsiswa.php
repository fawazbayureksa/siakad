<?php

include 'database.php';

$nis = $_GET['nis'];

$query = mysqli_query($database, "SELECT * FROM data_nilai_harian where nis='$nis'");
$data = mysqli_fetch_assoc($query);

$array = array(
    
    'noabsen' => $data['no_absen'],
    'nama' => $data['nama_siswa'],
    'kelas' => $data['kelas'],
    'semester' => $data['semester'],
    'tahun' => $data['tahun_pelajaran'],
    
);
echo json_encode($array);
