<?php include 'database.php'; ?>
<style type="text/css">
    .card-header {
        background-color: #117c6f;
        color: white;
        padding-bottom :10px; 
    }
    .card{
        padding-top: 20px;
    }
</style>
<div class="content-wrapper">
    <div class="container">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <?php
                    $no = 1;
                    $query = mysqli_query($database, "SELECT * FROM data_guru_mapel where nip='$_GET[id]'");
                    while ($data = mysqli_fetch_assoc($query)) {;
                    ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Guru Mata Pelajaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-start">
                                    <div class="col-6">NIP </div>
                                    <div class="col-4"><?php echo $data['nip']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">NAMA GURU </div>
                                    <div class="col-4"><?php echo $data['nama_guru']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">UMUR </div>
                                    <div class="col-4"><?php echo $data['umur']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">JENIS KELAMIN </div>
                                    <div class="col-4"><?php echo $data['jenis_kelamin']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">BIDANG ILMU </div>
                                    <div class="col-4"><?php echo $data['bidang_ilmu']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">GOLONGAN</div>
                                    <div class="col-4"><?php echo $data['golongan']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">STATUS PENGAJAR</div>
                                    <div class="col-4"><?php echo $data['statuspengajar']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">GURU KELAS</div>
                                    <div class="col-4"><?php echo $data['gurukelas']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">NO TELEPON</div>
                                    <div class="col-4"><?php echo $data['notelp']; ?></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-6">EMAIL</div>
                                    <div class="col-4"><?php echo $data['email']; ?></div>
                                </div>
                                <div class="card-footer">
                                    <div class="row justify-content-end">
                                        <?php if ($_SESSION['login']['level'] == 1) {?>
                                        <a href="index.php?Halaman=ubah_data_guru_mapel&id=<?php echo $data['nip']; ?>" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                                        <a href="index.php?Halaman=hapus_data_guru_mapel&id=<?php echo $data['nip']; ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                    <?php } ?>
                                        <a href="index.php?Halaman=data_guru_mata_pelajaran" class="btn btn-info"> Kembali </a>
                                    </div>
                                </div>
                            <?php
                            $no++;
                        }; ?>
                            </tbody>
                            </table>
                            </div>
                        </div>
        </section>
    </div>