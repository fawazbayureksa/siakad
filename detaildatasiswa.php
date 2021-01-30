<?php include 'database.php'; ?>
<style>
    .card-header {
        background-color: #117c6f;
        color: white;
    }
</style>
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <?php
                $query = mysqli_query($database, "SELECT * FROM data_siswa where nis='$_GET[id]'");
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">
                                Data Siswa
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col-6">NIS </div>
                                <div class="col-4"><?php echo $data['nis']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA SISWA </div>
                                <div class="col-4"><?php echo $data['nama_siswa']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">JENIS KELAMIN </div>
                                <div class="col-4"><?php echo $data['jenis_kelamin_siswa']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KELAS </div>
                                <div class="col-4"><?php echo $data['kelas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">SEMESTER </div>
                                <div class="col-4"><?php echo $data['semester']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">TAHUN AJARAN</div>
                                <div class="col-4"><?php echo $data['tahun_ajaran']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">TEMPAT LAHIR </div>
                                <div class="col-4"><?php echo $data['tempat_lahir']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">TANGGAL LAHIR </div>
                                <div class="col-4"><?php echo $data['tgl_lahir']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">ALAMAT </div>
                                <div class="col-4"><?php echo $data['alamat']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NO TELEPON </div>
                                <div class="col-4"><?php echo $data['notelp_siswa']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">EMAIL </div>
                                <div class="col-4"><?php echo $data['email_siswa']; ?></div>
                            </div>
                            <div class="card-footer">
                                <?php if ($_SESSION['login']['level'] == 1) {?>
                                <a href="index.php?Halaman=ubah_data_siswa&id=<?php echo $data['nis']; ?>" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                                <a href="index.php?Halaman=hapus_data_siswa&id=<?php echo $data['nis']; ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                             <?php } ?>
                                <a href="index.php?Halaman=data_siswa" class="btn btn-default"> Kembali </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>