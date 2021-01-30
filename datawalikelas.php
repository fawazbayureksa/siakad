<?php
include 'database.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center"> Data Wali Kelas </h3>
                        <?php if ($_SESSION['login']['level'] == 1) {?>
                        <h3 class="text-right"><a href="index.php?Halaman=tambah_data_walikelas" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a></h3>
                    <?php } ?>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" id="example2">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>NAMA GURU</th>
                                    <th>JENIS KELAMIN </th>
                                    <th>KELAS</th>
                                    <th><i class="fa fa-cog"></i></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($database, "SELECT * FROM data_walikelas ORDER BY nip ASC");
                                while ($data = mysqli_fetch_assoc($query)) {;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['nip'] ?></td>
                                        <td><?php echo $data['nama_guru_walikelas'] ?></td>
                                        <td><?php echo $data['jenis_kelamin_guru'] ?></td>
                                        <td><?php echo $data['kelas_yang_diwakilkan'] ?></td>
                                        <td>
                                          <a href="index.php?Halaman=detail_walikelas&id=<?= $data['nip']?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>