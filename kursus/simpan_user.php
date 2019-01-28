<?php
include "config.php";

$id_user = $_POST['id'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];



if(isset($_POST['simpan'])){
	$query = "insert into users (username,nama,password,level)
	VALUES ('$username','$nama','$password','$level')";
	$hasil = mysqli_query($koneksi, $query);
	if ($hasil) {
		echo " <center> Data Berhasil Simpan <br/>
				<br> Untuk melihat daftar kendaraan klik <a href = 'users.php'> Disini </a></center>";
	} else { echo "Data gagal diupdate"; }
}else{
	$query = mysqli_query($koneksi,"UPDATE users SET
						id 			='$id_user',
						username='$username',
						nama 		='$nama',
						password='$password',
						level 	='$level'
						where id='$id_user';
	");
	if ($query) {
		echo "<script>alert('data berhasil disimpan');document.location='user.php';</script>";
	} else { echo "<script>alert('data gagal disimpan');document.location='form_input.php?id=$id_user';</script>"; }
}
?>
