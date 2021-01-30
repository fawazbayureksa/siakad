<?php

include 'database.php';

$kodemapel= $_GET['kode_mapel'];

$query = mysqli_query($database, "SELECT * FROM data_mapel where kode_mapel='$kodemapel'");
$data = mysqli_fetch_assoc($query);

$array = array(
    'nama_mapel' => $data['nama_mapel'],
);
echo json_encode($array);

?>
