<?php
session_start();
include 'database.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo"
            <a><b>Admin</b>Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">MASUK</p>
                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="user" placeholder="username / NIS / NIP" autocomplete="off" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <div class="col-sm-4">
                            <a href="registrasi.php" class="btn btn-primary btn-block">Daftar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['login'])) {
        $query = mysqli_query($database, "SELECT * FROM admin WHERE username='$_POST[user]' and password='$_POST[pass]'");
        $cek = mysqli_num_rows($query);
        if ($cek == 1) {
            
            $_SESSION['login'] = mysqli_fetch_assoc($query);
           
           if ($_SESSION['login']['level'] == 1) {
              $_SESSION['admin'] = $_POST['user'];
              $_SESSION['level'] = "1";
               echo "<script>alert('Login Berhasil');</script>";
            header('location: index.php?Halaman=home');
           }
           else if ($_SESSION['login']['level'] == 2) {
              $_SESSION['admin'] = $_POST['user'];
              $_SESSION['level'] = "2";
               echo "<script>alert('Login Berhasil');</script>";
            header('location: index.php?Halaman=home');
           }
           else if($_SESSION['login']['level'] == 3) {
              $_SESSION['admin'] = $_POST['user'];
              $_SESSION['level'] = "3";
               echo "<script>alert('Login Berhasil');</script>";
            header('location: index.php?Halaman=home');
           }
           
        } else {
            echo  "<script>alert('Login Gagal , Masukkan Data Yang Benar!!!');</script>";
            echo "<meta http.equiv='refresh' content='1;url=login.php'>";
        }
    }
    ?>
</body>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</html>