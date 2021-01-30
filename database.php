<?php
$server = "localhost";
$username ="root";
$password = "";
$database = "db_mahasiswa";
$database = mysqli_connect($server, $username, $password, $database);
if (!$database) {
    die('koneksi Database Gagal :' . mysqli_connect_error());
}
?>