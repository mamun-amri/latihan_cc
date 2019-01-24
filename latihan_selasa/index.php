<?php

  require_once 'core/init.php';

    $result = tampil();
    while($row = mysqli_fetch_assoc($result))
    {
      $id = $row['id'];
      $username = $row['username'];
      $nama = $row['nama'];
      $level = $row['level'];
    }
  require_once 'view/header.php';

 ?>
    <div class="">
      <?=$id;?><br>
      <?=$username;?><br>
      <?=$nama;?><br>
      <?=$level;?><br>
      <a href="edit.php?id=<?=$id;?>"> edit</a>
    </div>
