<?php
  session_start();
  if(!isset($_SESSION['nama'])){
    header('location:index.php');
  }
  session_destroy();
  echo "<script>alert('Good Bye...! $_SESSION[nama]');document.location='index.php';</script>";
?>
