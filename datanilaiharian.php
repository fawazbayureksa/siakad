<?php
include 'database.php';
$query = mysqli_query($database, "SELECT * FROM data_siswa ORDER BY nis ASC");
if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "";
}
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Data Nilai Harian</h3>
                        <div class="row justify-content-end">
                            <form method="POST">
                                <div class="form-inline">
                                    <input class="form-control" autofocus="" autocomplete="off" type="text" placeholder="Cari.." name="cari">
                                    <div class="col-sm3">
                                        <span class="btn btn-info">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php if (($_SESSION['login']['level'] == 1) || ($_SESSION['login']['level'] == 2)) {?>
                        <h3><a href="index.php?Halaman=tambah_data_nilai_harian" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a></h3>
                    <?php } ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Semester</th>
                                        <th><i class="fa fa-cog"></i></th>
                                    </tr>
                                <tbody>
                                    <?php
                                    /* Pagination */
                                    $perpage = 5;

                                    if (isset($cari)) {
                                        $result = mysqli_query($database, "SELECT * FROM data_siswa
                                        WHERE nis LIKE '%$cari%' OR nama_siswa LIKE '%$cari%'");
                                    } else {
                                        $result = mysqli_query($database, "SELECT * FROM data_siswa");
                                    }
                                    $total = mysqli_num_rows($result);
                                    $pages = ceil($total / $perpage);
                                    $page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
                                    $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;
                                    /*------------------------------------------------------------------------------------- */

                                    if (isset($cari)) {
                                        $query = mysqli_query($database, "SELECT * FROM data_siswa
                                        WHERE nis LIKE '%$cari%' OR nama_siswa LIKE '%$cari%' ORDER BY nis ASC LIMIT $start,$perpage");
                                    } else {
                                        $query = mysqli_query($database, "SELECT * FROM data_siswa ORDER BY nis ASC
                                         LIMIT $start,$perpage");
                                    }
                                    while ($data = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['nis']; ?></td>
                                            <td><?php echo $data['nama_siswa']; ?></td>
                                            <td><?php echo $data['kelas']; ?></td>
                                            <td><?php echo $data['semester']; ?></td>
                                            <td width="20px">
                                                <a href="index.php?Halaman=detail_data_nilai_harian&id=<?php echo $data['nis']; ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-end">
                            <div class="card-footer">
                                <nav>
                                    <ul class="pagination">
                                        <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                            <li class="page-item">
                                                <a class="page-link" href="index.php?Halaman=data_nilai_harian&page=<?= $i ?>"><?= $i ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>