<?php
session_start();
if(!isset($_SESSION['nama'])){
	header('location:index.php');
}
include "config.php";

$id_user = $_POST['id'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];



if(isset($_REQUEST['simpan'])){
	$query = "INSERT INTO users (id,username,nama,password,level)
	VALUES ('$id_user','$username','$nama','$password','$level')";
	$hasil = mysqli_query($koneksi, $query);
	if ($hasil) {
		header('location:page.php?content=data_user');
	} else { echo "Data gagal diupdate"; }
}else{
	$id_user = $_POST['id'];
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$query = "UPDATE users SET
						id 		='$id_user',
						username='$username',
						nama 	='$nama',
						password='$password',
						level 	='$level'
						WHERE id='$id_user';
	";
	$hasil = mysqli_query($koneksi,$query);
	if ($hasil) {
		echo "<script>alert('data berhasil disimpan');document.location='page.php?content=data_user';</script>";
	} else { echo "<script>alert('data gagal disimpan');document.location='form_input.php?id=$id_user';</script>"; }
}
?>
