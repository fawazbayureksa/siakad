<?php

session_start();
if (empty($_SESSION['login'])) {
  echo "<script>alert('Anda Harus Login')</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}

?>