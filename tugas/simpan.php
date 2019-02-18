pp<?php

include 'config.php';

  $nama        = $_POST['nama'];
  $hp          = $_POST['hp'];
  $jk          = $_POST['jk'];
  $tgl         = $_POST['tgl'];
  $hobi        = $_POST['hobi'];
  $fakultas    = $_POST['fakultas'];
  $peminatan   = $_POST['peminatan'];
  $pesan       = $_POST['pesan'];

  if(isset($_REQUEST['daftar'])){
    $query      = "INSERT INTO pendaftaran (id,nama,hp,jk,hobi,fakultas,peminatan,pesan,tgl)
                   VALUES ('','$nama','$hp','$jk','$hobi','$fakultas','$peminatan','$pesan','')";
    $result = mysqli_query($koneksi,$query);
    if($result){
      header('location:page.php?content=data_anggota');
    }else{
      echo "anda gagal daftar";
    }
  }else{
    $id         =$_REQUEST['id'];
    $query      = "UPDATE pendaftaran SET
                  id            ='$id',
                  nama          ='$nama',
                  hp            ='$hp',
                  tgl           ='$tgl',
                  jk            ='$jk',
                  hobi          ='$hobi',
                  fakultas      ='$fakultas',
                  peminatan     ='$peminatan',
                  pesan         ='$pesan'
                  WHERE id='$id'";
    $result = mysqli_query($koneksi,$query);
    if($result){
      header('location:page.php?content=data_anggota');
    }else{
      echo "anda gagal daftar";
    }
  }
?>
