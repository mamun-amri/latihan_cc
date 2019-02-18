<?php
	if(!isset($_SESSION['nama'])){
		header('location:index.php');
	}
	include"config.php";

	if(isset($_REQUEST['id'])){
		$id_user = $_REQUEST['id'];

		$query = "SELECT * FROM users WHERE id='$id_user'";
		$hasil = mysqli_query($koneksi, $query);

		$r = mysqli_fetch_array($hasil);

		$id_user = $r['id'];
		$username = $r['username'];
		$nama = $r['nama'];
		$level = $r['level'];
		$password =$r['password'];
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
		 <table class="table ">
		 	<tr>
		 		<td>Nama</td>
		 		<td>:</td>
		 		<td><input type="text" name="nama" class="form-control" value="<?=$nama?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Username</td>
		 		<td>:</td>
		 		<td><input type="text" name="username" class="form-control" value="<?=$username?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Password</td>
		 		<td>:</td>
		 		<td><input type="password" name="password" class="form-control" value="<?=$password?>"></td>
		 	</tr>
		 	<tr>
		 		<td>Level</td>
		 		<td>:</td>
		 		<td>
		 			<select name="level" class="btn btn-default">
		 				<option >-pilih level-</option>
		 				<option <?php if(isset($_REQUEST['id'])){echo ($level == '1') ? "selected": "";} ?>>1</option>
		 				<option <?php if(isset($_REQUEST['id'])){echo ($level == '2') ? "selected": "";} ?>>2</option>
		 				<option <?php if(isset($_REQUEST['id'])){echo ($level == '3') ? "selected": "";} ?>>3</option>
		 			</select>
		 		</td>
		 	</tr>
		 	<tr>
		 		<td></td>
		 		<td></td>
		 		<td>
		 			<input type="submit" class="btn btn-info" name="<?=$button?>" value="<?=$button?>">
		 		</td>
		 	</tr>
		 </table>
	</form>
</body>
</html>
