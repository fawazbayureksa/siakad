 <?php
    include 'database.php';
    ?>
 <div class="content-wrapper">
     <div class="container">
         <div class="p-1 bg-info text-white text-center">
             <strong>
                 <h4>Data Nilai Siswa Per Mata Pelajaran</h4>
             </strong>
             <h4 class="text-right"><a href="index.php?Halaman=data_nilai_per_mata_pelajaran" class="btn btn-default">Kembali</a></h4>
         </div>
         <div class="row">
             <?php
                $no = 1;
                $query = mysqli_query($database, "SELECT * FROM data_nilai_siswa_permapel where nis='$_GET[id]'");
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                 <div class="col-sm-12">
                     <div class="card">
                         <div class="card-header">
                             <?php
                                if ($data['nilaiakhir_permapel'] > 75) {
                                    echo "<div class='alert alert-success'>Lulus</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Tidak Lulus</div>";
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
                                 <div class="col-4"><strong><?php echo $data['nilaiakhir_permapel']; ?></strong></div>
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
                             <div class="card-footer">
                                <div>
                                     <?php if ($_SESSION['login']['level'] == 1) {?>
                                 <a href="index.php?Halaman=ubah_data_nilai_permapel&id=<?php echo $data['id']; ?>" class="btn btn-warning"> <span class="fa fa-edit"></span>Ubah</a>
                                 <a href="index.php?Halaman=hapus_data_nilai_permapel&id=<?php echo $data['id']; ?>" class="btn btn-danger"> <span class="fa fa-trash"></span>Hapus</a>
                             <?php } ?>
                                </div>
                                 <div class="text-right"><a href="cetaknilaipermapel.php?id=<?php echo $data['id']; ?>" class="btn btn-success"> <i class="fa fa-print"></i> Cetak</a></div>
                             </div>   
                         </div>
                     </div>
                 <?php } ?>
                 </div>
         </div>