<?php

include 'database.php';

$nip= $_GET['nip'];

$query = mysqli_query($database, "SELECT * FROM data_guru_mapel where nip='$nip'");
$data = mysqli_fetch_assoc($query);

$array = array(
    'nama_guru' => $data['nama_guru'],
);
echo json_encode($array);

?>
