<?php
include 'database.php';
$perpage = 5;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

$query = "SELECT * FROM data_mapel LIMIT $start,$perpage";
$result2 = mysqli_query($database, $query);

$result = mysqli_query($database, "SELECT * FROM data_mapel");
$total = mysqli_num_rows($result);
$pages = ceil($total / $perpage);
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">DATA MATA PELAJARAN</h3>
                        <?php if ($_SESSION['login']['level'] == 1) {?>
                        <h3 class="text-right"><a href="index.php?Halaman=tambah_data_mapel" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a></h3>
                    <?php } ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr>

                                        <th>KODE MATA PELAJARAN</th>
                                        <th>NAMA MATA PELAJARAN</th>
                                        <th>SEMESTER</th>
                                        <th>TAHUN PELAJARAN</th>
                                        <?php if ($_SESSION['login']['level'] == 1) {?>
                                        <th>Aksi</th>
                                    <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($result2)) {;
                                    ?>
                                        <tr>

                                            <td><?php echo $data['kode_mapel'] ?></td>
                                            <td><?php echo $data['nama_mapel'] ?></td>
                                            <td><?php echo $data['semester_mapel'] ?></td>
                                            <td><?php echo $data['tahun_pelajaran'] ?></td>
                                            <?php if ($_SESSION['login']['level'] == 1) {?>
                                            <td>
                                                <a href="index.php?Halaman=hapus_data_mapel&id=<?php echo $data['kode_mapel']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                            </td>
                                        <?php } ?>
                                        </tr>
                                    <?php
                                        $no++;
                                    }; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-end">
                            <div class="card-footer">
                                <nav>
                                    <ul class="pagination">
                                        <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                            <li class="page-item">
                                                <a class="page-link" href="index.php?Halaman=data_mata_pelajaran&page=<?= $i ?>"><?= $i ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>