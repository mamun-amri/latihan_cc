<link rel="stylesheet" href="colorbox/colorbox.css">
<script src="colorbox/jquery.colorbox.js"></script>

<script >

	$(document).ready(function(){
		$(".iframe").colorbox({
			iframe:true,
			width:"80%",
			height:"80%"
		});
	});

	function klikdong(){
		$.colorbox({
			iframe:true,
			width:"80%",
			height:"80%",
			href:"detail-anggota.php"
		});
	};

</script>

<?php
  include 'config.php';

  if(isset($_REQUEST['hapus'])){
    $id     = $_REQUEST['hapus'];
		$query 	= mysqli_query($koneksi,"DELETE FROM hobi WHERE id='$id'");
    $query  = mysqli_query($koneksi,"DELETE FROM pendaftaran WHERE id='$id'");
  }
 ?>

<a href="page.php?content=daftar_anggota"  class="btn btn-success">Tambah</a>
<br><br>
<table class="table table-hover table-bordered">
  <tr class="info">
    <th>No</th>
    <th>Nama</th>
    <th>No.Wa/Hp</th>
    <th>Fakultas</th>
    <th>Peminatan</th>
    <th>Aksi</th>
  </tr>
  <tr>
    <?php
      $query =mysqli_query($koneksi,"SELECT * FROM pendaftaran");
      $i =0;
      while($row = mysqli_fetch_array($query)){
      $i++;
     ?>
    <td><?= $i ?></td>
    <td><?=$row['nama'] ?></td>
    <td><?=$row['hp'] ?></td>
    <td><?=$row['fakultas'] ?></td>
    <td><?=$row['peminatan'] ?></td>
    <td>
      <a href="detail-anggota.php?id=<?=$row['id']?>"  class="iframe"><i class=" btn btn-info fa fa-info"></i></a>
      <a href="page.php?content=daftar_anggota&edit=<?=$row['id']?>"><i class="btn btn-default fa fa-pencil"></i></a>
      <a href="page.php?content=data_anggota&hapus=<?=$row['id']?>" onclick="return confirm('hapus data <?=$row['nama']?>')"><i class="btn btn-danger fa fa-trash-o"></i></a>
    </td>
  </tr>
  <?php } ?>
</table>
