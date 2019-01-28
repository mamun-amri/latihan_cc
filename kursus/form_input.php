<?php
	include"config.php";

	if(isset($_REQUEST['id'])){
		$id_user = $_REQUEST['id'];

		$query = "Select * from users where id='$id_user'";
		$hasil = mysqli_query($koneksi, $query);

		$r = mysqli_fetch_array($hasil);

		$id_user = $r['id'];
		$username = $r['username'];
		$nama = $r['nama'];
		$button = "edit";
		}else{
		$id_user = "";
		$username = "";
		$nama = "";
		$button = "simpan";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<form method="post" action="simpan_user.php">
		<input type="hidden" name="id" value="<?=$id_user?>">
		 <table width="50%" border="1">
		 	<tr>
		 		<td>Nama</td>
		 		<td>:</td>
		 		<td><input type="text" name="nama" value="<?=$nama?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Username</td>
		 		<td>:</td>
		 		<td><input type="text" name="username" value="<?=$username?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Password</td>
		 		<td>:</td>
		 		<td><input type="password" name="password"></td>
		 	</tr>
		 	<tr>
		 		<td>Level</td>
		 		<td>:</td>
		 		<td>
		 			<select name="level">
		 				<option>-pilih level-</option>
		 				<option value="1">1</option>
		 				<option value="2">2</option>
		 				<option value="3">3</option>
		 			</select>
		 		</td>
		 	</tr>
		 	<tr>
		 		<td></td>
		 		<td></td>
		 		<td>
		 			<input type="submit" name="simpan" value="<?=$button?>">
		 		</td>
		 	</tr>
		 </table>
	</form>
</body>
</html>
