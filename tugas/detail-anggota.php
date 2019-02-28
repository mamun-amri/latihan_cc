<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<style media="screen">
  *{
    font-family :sans-serif;
  }
</style>
<?php include 'config.php'; ?>
    <?php
      $id=$_REQUEST['id'];
      $query =mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id='$id'");
      while($row = mysqli_fetch_array($query)){
     ?>
    <h1 class="text-center">Detail Anggota Computer Community</h1>
    <table class="table table-hover">
      <tr>
        <th width="200px">Id Pendaftar </th>
        <td>:</td>
        <td><?=ucfirst($row['id']) ?></td>
      </tr>
      <tr>
        <th>Nama </th>
        <td>:</td>
        <td><?=ucfirst($row['nama']) ?></td>
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
        <?php
        $query     = mysqli_query($koneksi,"SELECT * FROM hobi WHERE id='$id'");
        while ($r  = mysqli_fetch_array($query)){ ?>
        <td ><?= ucfirst($r['hobi']) ?></td>
        <?php } ?>
      </tr>
      <tr>
        <th>Fakultas </th>
        <td>:</td>
        <td><?=ucfirst($row['fakultas']) ?></td>
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
      <!-- <tr>
        <td>
          <a href="page.php?content=data_anggota" class="btn btn-danger">kembali</a>
        </td>
      </tr> -->
    </table>
  <?php } ?>
