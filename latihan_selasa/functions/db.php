<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'latihan_cc';

  $link = mysqli_connect($host,$user,$pass,$db);

  if($link)
  {
    // echo "berhasil";
  }else {
    echo "gagal konek";
  }

 ?>
