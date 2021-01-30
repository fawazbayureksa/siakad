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
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Input Data Nilai Per Mata Pelajaran </h4>
                        <p class="text-center"><small style="color: yellow;"><i>*Pastikan Sudah Mengisi Nilai Harian Terlebih Dahulu</i></small></p>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">No Absen</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" name="noabsen" id="noabsen" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NIS</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="nis" id="nis" onkeyup="datasiswaharian()" autocomplete="off" required>
                                        <p><small style="color: red;"><i>*Masukkan Nis Terlebih Dahulu</i></small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NAMA SISWA</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="nama_siswa" id="nama" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">KELAS</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="kelas" id="kelas" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">SEMESTER</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="semester" id="semester" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">TAHUN AJARAN</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="tahun_ajaran" id="tahun" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">KODE MATAPELJARAN</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="kode_mapel" id="kode_mapel" onkeyup="datamapelharian()" autocomplete="off" required>
                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <p><small style="color: red;"><i>*klik tombol untuk melihat daftar mata pelajaran Dan Nilai Harian Siswa</i></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">MATA PELAJARAN</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NILAI HARIAN</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_harian" id="nilaiharian" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NILAI ULANGAN TENGAH SEMESTER</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_uts" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NILAI ULANGAN AKHIR SEMESTER</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_uas" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NILAI AKHIR RAPORT </label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilaiakhir" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">STANDAR NILAI KRITERIA KELULUSAN</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="standarnilai"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NAMA GURU</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="nama_guru" id="nama_guru" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NIP</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="nip" id="nip" onkeyup="dataguru()" autocomplete="off" required>
                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-default2">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <p><small style="color: red;"><i>*klik tombol untuk melihat daftar Guru</i></small></p>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="card-footer">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-primary" name="simpan">Simpan</button>
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
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">DAFTAR MATA PELAJARAN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nis</th>
                            <th>Nama Siswa</th>
                            <th>Kode Mapel</th>
                            <th>Nama Mapel</th>
                            <th>Nilai Harian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $querymapel = mysqli_query($database, "SELECT * FROM data_nilai_harian ORDER BY nama_mapel ASC");
                        while ($datamapel = mysqli_fetch_assoc($querymapel)) {
                        ?>
                            <tr>
                                <td><?= $datamapel['nis']; ?></td>
                                <td><?= $datamapel['nama_siswa']; ?></td>
                                <td><?= $datamapel['kode_mapel'] ?></td>
                                <td><?= $datamapel['nama_mapel'] ?></td>
                                <td><?= $datamapel['nilai_harian'] ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-default2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">DAFTAR GURU</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Bidang Ilmu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $queryguru = mysqli_query($database, "SELECT * FROM data_guru_mapel");
                        while ($dataguru = mysqli_fetch_assoc($queryguru)) {
                        ?>
                            <tr>
                                <td><?= $dataguru['nip'] ?></td>
                                <td><?= $dataguru['nama_guru'] ?></td>
                                <td><?= $dataguru['bidang_ilmu'] ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script src="query-1.12.4.min.js"></script>


<script type="text/javascript">
    function datasiswaharian() {
        var nis = $("#nis").val();
        $.ajax({
            url: 'functionsiswa.php',
            data: 'nis=' + nis,
        }).success(function(data) {
            var json = data,
                obj = JSON.parse(json);
            $("#noabsen").val(obj.noabsen);
            $("#nama").val(obj.nama);
            $("#kelas").val(obj.kelas);
            $("#semester").val(obj.semester);
            $("#tahun").val(obj.tahun);
        });
    }
</script>
</script>
<script type="text/javascript">
    function dataguru() {
        var nip = $("#nip").val();
        $.ajax({
            url: 'functionguru.php',
            data: 'nip=' + nip,
        }).success(function(data) {
            var json = data,
                obj = JSON.parse(json);
            $("#nama_guru").val(obj.nama_guru);
        });
    }
</script>
<?php

if (isset($_POST['simpan'])) {
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
    $standarnilai =$_POST['standarnilai'];
    $namaguru = $_POST['nama_guru'];
    $nip = $_POST['nip'];



    $nar = $nilaiharian + $nilaiuts + $nilaiuas;

    $fixnar = floor($nar / 3);



    mysqli_query($database, "INSERT INTO data_nilai_siswa_permapel (no_absen,nis,nama_siswa,kelas,semester,tahun_ajaran,kode_mapel,nama_mapel,nilaiharian,nilai_uts,nilai_uas,nilaiakhir_permapel,standar_nilai_kriteria,nama_guru,nip)
                                                        values ('$noabsen','$nis','$namasiswa','$kelas','$semester','$tahun','$kodemapel','$mapel','$nilaiharian','$nilaiuts','$nilaiuas','$fixnar','$standarnilai','$namaguru','$nip')");

    if ($fixnar < $standarnilai) {
        echo "<script>alert('Tidak Lulus');</script>";
        echo "<script>location='index.php?Halaman=data_nilai_per_mata_pelajaran';</script>";
    } else {
        echo "<script>alert('Lulus');</script>";
        echo "<script>location='index.php?Halaman=data_nilai_per_mata_pelajaran';</script>";
    }
}
?>