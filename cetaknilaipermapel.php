<?php
include 'database.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Print</title>
    <link href="dist/css/adminlte.css" rel="stylesheet" />
    <style type="text/css">
        h4 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h4>DATA NILAI PER MATA PELAJARAN</h4>
    <div class="container-sm">
        <div class="row">
            <?php
            $no = 1;
            $query = mysqli_query($database, "SELECT * FROM data_nilai_siswa_permapel where id='$_GET[id]'");
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <?php
                            if ($data['nilaiakhir_permapel'] > 75) {
                                echo "<div class='alert alert-success'>Lulus <strong</strong></div>";
                            } else {
                                echo "<div class='alert alert-danger'>Tidak Lulus <strong</strong></div>";;
                            }
                            ?>
                        </div>
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
                                <div class="col-6">SEMESTER</div>
                                <div class="col-4"><?php echo $data['semester']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">TAHUN PELAJARAN</div>
                                <div class="col-4"><?php echo $data['tahun_ajaran']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KODE MATA PELAJARAN</div>
                                <div class="col-4"><?php echo $data['kode_mapel']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">MATA PELAJARAN</div>
                                <div class="col-4"><?php echo $data['nama_mapel']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI HARIAN </div>
                                <div class="col-4"><?php echo $data['nilaiharian']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN TENGAH SEMESTER </div>
                                <div class="col-4"><?php echo $data['nilai_uts']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN AKHIR SEMESTER </div>
                                <div class="col-4"><?php echo $data['nilai_uas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI AKHIR RAPORT </div>
                                <div class="col-4"><?php echo $data['nilaiakhir_permapel']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">STANDAR NILAI KELULUSAN </div>
                                <div class="col-4"><?php echo $data['standar_nilai_kriteria']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA GURU </div>
                                <div class="col-4"><?php echo $data['nama_guru']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NIP </div>
                                <div class="col-4"><?php echo $data['nip']; ?></div>
                            </div>
                            <script>
                                window.print();
                            </script>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>