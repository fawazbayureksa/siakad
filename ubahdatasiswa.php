<?php
include 'database.php';
$query = mysqli_query($database, "SELECT * FROM data_siswa WHERE nis='$_GET[id]'");
while ($data = mysqli_fetch_assoc($query)) {;
?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">
                                <i class="fa fa-edit"></i>
                                INPUT DATA SISWA
                            </h2>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">NIS</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nis" value="<?php echo $data['nis']; ?>" readonly required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">NAMA SISWA</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                        </label>

                                        <label class="radio-inline">
                                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">KELAS</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="kelas" placeholder="" required>
                                                <option value="<?php echo $data['kelas']; ?>"><?php echo $data['kelas']; ?></option>
                                                <?php
                                                $querykelas = mysqli_query($database, "SELECT * FROM data_kelas ORDER BY nama_kelas ASC");
                                                while ($datakelas = mysqli_fetch_assoc($querykelas)) { ?>
                                                    <option value="<?= $datakelas['nama_kelas'] ?>"><?= $datakelas['nama_kelas'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">SEMESTER</label>
                                        <select class="form-control" name="semester" placeholder="" required>
                                            <option value="<?php echo $data['semester']; ?>"><?php echo $data['semester']; ?></option>
                                            <option value="I (SATU)">I (SATU)</option>
                                            <option value="II (DUA)">II (DUA)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">TAHUN AJARAN</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="tahun_ajaran" placeholder="" required>
                                                <option value="<?= $data['tahun_ajaran'] ?>"><?= $data['tahun_ajaran'] ?></option>
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
                                            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">TANGGAL LAHIR</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control date-picker" data-date-format="yyyy-mm-dd" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required>
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">Alamat</label>
                                        <div class="col-sm-3">
                                            <textarea class="form-control" name="alamat" rows="3" required><?php echo $data['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">No. Telepon</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="notelp_siswa" value="<?php echo $data['notelp_siswa']; ?>" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-3 control-label">EMAIL</label>
                                        <input type="email" class="form-control" name="email_siswa" value="<?php echo $data['email_siswa']; ?>" required>
                                    </div>
                                </div>

                                <hr />
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-10">
                                        <button class="btn btn-primary" name="edit">Simpan</button>
                                        <a href="index.php?Halaman=detail_data_siswa&id=<?= $data['nis'] ?>" class="btn btn-default btn-reset">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- /.panel-body -->
                </div> <!-- /.panel -->
            </div> <!-- /.col -->
        <?php
    }
        ?>

        <?php
        if (isset($_POST['edit'])) {
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

            $query = mysqli_query($database, "UPDATE data_siswa SET  nama_siswa='$namasiswa',
                                                              jenis_kelamin_siswa='$jeniskelamin',
                                                              kelas='$kelas',
                                                              semester='$semester',
                                                              tahun_ajaran='$tahunajaran',
                                                              tempat_lahir='$tempatlahir',
                                                              tgl_lahir='$tgl_lahir',
                                                              alamat='$alamat',
                                                              notelp_siswa='$notelp',
                                                              email_siswa='$email'
                                                              WHERE nis='$nis'");

            echo "<script>alert('ubah data siswa Berhasil');</script>";
            echo "<script>location='index.php?Halaman=data_siswa';</script>";
        }

        ?>