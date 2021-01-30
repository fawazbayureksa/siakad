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
                            INPUT DATA MATA PELAJARAN
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">KODE MATA PELAJARAN</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="kodemapel" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">NAMA MATA PELAJARAN</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="nama_mapel" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">SEMESTER</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="semester" placeholder="" required>
                                        <option value="">Pilih SEMESTER</option>
                                        <option value="I (SATU)">I (SATU)</option>
                                        <option value="II (DUA)">II (DUA)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-sm-4 control-label">TAHUN AJARAN</label>
                                <div class="col-sm-4">
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

                            <div class="card-footer">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-primary" name="simpan">Simpan</button>
                                        <a href="index.php?Halaman=data_mata_pelajaran" class="btn btn-default btn-reset">Batal</a>
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
    $kode = $_POST['kodemapel'];
    $nama = $_POST['nama_mapel'];
    $semester = $_POST['semester'];
    $tahun = $_POST['tahun_pelajaran'];

    mysqli_query($database, "INSERT INTO data_mapel(kode_mapel,nama_mapel,semester_mapel,tahun_pelajaran)
                                VALUES ('$kode','$nama','$semester','$tahun')");

    echo "<script>alert('Tambah Data Berhasil');</script>";
    echo "<script>location='index.php?Halaman=data_mata_pelajaran';</script>";
}



?>