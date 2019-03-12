<?php
  $content = $_REQUEST['content'];
  if($content == 'm_dokter'){
    include 'm-dokter.php';
  }elseif($content == 'add-dokter'){
    include 'add-dokter.php';
  }
 ?>
