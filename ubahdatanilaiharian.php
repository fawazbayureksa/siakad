<?php
include 'database.php';
$query = mysqli_query($database, "SELECT * FROM data_nilai_harian where id='$_GET[id]'");
while ($data = mysqli_fetch_assoc($query)) {;
?>
    <div class="content-wrapper">
        <section class="content">
            <div class="content-header">
                <h4>
                    <i class="far fa-edit"></i>
                    UBAH DATA NILAI HARIAN SISWA
                </h4>
            </div> <!-- /.page-header -->
        </section>
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-sm-2 control-label">No Absen</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" name="noabsen" value="<?php echo $data['no_absen'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="col-sm-2 control-label">NIS</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" name="nis" value="<?php echo $data['nis'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label class="col-sm-5 control-label">NAMA SISWA</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="col-sm-2 control-label">KELAS</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="kelas" placeholder="" required>
                                                <option value="<?= $data['kelas'] ?>"><?= $data['kelas'] ?></option>
                                                <?php
                                                $querykelas = mysqli_query($database, "SELECT * FROM data_kelas");
                                                while ($datakelas = mysqli_fetch_assoc($querykelas)) { ?>
                                                    <option value="<?= $datakelas['nama_kelas'] ?>"><?= $datakelas['nama_kelas'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">PROGRAM STUDI</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="prodi" value="<?php echo $data['programstudi'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">SEMESTER</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="semester" placeholder="" required>
                                                <option value="<?= $data['semester'] ?>"><?= $data['kelas'] ?></option>
                                                <option value="I (SATU)">I (SATU)</option>
                                                <option value="II (DUA)">II (DUA)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">TAHUN PELAJARAN</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="tahun_pelajaran" value="<?php echo $data['tahun_pelajaran'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label ">KODE MATA PELAJARAN</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" name="kode_mapel" value="<?php echo $data['kode_mapel'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">NAMA MATA PELAJARAN</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nama_mapel" value="<?php echo $data['nama_mapel'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label>NILAI ULANGAN HARIAN 1</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nilai_ulangan1" value="<?php echo $data['nilai_ulangan1'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>NILAI ULANGAN HARIAN 2</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nilai_ulangan2" value="<?php echo $data['nilai_ulangan2'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label>NILAI ULANGAN HARIAN 3</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nilai_ulangan3" value="<?php echo $data['nila_ulangan3'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label>NILAI TUGAS HARIAN 1</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nilai_tugas1" value="<?php echo $data['nilai_tugas1'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>NILAI TUGAS HARIAN 2</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nilai_tugas2" value="<?php echo $data['nilai_tugas2'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>NILAI TUGAS HARIAN 3</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nilai_tugas3" value="<?php echo $data['nilai_tugas3'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label>RATA RATA NILAI ULANGAN HARIAN </label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="ratarata_ulangan" value="<?php echo $data['rata_rata_ulangan'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>RATA RATA NILAI TUGAS</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="ratarata_tugas" value="<?php echo $data['rata_rata_tugas'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2 control-label">NILAI HARIAN</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nilai_harian" value="<?php echo $data['nilai_harian'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2 control-label">NAMA GURU</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nama_guru" value="<?php echo $data['nama_guru'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-2 control-label">NIP</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nip" value="<?php echo $data['nip'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-primary" name="ubah">Simpan</button>
                                        <a href="index.php?Halaman=data_nilai_harian" class="btn btn-default btn-reset">Batal</a>
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
    $programstudi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $tahunpelajaran = $_POST['tahun_pelajaran'];
    $kodemapel = $_POST['kode_mapel'];
    $namamapel = $_POST['nama_mapel'];


    $ulangan1 = $_POST['nilai_ulangan1'];
    $ulangan2 = $_POST['nilai_ulangan2'];
    $ulangan3 = $_POST['nilai_ulangan3'];

    $ratarataulangan = $ulangan1 + $ulangan2 + $ulangan3;
    $hasilrataulangan = $ratarataulangan / 3;

    $tugas1 = $_POST['nilai_tugas1'];
    $tugas2 = $_POST['nilai_tugas2'];
    $tugas3 = $_POST['nilai_tugas3'];
    $nilaiharian = $_POST['nilai_harian'];

    $rataratatugas = $tugas1 + $tugas2 + $tugas3;
    $hasilratatugas = $rataratatugas / 3;

    $namaguru = $_POST['nama_guru'];
    $nip = $_POST['nip'];

    mysqli_query($database, "UPDATE data_nilai_harian set no_absen='$noabsen',
                                                            nama_siswa='$namasiswa',
                                                            kelas='$kelas',
                                                            programstudi='$programstudi',
                                                            semester='$semester',
                                                            kode_mapel='$kodemapel',
                                                            nama_mapel='$namamapel',
                                                            nilai_ulangan1='$ulangan1',
                                                            nilai_ulangan2='$ulangan2',
                                                            nila_ulangan3='$ulangan3',
                                                            rata_rata_ulangan='$hasilrataulangan',
                                                            nilai_tugas1='$tugas1',
                                                            nilai_tugas2='$tugas2',
                                                            nilai_tugas3='$tugas3',
                                                            nilai_harian='$nilaiharian',
                                                            rata_rata_tugas='$hasilratatugas',
                                                            nama_guru='$namaguru',
                                                            nip='$nip'
                                                            where nis='$nis'");

    echo "<script>alert('Data berhasil diUbah');</script>";
    echo "<script>location='index.php?Halaman=data_nilai_harian';</script>";
}
?>