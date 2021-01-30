<?php
include 'database.php';
?>
<style>
    .card-header {
        background-color: #117c6f;
        color: white;
    }
</style>
<div class="content-wrapper">
    <div class="container">
        <section class="content-header">
            <h4 class="text-right"><a href="index.php?Halaman=data_nilai_harian" class="btn btn-info"></i>Kembali</a></h4>
        </section>
        <div class="row">
            <?php
            $no = 1;
            $query = mysqli_query($database, "SELECT * FROM data_nilai_harian where nis='$_GET[id]'");
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Data Nilai Harian Siswa</h4>
                            <h5 style="color: yellow" class="text-center"><strong><?= $data['nama_mapel']; ?> </strong></h5>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col-6">No Absen </div>
                                <div class="col-6"><?php echo $data['no_absen']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NIS </div>
                                <div class="col-6"><?php echo $data['nis']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA SISWA </div>
                                <div class="col-6"><?php echo $data['nama_siswa']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KELAS </div>
                                <div class="col-6"><?php echo $data['kelas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">SEMESTER </div>
                                <div class="col-6"><?php echo $data['semester']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">TAHUN PELAJARAN </div>
                                <div class="col-6"><?php echo $data['tahun_pelajaran']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KELAS </div>
                                <div class="col-6"><?php echo $data['kelas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">PROGRAM STUDI </div>
                                <div class="col-6"><?php echo $data['programstudi']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KODE MATA PELAJARAN </div>
                                <div class="col-6"><?php echo $data['kode_mapel']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">MATA PELAJARAN </div>
                                <div class="col-6"><?php echo $data['nama_mapel']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN HARIAN 1 </div>
                                <div class="col-6"><?php echo $data['nilai_ulangan1']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN HARIAN 2 </div>
                                <div class="col-6"><?php echo $data['nilai_ulangan2']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI ULANGAN HARIAN 3 </div>
                                <div class="col-6"><?php echo $data['nila_ulangan3']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">RATA RATA NILAI ULANGAN </div>
                                <div class="col-6"><strong><?php echo $data['rata_rata_ulangan']; ?></strong></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI TUGAS HARIAN 1 </div>
                                <div class="col-6"><?php echo $data['nilai_tugas1']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI TUGAS HARIAN 2 </div>
                                <div class="col-6"><?php echo $data['nilai_tugas2']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI TUGAS HARIAN 3</div>
                                <div class="col-6"><?php echo $data['nilai_tugas3']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NILAI HARIAN </div>
                                <div class="col-6"><strong><?php echo $data['nilai_harian']; ?></strong></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">RATA RATA NILAI TUGAS </div>
                                <div class="col-6"><strong><?php echo $data['rata_rata_tugas']; ?></strong></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA GURU </div>
                                <div class="col-6"><?php echo $data['nama_guru']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NIP </div>
                                <div class="col-6"><?php echo $data['nip']; ?></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-end">
                                 <?php if ($_SESSION['login']['level'] == 1) {?>
                                <a href="index.php?Halaman=ubah_data_nilai_harian&id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i>Edit</a>
                                <a href="index.php?Halaman=hapus_data_nilai_harian&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>Hapus</a>
                            <?php } ?>
                                <a href="cetaknilaiharian.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm"> <i class="fa fa-print"></i> Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>