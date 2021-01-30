<?php
include 'database.php';
?>
<div class="content-wrapper">
 <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Siswa</span>
                <span class="info-box-number">
                  <?php 

                    $query = mysqli_query($database,"SELECT * FROM data_siswa");
                    $data = mysqli_num_rows($query);
                    echo $data;
                  ?>
                  <small>Orang</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Guru</span>
                <span class="info-box-number">
                  <?php 

                    $query = mysqli_query($database,"SELECT * FROM data_guru_mapel");
                    $data = mysqli_num_rows($query);
                    echo $data;
                  ?>
                  <small>Orang</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mata Pelajaran</span>
                <span class="info-box-number">
                  <?php 

                    $query = mysqli_query($database,"SELECT * FROM data_mapel");
                    $data = mysqli_num_rows($query);
                    echo $data;
                  ?>

                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pengguna</span>
                <span class="info-box-number">
                  <?php 

                    $query = mysqli_query($database,"SELECT * FROM admin");
                    $data = mysqli_num_rows($query);
                    echo $data;
                  ?>
                  <small>Orang</small>
                </span>
              </div>
              
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
  </div>