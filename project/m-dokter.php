<?php
  include 'config/config.php';
 ?>

<a href="page.php?content=add-dokter">Tambah</a>
<table class="table table-hover">
  <tr class="success text-center">
    <th>No</th>
    <th>Id</th>
    <th>Nama Dokter</th>
    <th>Aksi</th>
  </tr>
  <?php
  $i=1;
    $query      = mysqli_query($link,"SELECT * FROM m_dokter ");
    while( $row = mysqli_fetch_array($query)){
      $id       = $row['id'];
      $name     = $row['name'];
   ?>
  <tr>
    <td><?= $i++ ?></td>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td>
      <a href="#">detail</a>
      <a href="#">hapus</a>
    </td>
  </tr>
  <?php } ?>
</table>
