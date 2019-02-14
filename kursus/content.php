<?php
  $content = $_REQUEST['content'];
  if($content == 'data_user'){
    include 'users.php';
  }elseif($content == 'form_input'){
    include 'form_input.php';
  }elseif($content == 'form_edit'){
    include 'form_input.php';
  }

 ?>
