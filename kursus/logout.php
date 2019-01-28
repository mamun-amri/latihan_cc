<?php
  session_start();
  session_destroy();
  echo "<script>alert('Good Bye...! <b>$_SESSION[nama]</b>');document.location='index.php';</script>";
 ?>
