<?php
include 'database.php';
?>
<style>
    th {
        text-align: center;
    }
</style>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Data Kelas</h2>
                        <?php if ($_SESSION['login']['level'] == 1) {?>
                        <h3 class="text-right"><a href="index.php?Halaman=tambah_data_kelas" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a></h3>
                    <?php } ?>
                        <hr>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>Id Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th>Semester</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Program Studi</th>
                                        <th width="5%"><i class="fa fa-cog"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($database, "SELECT * FROM data_kelas ORDER BY no_kelas ASC");
                                    while ($data = mysqli_fetch_assoc($query)) {;
                                    ?>
                                        <tr>
                                            <td><?php echo $data['no_kelas']; ?></td>
                                            <td><?php echo $data['nama_kelas']; ?></td>
                                            <td><?php echo $data['semester']; ?></td>
                                            <td><?php echo $data['tahun_pelajaran']; ?></td>
                                            <td><?php echo $data['program_studi']; ?></td>
                                            <td>
                                                <a href="index.php?Halaman=hapus_data_kelas&id=<?= $data['no_kelas']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
