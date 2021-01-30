<?php

include 'database.php'
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">
                            <i class="fa fa-edit"></i>
                            INPUT DATA WALI KELAS
                        </h4>
                    </div> <!-- /.page-header -->
                    <div class="card-body">
                        <form class="form-horizontal" method="POST">
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NIP</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="nip" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">NAMA GURU WALI KELAS</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="nama_guru_walikelas" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">STATUS</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="status" required>
                                            <option value="">Pilih</option>
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
                                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                        </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">KELAS YANG DIWAKILKAN</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="kelas" placeholder="" required>
                                            <option value="">Pilih kelas</option>
                                            <?php
                                            $query = mysqli_query($database, "SELECT * FROM data_kelas ORDER BY nama_kelas ASC");
                                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                                <option value="<?= $data['nama_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">PROGRAM STUDI</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="prodi" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">No. Telepon</label>
                                    <div class="col-sm-2">
                                        <input type="tel" class="form-control" name="notelp" autocomplete="off" maxlength="12" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-4 control-label">EMAIL</label>
                                    <div class="col-sm-2">
                                        <input type="email" class="form-control" name="email" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="form-group">
                                <div class="col-sm-offset-2">
                                    <button class="btn btn-primary" name="simpan">Simpan</button>
                                    <a href="index.php?Halaman=data_wali_kelas" class="btn btn-default btn-reset">Batal</a>
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
        if (isset($_POST['simpan'])) {
            $nip = $_POST['nip'];
            $nama = $_POST['nama_guru_walikelas'];
            $status = $_POST['status'];
            $jeniskelamin = $_POST['jenis_kelamin'];
            $kelas = $_POST['kelas'];
            $email = $_POST['email'];
            $notelp = $_POST['notelp'];
            $prodi = $_POST['prodi'];

            mysqli_query($database, "INSERT INTO data_walikelas (nip,nama_guru_walikelas,statuspengajar,jenis_kelamin_guru,kelas_yang_diwakilkan,programstudi,notelp_walikelas,email_walikelas) 
                            VALUES ('$nip','$nama','$status','$jeniskelamin','$kelas','$prodi','$notelp','$email')");

            echo "<script>alert('Tambah data wali kelas Berhasil');</script>";

            echo "<script>location='index.php?Halaman=data_wali_kelas';</script>";
        }
        ?>