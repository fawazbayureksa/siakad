<?php
include 'database.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Print</title>
    <link href="dist/css/adminlte.css" rel="stylesheet" />
</head>

<body>
    <h4 class="text-center">DATA NILAI HARIAN SISWA PER MATA PELAJARAN</h4>
    <?php
    $no = 1;
    $query = mysqli_query($database, "SELECT * FROM data_nilai_harian where id='$_GET[id]'");
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col-6">No Absen </div>
                                <div class="col-4"><?php echo $data['no_absen']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NIS </div>
                                <div class="col-4"><?php echo $data['nis']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA SISWA </div>
                                <div class="col-4"><?php echo $data['nama_siswa']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KELAS </div>
                                <div class="col-4"><?php echo $data['kelas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">SEMESTER </div>
                                <div class="col-4"><?php echo $data['semester']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">TAHUN PELAJARAN </div>
                                <div class="col-4"><?php echo $data['tahun_pelajaran']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KELAS </div>
                                <div class="col-4"><?php echo $data['kelas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KODE MATA PELAJARAN </div>
                                <div class="col-4"><?php echo $data['kode_mapel']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">MATA PELAJARAN </div>
                                <div class="col-4"><?php echo $data['nama_mapel']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN HARIAN 1 </div>
                                <div class="col-4"><?php echo $data['nilai_ulangan1']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN HARIAN 2 </div>
                                <div class="col-4"><?php echo $data['nilai_ulangan2']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN HARIAN 3 </div>
                                <div class="col-4"><?php echo $data['nila_ulangan3']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">RATA RATA NILAI ULANGAN </div>
                                <div class="col-4"><?php echo $data['rata_rata_ulangan']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI TUGAS HARIAN 1 </div>
                                <div class="col-4"><?php echo $data['nilai_tugas1']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI TUGAS HARIAN 2 </div>
                                <div class="col-4"><?php echo $data['nilai_tugas2']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI TUGAS HARIAN 3</div>
                                <div class="col-4"><?php echo $data['nilai_tugas3']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI HARIAN </div>
                                <div class="col-4"><?php echo $data['nilai_harian']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">RATA RATA NILAI TUGAS </div>
                                <div class="col-4"><?php echo $data['rata_rata_tugas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA GURU </div>
                                <div class="col-4"><?php echo $data['nama_guru']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NIP </div>
                                <div class="col-4"><?php echo $data['nip']; ?></div>
                            </div>
                        </div>
                        <script>
                            window.print();
                        </script>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>
</body>

</html>