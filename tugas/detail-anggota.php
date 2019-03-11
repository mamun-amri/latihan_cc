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
<table class="table table-hover">
  <tr>
    <td valign="middle center"><img src="dist/img/icon.png" width="100px" height="100px" alt="cc"></td>
    <td valign="middle center"><h1 class="text-center">Detail Anggota Computer Community</h1></td>
    <td valign="middle center"><img src="dist/img/cc.png" width="100px" height="100px"  alt="cc"></td>
  </tr>
<?php include 'config.php'; ?>
    <?php
      $id=$_REQUEST['id'];
      $query =mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id='$id'");
      while($row = mysqli_fetch_array($query)){
     ?>
    </table>
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
        <td>
          <?php
          $date = date_create($row['tgl']);
          echo date_format($date,'d / M / Y');
          ?>
       </td>
      </tr>
      <tr>
        <th>Hobi </th>
        <td>:</td>
        <?php
        $select     = mysqli_query($koneksi,"SELECT hobi.id, hobi.hobi, m_hobi.id,m_hobi.hobi
                     FROM m_hobi,hobi WHERE hobi.id='$id' AND hobi.hobi=m_hobi.id");?>
        <td >
        <?php
          while($r = mysqli_fetch_array($select)){ $data[] = $r['hobi']; }
          $imp     = implode(', ',$data);
          echo ucfirst($imp);
         ?>
        </td>
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
        <td> <textarea class="form-control" rows="8" cols="80" readonly> <?=$row['pesan'] ?> </textarea> </td>
      </tr>
    </table>
  <?php } ?>
