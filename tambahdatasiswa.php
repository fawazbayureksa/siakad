<?php
include 'database.php';
?>
<!-- Aplikasi CRUD
 ************************************************
 -->
<div class="content-wrapper">
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">INPUT DATA SISWA</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST">
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">No Absen</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="noabsen" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NIS</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nis" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">NAMA SISWA</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="nama_siswa" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                                        </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">KELAS</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="kelas" placeholder="" required>
                                            <option value="">--Pilih--</option>
                                            <?php
                                            $query = mysqli_query($database, "SELECT * FROM data_kelas ORDER BY nama_kelas");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <option value="<?= $data['nama_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">SEMESTER</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="semester" placeholder="" required>
                                            <option value="">--Pilih--</option>
                                            <option value="I (SATU)">I (SATU)</option>
                                            <option value="II (DUA)">II (DUA)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">TAHUN AJARAN</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="tahun_ajaran" placeholder="" required>
                                            <option value="">--Pilih--</option>
                                            <option value="2018/2019">2018/2019</option>
                                            <option value="2019/2020">2019/2020</option>
                                            <option value="2020/2021">2020/2021</option>
                                            <option value="2021/2022">2021/2022</option>
                                            <option value="2022/2023">2022/2023</option>
                                            <option value="2023/2024">2023/2024</option>
                                            <option value="2024/2025">2024/2025</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">TEMPAT LAHIR</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">TANGGAL LAHIR</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control float-right" data-date-format="yyyy-mm-dd" name="tgl_lahir" autocomplete="off" required>
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">No. Telepon</label>
                                    <input type="number" class="form-control" name="notelp_siswa" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <input type="email" class="form-control" name="email_siswa" autocomplete="off" required>
                                </div>
                            </div>

                            <hr />
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <button class="btn btn-primary" name="simpan">Simpan</button>
                                    <a href="index.php?Halaman=data_siswa" class="btn btn-default btn-reset">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- /.panel-body -->
            </div> <!-- /.panel -->
        </div> <!-- /.col -->


        <?php

        if (isset($_POST['simpan'])) {
            $absen = $_POST['noabsen'];
            $nis = $_POST['nis'];
            $namasiswa = $_POST['nama_siswa'];
            $jeniskelamin = $_POST['jenis_kelamin'];
            $kelas = $_POST['kelas'];
            $semester = $_POST['semester'];

            $tahunajaran = $_POST['tahun_ajaran'];

            $tempatlahir = $_POST['tempat_lahir'];

            $tanggal       = $_POST['tgl_lahir'];
            $tgl           = explode('-', $tanggal);
            $tgl_lahir = $tgl[0] . "-" . $tgl[1] . "-" . $tgl[2];

            $alamat = $_POST['alamat'];
            $notelp = $_POST['notelp_siswa'];
            $email = $_POST['email_siswa'];

            $query = mysqli_query($database, "INSERT INTO data_siswa (noabsen,nis,nama_siswa,jenis_kelamin_siswa,kelas,semester,tahun_ajaran,tempat_lahir,tgl_lahir,alamat,notelp_siswa,email_siswa)
                                VALUES ('$absen','$nis','$namasiswa','$jeniskelamin','$kelas','$semester','$tahunajaran','$tempatlahir','$tgl_lahir','$alamat','$notelp','$email')");

            echo "<script>alert('Tambah data siswa Berhasil');</script>";
            echo "<script>location='index.php?Halaman=data_siswa';</script>";
        }

        ?>