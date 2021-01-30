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
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Tambah Data Guru Mata Pelajaran</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="number" class="form-control" name="nip" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>NAMA GURU </label>
                                <input type="text" class="form-control" name="nama_guru" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>UMUR</label>
                                <input type="number" class="form-control" name="umur" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki" />Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bidang Ilmu</label>
                                <input type="text" class="form-control" name="bidang_ilmu" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Golongan </label>
                                <select class="form-control" name="golongan">
                                    <option value="">--Pilih--</option>
                                    <option value="GOLONGAN I">GOLONGAN I</option>
                                    <option value="GOLONGAN II">GOLONGAN II</option>
                                    <option value="GOLONGAN III">GOLONGAN III</option>
                                    <option value="GOLONGAN IV">GOLONGAN IV</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status Pengajar</label>
                                <select class="form-control" name="status" required>
                                    <option value="">--Pilih--</option>
                                    <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                    <option value="Honorer">Honorer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>GURU KELAS</label>
                                <select class="form-control" name="kelas" placeholder="" required>
                                    <option value="">--Pilih--</option>
                                    <?php
                                    $query = mysqli_query($database, "SELECT * FROM data_kelas ORDER BY nama_kelas ASC");
                                    while ($data = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <option value="<?= $data['nama_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Telepon </label>
                                <input type="Number" class="form-control" name="notelp" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" autocomplete="off" required>
                            </div>
                            <button class="btn btn-primary" name="save">Simpan</button>
                            <a href="index.php?Halaman=data_guru_mata_pelajaran" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>


                <?php

                if (isset($_POST['save'])) {
                    $nip = $_POST['nip'];
                    $namaguru = $_POST['nama_guru'];
                    $umur = $_POST['umur'];
                    $jeniskelamin = $_POST['jenis_kelamin'];
                    $bidangilmu = $_POST['bidang_ilmu'];
                    $golongan = $_POST['golongan'];
                    $status = $_POST['status'];
                    $kelas = $_POST['kelas'];
                    $notelp = $_POST['notelp'];
                    $email = $_POST['email'];


                    $query = mysqli_query($database, "INSERT INTO data_guru_mapel (nip,nama_guru,umur,jenis_kelamin,bidang_ilmu,golongan,statuspengajar,gurukelas,notelp,email)
                                VALUES ('$nip','$namaguru','$umur','$jeniskelamin','$bidangilmu','$golongan','$status','$kelas','$notelp','$email')");

                    echo "<script>alert('Tambah data guru Berhasil');</script>";
                    echo "<script>location='index.php?Halaman=data_guru_mata_pelajaran';</script>";
                }

                ?>
            </div>
        </div>
    </section>
</div>