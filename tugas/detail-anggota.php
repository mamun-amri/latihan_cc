<?php include 'config.php'; ?>
<style media="screen">
  th{
    text-align: left;
  }
</style>
    <?php
      $id=$_REQUEST['id'];
      $query =mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id='$id'");
      while($row = mysqli_fetch_array($query)){
     ?>
    <table class="table">
      <tr>
        <th>Nama </th>
        <td>:</td>
        <td><?=$row['nama'] ?></td>
      </tr>
      <tr>
        <th>No.Wa/Hp </th>
        <td>:</td>
        <td><?=$row['hp'] ?></td>
      </tr>
      <tr>
        <th>Jenis Kelamin </th>
        <td>:</td>
        <td><?=$row['jk'] ?></td>
      </tr>
      <tr>
        <th>Alumni </th>
        <td>:</td>
        <td><?=$row['tgl'] ?></td>
      </tr>
      <tr>
        <th>Hobi </th>
        <td>:</td>
        <td><?=$row['hobi'] ?></td>
      </tr>
      <tr>
        <th>Fakultas </th>
        <td>:</td>
        <td><?=$row['fakultas'] ?></td>
      </tr>
      <tr>
        <th>Peminatan </th>
        <td>:</td>
        <td><?=$row['peminatan'] ?></td>
      </tr>
      <tr>
        <th>Pesan </th>
        <td>:</td>
        <td><?=$row['pesan'] ?></td>
      </tr>
      <tr>
        <td>
          <a href="page.php?content=data_anggota" class="btn btn-danger">kembali</a>
        </td>
      </tr>
    </table>
  <?php } ?>
