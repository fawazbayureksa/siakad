<?php
include 'database.php';
$no = 1;
$query = mysqli_query($database, "SELECT * FROM data_nilai_harian where nis='$_GET[id]'");
$data = mysqli_fetch_assoc($query);
?>

<div class="content-wrapper">
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Laporan Hasil Belajar</h2>
            </div>
            <div class="card-body">
                <div class="row justify-content-start">
                    <div class="col-2">Nama Sekolah </div>
                    <div class="col-4">: SMA N 1</div>
                    <div class="col-sm-2">Tahun Pelajaran</div>
                    <div class="col-sm-4">: <?= $data['tahun_pelajaran'] ?></div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-2">Nama Siswa </div>
                    <div class="col-4">: <?= $data['nama_siswa'] ?></div>
                    <div class="col-sm-2">Kelas</div>
                    <div class="col-sm-4">: <?= $data['kelas'] ?></div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-2">Nis </div>
                    <div class="col-4">: <?= $data['nis'] ?></div>
                    <div class="col-sm-2">Program studi</div>
                    <div class="col-sm-4">: <?= $data['programstudi'] ?></div>
                </div>
            </div>
            <table class="table-bordered">
                <h5> I.</h5>
                <thead>
                    <tr>
                        <th rowspan="3">No</th>
                        <th rowspan="3">Mata Pelajaran</th>
                        <th colspan="6">Nilai Hasil Pelajaran</th>
                    </tr>
                    <tr>
                        <th width="100px">Kriterian Kelulusan minimal</th>
                        <th width="200px" colspan="2">Kognitif (pengetahuan & pemahaman)</th>
                        <th width="200px" colspan="2">Psikomotor (prkatik)</th>
                        <th width="150px">Adektif</th>
                    <tr>
                        <th width="100px">Angka</th>
                        <th width="60px">Angka</th>
                        <th width="140px">Huruf</th>
                        <th width="60px">Angka</th>
                        <th width="140px">Huruf</th>
                        <th>Predikat</th>

                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $querydata = mysqli_query($database, "SELECT * FROM data_nilai_siswa_permapel where  nis='$_GET[id]'");
                    while ($datamapel = mysqli_fetch_assoc($querydata)) {
                    ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?= $datamapel['nama_mapel'] ?></td>
                            <td><?= $datamapel['standar_nilai_kriteria'] ?></td>
                            <td><?= floor($datamapel['nilaiakhir_permapel']); ?></td>
                            <td><?= terbilang($datamapel['nilaiakhir_permapel']); ?></td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    <?php $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">II. Keterampilan Kompetensi Siswa</h5>
                        </div>
                        <table class="table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Keterangan</th>
                            </thead>
                            <tbody>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">III. Pengembangan Diri </h5>
                        </div>
                        <table class="table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Jenis Kegiatan</th>
                                <th>Keterangan</th>
                            </thead>
                            <tbody>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">IV. Kepribadian</h5>
                        </div>
                        <table class="table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Kepribadian</th>
                                <th>Keterangan</th>
                            </thead>
                            <tbody>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">V. Ketidak Hadiran </h5>
                        </div>
                        <table class="table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Alasan</th>
                                <th>Ketidak Hadiran</th>
                            </thead>
                            <tbody>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>