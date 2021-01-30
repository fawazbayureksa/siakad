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
                        <h4 class="text-center">
                            <i class="fa fa-edit"></i>
                            INPUT DATA KELAS
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST">
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-2 control-label">No Kelas</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="no_kelas" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-2 control-label">Nama Kelas</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="nama_kelas" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-2 control-label">SEMESTER</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="semester" placeholder="" required>
                                            <option value="">Pilih SEMESTER</option>
                                            <option value="I (SATU)">I (SATU)</option>
                                            <option value="II (DUA)">II (DUA)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label class="col-sm-3 control-label">TAHUN AJARAN</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tahun_pelajaran" placeholder="" required>
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
                                    <label class="col-sm-3 control-label">Program Studi</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="prodi" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <button class="btn btn-primary" name="simpan">Simpan</button>
                                    <a href="index.php?Halaman=data_kelas" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<?php

if (isset($_POST['simpan'])) {
    $nokelas = $_POST['no_kelas'];
    $namakelas = $_POST['nama_kelas'];
    $semester = $_POST['semester'];
    $tahunpelajaran = $_POST['tahun_pelajaran'];
    $prodi = $_POST['prodi'];

    mysqli_query($database, "INSERT INTO data_kelas (no_kelas,nama_kelas,semester,tahun_pelajaran,program_studi)
                                VALUES ('$nokelas','$namakelas','$semester','$tahunpelajaran','$prodi')");

    echo "<script>alert('Tambah Data Berhasil');</script>";
    echo "<script>location='index.php?Halaman=data_kelas';</script>";
}

?>