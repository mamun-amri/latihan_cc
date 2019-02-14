<?php

  session_start();
  require_once 'config.php';
  if(!isset($_SESSION['nama'])){
    echo "<script>alert('silahkan login dulu');document.location='index.php';</script>";
  }
  echo "<h1>selamat datang $_SESSION[nama]</h1>";
  echo "<h4>level akses anda $_SESSION[level]</h4>";
 ?>
<a href="users.php">Data Users</a>
<a href="logout.php">Logout</a>
