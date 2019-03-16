<form action="" method="post">
  <input type="date" name="tgl" value="">
  <button type="submit" name="button">klik</button>
  <?php
  $tgl = $_POST['tgl'];
  $now = date('d/m/Y');
  if('button'){
    echo $tgl-$now;
  }
  ?>
</form>
