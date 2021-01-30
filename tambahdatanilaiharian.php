<?php
include 'database.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">INPUT DATA NILAI HARIAN</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">No Absen</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="noabsen" id="noabsen" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NIS</label>
                                    <div class="col-sm-6">
                                        <strong><input type="number" id="nis" class="form-control" name="nis" id="nis" onkeyup="datasiswa()" placeholder="NIS.." required></strong>
                                        <small style="color:red;"><i>*Masukkan Nis siswa terlebih dahulu</i></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NAMA SISWA</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="nama" name="nama_siswa" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">KELAS</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="kelas" name="kelas" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">SEMESTER</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="semester" name="semester" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">TAHUN PELAJARAN</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="tahun_pelajaran" id="tahun" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">PROGRAM STUDI</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="prodi" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">KODE MATA PELAJARAN</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="kode_mapel" onkeyup="datamapel()" id="kode_mapel" autocomplete="off" required>
                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <p><small style="color: red;"><i>*klik tombol untuk melihat daftar mata pelajaran</i></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NAMA MATA PELAJARAN</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NILAI ULANGAN HARIAN 1</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_ulangan1" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NILAI ULANGAN HARIAN 2</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_ulangan2" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NILAI ULANGAN HARIAN 3</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_ulangan3" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">RATA RATA NILAI ULANGAN </label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-2 offset col-md-3">NILAI TUGAS HARIAN 1</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_tugas1" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-2 offset col-md-3">NILAI TUGAS HARIAN 2</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_tugas2" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-2 offset col-md-3">NILAI TUGAS HARIAN 3</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_tugas3" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-2 offset col-md-3">NILAI HARIAN</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nilai_harian" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">RATA RATA NILAI TUGAS</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NAMA GURU</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="nama_guru" id="nama_guru" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NIP</label>
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
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-primary" name="save">Simpan</button>
                                    <a href="index.php?Halaman=data_nilai_harian" class="btn btn-default btn-reset">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- /.panel-body -->
            </div> <!-- /.panel -->
        </div> <!-- /.col -->
    </section>
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
                                <th>Kode Mapel</th>
                                <th>Nama Mapel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($database, "SELECT * FROM data_mapel");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?= $data['kode_mapel'] ?></td>
                                    <td><?= $data['nama_mapel'] ?></td>

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
                            $query = mysqli_query($database, "SELECT * FROM data_guru_mapel");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?= $data['nip'] ?></td>
                                    <td><?= $data['nama_guru'] ?></td>
                                    <td><?= $data['bidang_ilmu'] ?></td>

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
        function datasiswa() {
            var nis = $("#nis").val();
            $.ajax({
                url: 'function.php',
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

    <script type="text/javascript">
        function datamapel() {
            var kode_mapel = $("#kode_mapel").val();
            $.ajax({
                url: 'functionmapel.php',
                data: 'kode_mapel=' + kode_mapel,
            }).success(function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $("#nama_mapel").val(obj.nama_mapel);
            });
        }
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

    if (isset($_POST['save'])) {

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
        $hasilrataulangan = floor($ratarataulangan / 3);

        $tugas1 = $_POST['nilai_tugas1'];
        $tugas2 = $_POST['nilai_tugas2'];
        $tugas3 = $_POST['nilai_tugas3'];
        $nilaiharian = $_POST['nilai_harian'];

        $rataratatugas = $tugas1 + $tugas2 + $tugas3;
        $hasilratatugas = floor($rataratatugas / 3);

        $namaguru = $_POST['nama_guru'];
        $nip = $_POST['nip'];

        mysqli_query($database, "INSERT INTO data_nilai_harian (no_absen,nis,nama_siswa,kelas,programstudi,semester,tahun_pelajaran,kode_mapel,nama_mapel,nilai_ulangan1,nilai_ulangan2,nila_ulangan3,rata_rata_ulangan,nilai_tugas1,nilai_tugas2,nilai_tugas3,nilai_harian,rata_rata_tugas,nama_guru,nip)
     VALUES('$noabsen','$nis','$namasiswa','$kelas','$programstudi','$semester','$tahunpelajaran','$kodemapel','$namamapel','$ulangan1','$ulangan2','$ulangan3','$hasilrataulangan','$tugas1','$tugas2','$tugas3','$nilaiharian','$hasilratatugas','$namaguru','$nip')");

        echo "<script>alert('Tambah Data Berhasil');</script>";
        echo "<script>location='index.php?Halaman=data_nilai_harian';</script>";
    }
    ?>