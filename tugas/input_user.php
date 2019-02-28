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

		$id_user 		= $r['id'];
		$username 	= $r['username'];
		$nama 			= $r['nama'];
		$level 			= $r['level'];
		$password 	=$r['password'];
		$button 		= "edit";
	}else{
		// membuat penomoran otomatis
		$query 	 	= mysqli_query($koneksi,"SELECT id AS kd FROM users ORDER BY id DESC");
		$id 			= mysqli_fetch_array($query);
		$kd				= substr($id['kd'],5,8);
		$kd_baru  = (int)$kd + 1;
		$id_user 	= 'M'.date("my").sprintf('%04s',$kd_baru);

		$username = "";
		$nama			= "";
		$button		= "simpan";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<form method="post" action="simpan_user.php">
		 <table class="table ">
			<tr>
			 	<td>Id User</td>
				<td>:</td>
				<td><input type="text" name="id" class="form-control" readonly value="<?=$id_user?>"></td>
			</tr>
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
