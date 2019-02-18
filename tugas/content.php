<?php
  $content = $_REQUEST['content'];
  if($content == 'data_anggota'){
    include 'daftar.php';
  }elseif($content == 'daftar_anggota'){
    include 'pendaftaran.php';
  }elseif($content == 'detail'){
    include 'detail-anggota.php';
  }

 ?>
