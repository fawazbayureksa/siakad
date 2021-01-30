<?php
session_start();
if (!isset($_SESSION['login'])) {
  echo "<script>alert('Anda Harus Login')</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}
include 'database.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <link rel="shortcut icon" href="dist/img/tutwuri.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
 <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <style>
    thead {
      background-color: #117c6f;
      color: white;
    }

    th {
      text-align: center;
    }

    td {
      text-align: center;
    }

    .upper {
      text-transform: uppercase;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?Halaman=home" class="nav-link">Home</a>
        </li>
      </ul>


        <ul class="navbar-nav ml-auto">
          <li class="dropdown user user-menu">
            <a href="" class="nav-link" data-toggle="dropdown">
              <img src="dist/img/avatar04.png" class="user-image">
              <span class="hidden-sm">Profil</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle">
                <p><?php echo $_SESSION['login']['username']?>
                <small><?php 
                        if ($_SESSION['login']['level']== 1) {
                          echo "Admin";
                        }
                        else if ($_SESSION['login']['level']== 2) {
                          echo "Guru";
                        }else if ($_SESSION['login']['level']== 3) {
                          echo "Siswa";
                        }
                ?></small>
              </p>
              </li>
              <li class="user-footer">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="index.php?Halaman=ubah_data_admin&id=<?php echo $_SESSION['login']['id_admin']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit Profil</a>
                  </div>
                   <div class="col-sm-6">
                    <a href="index.php?Halaman=Logout" class="btn btn-outline-danger btn-sm"><i class="fa fa-undo text-danger"></i>Keluar</a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
     
   
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php?Halaman=home" class="brand-link">
        <img src="dist/img/tutwuri.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIAKAD</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <h5 class="upper"><?php echo $_SESSION['admin']; ?></h5>
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <li class="nav-item">
                <a href="index.php?Halaman=dashboard" class="nav-link">
                  <i class="fas fa-tachometer-alt"></i>
                  <p>Dashboard </p>
                </a>
              </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                  Master Data
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
             
                <li class="nav-item">
                  <a href="index.php?Halaman=data_guru_mata_pelajaran" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Guru Mata Pelajaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?Halaman=data_siswa" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?Halaman=data_wali_kelas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Wali Kelas </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?Halaman=data_mata_pelajaran" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Mata Pelajaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?Halaman=data_kelas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kelas</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                  Data Nilai
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?Halaman=data_nilai_harian" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Nilai Harian</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?Halaman=data_nilai_per_mata_pelajaran" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Nilai Per Mata Pelajaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?Halaman=laporan_hasil_belajar" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Hasil Belajar</p>
                  </a>
                </li>
              </ul>
            <?php if ($_SESSION['login']['level']== 1) {?>
            <li class="nav-header">Setting</li>
                    <li class="nav-item">
                  <a href="index.php?Halaman=data_login" class="nav-link">
                    <i class="fas fa-cog nav-icon"></i>
                    <p>Data User</p>
                  </a>
                </li>
              <?php }?>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <script src="plugins/jquery/jquery.min.js"></script>



  </div>
  <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- ./wrapper -->
  <div id="page-wrapper">
    <div id="page-inner">
      <?php
      if (isset($_GET['Halaman'])) {
        if ($_GET['Halaman'] == "data_login") {
          include 'datalogin.php';
        }elseif ($_GET['Halaman'] == "dashboard") {
          include 'dashboard.php';
        } elseif ($_GET['Halaman'] == "data_guru_mata_pelajaran") {
          include 'datagurumapel.php';
        } elseif ($_GET['Halaman'] == "data_siswa") {
          include 'datasiswa.php';
        } elseif ($_GET['Halaman'] == "data_wali_kelas") {
          include 'datawalikelas.php';
        } elseif ($_GET['Halaman'] == "data_mata_pelajaran") {
          include 'datamapel.php';
        } elseif ($_GET['Halaman'] == "data_nilai_harian") {
          include 'datanilaiharian.php';
        } elseif ($_GET['Halaman'] == "data_nilai_per_mata_pelajaran") {
          include 'datanilaipermapel.php';
        } elseif ($_GET['Halaman'] == "laporan_hasil_belajar") {
          include 'laporanbelajar.php';
        } elseif ($_GET['Halaman'] == "tambah_laporan_hasil_belajar") {
          include 'tambahlaporanbelajar.php';
        } elseif ($_GET['Halaman'] == "detail_laporan") {
          include 'outputlaporan.php';
        } elseif ($_GET['Halaman'] == 'tambah_data_admin') {
          include 'tambahdataadmin.php';
        } elseif ($_GET['Halaman'] == 'ubah_data_admin') {
          include 'ubahdataadmin.php';
        } elseif ($_GET['Halaman'] == 'hapus_data_admin') {
          include 'hapususer.php';
        } elseif ($_GET['Halaman'] == "tambah_data_guru_mapel") {
          include 'tambahdatagurumapel.php';
        } elseif ($_GET['Halaman'] == "hapus_data_guru_mapel") {
          include 'hapusgurumapel.php';
        } elseif ($_GET['Halaman'] == "ubah_data_guru_mapel") {
          include 'ubahgurumapel.php';
        } elseif ($_GET['Halaman'] == "detail_data_guru_mapel") {
          include 'detailgurumapel.php';
        } elseif ($_GET['Halaman'] == "tambah_data_siswa") {
          include 'tambahdatasiswa.php';
        } elseif ($_GET['Halaman'] == "ubah_data_siswa") {
          include 'ubahdatasiswa.php';
        } elseif ($_GET['Halaman'] == "hapus_data_siswa") {
          include 'hapusdatasiswa.php';
        } elseif ($_GET['Halaman'] == "detail_data_siswa") {
          include 'detaildatasiswa.php';
        } elseif ($_GET['Halaman'] == "tambah_data_walikelas") {
          include 'tambahdatawalikelas.php';
        } elseif ($_GET['Halaman'] == "ubah_data_walikelas") {
          include 'ubahdatawalikelas.php';
        } elseif ($_GET['Halaman'] == "hapus_data_walikelas") {
          include 'hapusdatawalikelas.php';
        } elseif ($_GET['Halaman'] == "detail_walikelas") {
          include 'detailwalikelas.php';
        } elseif ($_GET['Halaman'] == "tambah_data_mapel") {
          include 'tambahdatamapel.php';
        } elseif ($_GET['Halaman'] == "hapus_data_mapel") {
          include 'hapusdatamapel.php';
        } elseif ($_GET['Halaman'] == "tambah_data_nilai_harian") {
          include 'tambahdatanilaiharian.php';
        } elseif ($_GET['Halaman'] == "ubah_data_nilai_harian") {
          include 'ubahdatanilaiharian.php';
        } elseif ($_GET['Halaman'] == "hapus_data_nilai_harian") {
          include 'hapusnilaiharian.php';
        } elseif ($_GET['Halaman'] == "detail_data_nilai_harian") {
          include 'detailnilaiharian.php';
        } elseif ($_GET['Halaman'] == "tambah_data_nilai_permapel") {
          include 'tambahdatanilaipermapel.php';
        } elseif ($_GET['Halaman'] == "ubah_data_nilai_permapel") {
          include 'ubahdatanilaipermapel.php';
        } elseif ($_GET['Halaman'] == "hapus_data_nilai_permapel") {
          include 'hapusdatanilaipermapel.php';
        } elseif ($_GET['Halaman'] == "detail_data_nilai_permapel") {
          include 'detailnilaipermapel.php';
        } elseif ($_GET['Halaman'] == "data_kelas") {
          include 'datakelas.php';
        } elseif ($_GET['Halaman'] == "tambah_data_kelas") {
          include 'tambahdatakelas.php';
        } elseif ($_GET['Halaman'] == "hapus_data_kelas") {
          include 'hapusdatakelas.php';
        } elseif ($_GET['Halaman'] == "Logout") {
          include 'logout.php';
        } else {
          include 'home.php';
        }
      }

      ?>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>

<!--   <script src="query-1.12.4.min.js"></script> -->
  <script>
    $(document).ready(function () {
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
   });

</script>

  <?php
  function penyebut($nilai)
  {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
      $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
      $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai < 100) {
      $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
      $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
      $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
    }
    return $temp;
  }

  function terbilang($nilai)
  {
    if ($nilai < 0) {
      $hasil = "minus " . trim(penyebut($nilai));
    } else {
      $hasil = trim(penyebut($nilai));
    }
    return $hasil;
  }

  ?>
</body>

</html>