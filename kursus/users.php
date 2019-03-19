<?php
if(!isset($_SESSION['nama'])){
	header('location:index.php');
}
 ?>
		<p><a href="?content=form_input" class="btn btn-success">Tambah</a><br></p>
		<table class="table table-bordered table-hover">
		<tr>
		 <th class="info text-center"> No </th>
		 <th class="info text-center"> Nama </th>
		 <th class="info text-center"> Username </th>
		 <th class="info text-center"> Level </th>
		 <th class="info text-center"> Action </th>
		</tr>

	<?php
		include "config.php";

		if(isset($_REQUEST['delete'])){
			$id_user = $_REQUEST['id'];
			$query 	 =mysqli_query($koneksi,"DELETE FROM users WHERE id='$id_user' ");
			if ($query) {
				echo "<script>alert('data berhasil dihapus');document.location='page.php?content=data_user';</script>";
			} else { echo "<script>alert('data gagal dihapus');document.location='users.php';</script>"; }
		}

		$queri= "SELECT * FROM users";
		$hasil= mysqli_query($koneksi, $queri);
		$no = 1;
		while ($r = mysqli_fetch_array($hasil)) {
		 	echo"
		 	<tr>
		 		<td>$no</td>
		 		<td>$r[username]</td>
		 		<td>$r[nama]</td>
		 		<td>$r[level]</td>
		 		<td>
		 			<a href='?content=form_edit&id=$r[id]'> <i class='fa fa-pencil btn btn-info'></i> </a>
		 			<a href='page.php?content=data_user&delete=1&id=$r[id]' onclick=\"return confirm('apakah benar mau mengahpus')\"><i class='fa fa-trash btn btn-danger'></i></a>
		 		</td>
		 	</tr>
		 	";
		 	$no++;
		}
	?>
</table>