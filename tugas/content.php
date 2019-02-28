<?php
  $content = $_REQUEST['content'];
  if($content == 'data_anggota'){
    include 'daftar.php';
  }elseif($content == 'daftar_anggota'){
    include 'pendaftaran.php';
  }elseif($content == 'detail'){
    include 'detail-anggota.php';
  }elseif($content == 'data_user'){
    include 'users.php';
  }elseif($content == 'daftar_user'){
    include 'input_user.php';
  }

 ?>
