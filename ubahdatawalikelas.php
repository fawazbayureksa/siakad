<?php
include 'database.php';
$query = mysqli_query($database, "SELECT*FROM data_walikelas WHERE nip='$_GET[id]'");
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
                                INPUT DATA WALI KELAS
                            </h2>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">NIP</label>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" name="nip" value="<?php echo $data['nip'] ?>" readonly required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">NAMA GURU WALI KELAS</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="nama_guru_walikelas" value="<?php echo $data['nama_guru_walikelas'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">STATUS</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="status" required>
                                                <option value="<?php echo $data['statuspengajar'] ?>"><?php echo $data['statuspengajar'] ?></option>
                                                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                <option value="Honorer">Honorer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">Jenis Kelamin</label>
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
                                        <label class="col-sm-4 control-label">KELAS YANG DIWAKILKAN</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="kelas" placeholder="" required>
                                                <option value="<?php echo $data['kelas_yang_diwakilkan'] ?>"><?php echo $data['kelas_yang_diwakilkan'] ?></option>
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
                                        <label class="col-sm-4 control-label">PROGRAM STUDI</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="prodi" value="<?php echo $data['programstudi'] ?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">No. Telepon</label>
                                        <div class="col-sm-2">
                                            <input type="tel" class="form-control" name="notelp_siswa" value="<?php echo $data['notelp_walikelas'] ?>" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-inline">
                                        <label class="col-sm-4 control-label">EMAIL</label>
                                        <div class="col-sm-2">
                                            <input type="email" class="form-control" name="email_siswa" value="<?php echo $data['email_walikelas'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-primary" name="ubah">Edit</button>
                                        <a href="index.php?Halaman=data_wali_kelas" class="btn btn-default btn-reset">Batal</a>
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
        if (isset($_POST['ubah'])) {
            $nip = $_POST['nip'];
            $nama = $_POST['nama_guru_walikelas'];
            $status = $_POST['status'];
            $jeniskelamin = $_POST['jenis_kelamin'];
            $kelas = $_POST['kelas'];
            $prodi = $_POST['prodi'];
            $email = $_POST['email_siswa'];
            $notelp = $_POST['notelp_siswa'];

            mysqli_query($database, "UPDATE data_walikelas SET nama_guru_walikelas='$nama',
                                                       statuspengajar='$status',
                                                       jenis_kelamin_guru='$jeniskelamin',
                                                       kelas_yang_diwakilkan='$kelas',
                                                       programstudi='$prodi',
                                                       notelp_walikelas='$notelp',
                                                       email_walikelas='$email'
                                                       where nip='$nip'");

            echo "<script>alert('ubah data wali kelas Berhasil');</script>";
            echo "<script>location='index.php?Halaman=data_wali_kelas';</script>";
        }

        ?>