<?php include 'database.php'; ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                       <div class="card-title">Data Guru Mata Pelajaran</div>
                       <?php if ($_SESSION['login']['level'] == 1) {?>
                           <h3 class="text-right"><a href="index.php?Halaman=tambah_data_guru_mapel" class="btn btn-primary"><span class="fa fa-plus">Tambah</a></h3>
                       <?php } ?>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="example2">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>NAMA GURU</th>
                                    <th>BIDANG ILMU</th>
                                    <th>STATUS PENGAJAR</th>
                                    <th>GURU KELAS</th>
                                    <th><i class="fa fa-fire"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $no = 1;
                                $query = mysqli_query($database, "SELECT * FROM data_guru_mapel");
                                while ($data = mysqli_fetch_assoc($query)) {;
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nip'] ?></td>
                                    <td><?php echo $data['nama_guru'] ?></td>
                                    <td><?php echo $data['bidang_ilmu'] ?></td>
                                    <td><?php echo $data['statuspengajar'] ?></td>
                                    <td><?php echo $data['gurukelas'] ?></td>
                                    <td>
                                        <a href="index.php?Halaman=detail_data_guru_mapel&id=<?php echo $data['nip'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <?php
                                $no++;  }; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>