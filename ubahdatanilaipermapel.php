<?php
include 'database.php';
?>
<!-- Aplikasi CRUD
 ************************************************
 -->
<div class="content-wrapper">
    <section class="content-header">
        <h4>
            <i class="far fa-edit"></i>
            INPUT DATA NILAI PER MATA PELAJARAN
        </h4>
    </section>
    <section class="content">
        <div class="row">
            <?php
            $id = $_GET['id'];
            $query = mysqli_query($database, "SELECT * FROM data_nilai_siswa_permapel WHERE id='$id'");
            while ($data = mysqli_fetch_assoc($query)) {;

            ?>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2 control-label">No Absen</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="noabsen" value="<?php echo $data['no_absen']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2 control-label">NIS</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nis" value="<?php echo $data['nis']; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2 control-label">NAMA SISWA</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2 control-label">KELAS</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="kelas" placeholder="" required>
                                                <option value="<?php echo $data['kelas']; ?>"><?php echo $data['kelas']; ?></option>
                                                <option value="X">X</option>
                                                <option value="XI">XI</option>
                                                <option value="XII">XII</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">SEMESTER </label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="semester" placeholder="" required>
                                                <option value="<?php echo $data['semester']; ?>"><?php echo $data['semester']; ?></option>
                                                <option value="I (SATU)">I (SATU)</option>
                                                <option value="II (DUA)">II (DUA)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">TAHUN AJARAN</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $data['tahun_ajaran'] ?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">KODE MATAPELJARAN</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="kode_mapel" value="<?php echo $data['kode_mapel'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">MATA PELAJARAN</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="nama_mapel" value="<?php echo $data['nama_mapel'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">NILAI HARIAN</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nilai_harian" value="<?php echo $data['nilaiharian']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">NILAI ULANGAN TENGAH SEMESTER</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nilai_uts" value="<?php echo $data['nilai_uts']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">NILAI ULANGAN AKHIR SEMESTER</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nilai_uas" value="<?php echo $data['nilai_uas']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">NILAI AKHIR RAPORT </label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nilaiakhir" value="<?php echo $data['nilaiakhir_permapel']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">STANDAR NILAI KRITERIA KELULUSAN</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="standarnilai" value="<?php echo $data['standar_nilai_kriteria']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2">NAMA GURU</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="nama_guru" value="<?php echo $data['nama_guru']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2">NIP</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nip" value="<?php echo $data['nip']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group">
                                    <div class="form-inline">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button class="btn btn-primary" name="ubah">Simpan</button>
                                            <a href="javascript:window.history.go(-1)" class="btn btn-default btn-reset">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- /.panel-body -->
                </div> <!-- /.panel -->
        </div> <!-- /.col -->
    </section>
</div>
<?php
            }
?>
<?php

if (isset($_POST['ubah'])) {
    $noabsen = $_POST['noabsen'];
    $nis = $_POST['nis'];
    $namasiswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $semester = $_POST['semester'];
    $tahun = $_POST['tahun_ajaran'];
    $kodemapel = $_POST['kode_mapel'];
    $mapel = $_POST['nama_mapel'];

    $nilaiharian = $_POST['nilai_harian'];
    $nilaiuts = $_POST['nilai_uts'];
    $nilaiuas = $_POST['nilai_uas'];
    $standarnilai = 75;
    $namaguru = $_POST['nama_guru'];
    $nip = $_POST['nip'];


    $nar = $nilaiharian + $nilaiuts + $nilaiuas;

    $fixnar = floor($nar / 3);
    mysqli_query($database, "UPDATE data_nilai_siswa_permapel set nis='$nis',
                                                                no_absen='$noabsen',
                                                                nama_siswa='$namasiswa',
                                                                kelas='$kelas',
                                                                semester='$semester',
                                                                tahun_ajaran='$tahun',
                                                                kode_mapel='$kodemapel',
                                                                nama_mapel='$mapel',
                                                                nilaiharian='$nilaiharian',
                                                                nilai_uts='$nilaiuts',
                                                                nilai_uas='$nilaiuas',
                                                                nilaiakhir_permapel='$fixnar',
                                                                standar_nilai_kriteria='$standarnilai',
                                                                nama_guru='$namaguru',
                                                                nip='$nip'
                                                                where id='$id'");
    if ($fixnar < $standarnilai) {
        echo "<script>alert('Tidak Lulus');</script>";
        echo "<script>location='index.php?Halaman=data_nilai_per_mata_pelajaran';</script>";
    } else {
        echo "<script>alert('Lulus');</script>";
        echo "<script>location='index.php?Halaman=data_nilai_per_mata_pelajaran';</script>";
    }
}

?>