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
            <div class="col-sm-12">
                <?php
                $no = 1;
                $query = mysqli_query($database, "SELECT * FROM data_walikelas where nip ='$_GET[id]'");
                while ($data = mysqli_fetch_assoc($query)) {;
                ?>
                    <div class="card">
                        <div class="card-header">
                            <h4> Data Wali Kelas </h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col-6">NIP </div>
                                <div class="col-4"><?php echo $data['nip']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">NAMA GURU </div>
                                <div class="col-4"><?php echo $data['nama_guru_walikelas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">STATUS PENGAJAR </div>
                                <div class="col-4"><?php echo $data['statuspengajar']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">JENIS KELAMIN </div>
                                <div class="col-4"><?php echo $data['jenis_kelamin_guru']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">KELAS </div>
                                <div class="col-4"><?php echo $data['kelas_yang_diwakilkan']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">PROGRAM STUDI </div>
                                <div class="col-4"><?php echo $data['programstudi']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">No Telepon </div>
                                <div class="col-4"><?php echo $data['notelp_walikelas']; ?></div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6">EMAIL </div>
                                <div class="col-4"><?php echo $data['email_walikelas']; ?></div>
                            </div>
                            <div class="card-footer">
                                 <?php if ($_SESSION['login']['level'] == 1) {?>
                                <a href="index.php?Halaman=ubah_data_walikelas&id=<?php echo $data['nip']; ?>" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                                <a href="index.php?Halaman=hapus_data_walikelas&id=<?php echo $data['nip']; ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                            <?php } ?>
                                <a href="index.php?Halaman=data_wali_kelas" class="btn btn-default">Kembali</a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</div>