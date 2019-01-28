<!DOCTYPE html>
<html>
<head>
	<title>Data Users</title>
</head>
	<body>
		<a href="form_input.php">Tambah</a>
		<table border="1" width="50%">
		<tr>
		 <th> No </th>
		 <th> Nama </th>
		 <th> username </th>
		 <th> Level </th>
		 <th colspan='2'> Action </th>
		</tr>

	<?php
		include "config.php";

		if(isset($_REQUEST['delete'])){
			$id_user = $_REQUEST['id'];
			$query =mysqli_query($koneksi,"delete from users where id='$id_user' ");
			if ($query) {
				echo "<script>alert('data berhasil dihapus');document.location='users.php';</script>";
			} else { echo "<script>alert('data gagal dihapus');document.location='users.php';</script>"; }
		}

		$queri= "Select * From users";
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
		 			<a href='form_input.php?id=$r[id]'>Edit</a> ||
		 			<a href='users.php?delete=1&id=$r[id]' onclick=\"return confirm('apakah benar mau mengahpus')\">Delete</a>
		 		</td>
		 	</tr>
		 	";

		 	$no++;
		 }
	?>
</body>
</html>
