<?php

include 'config.php';

  $id          = $_POST['id'];
  $nama        = $_POST['nama'];
  $hp          = $_POST['hp'];
  $jk          = $_POST['jk'];
  $tgl         = $_POST['tgl'];
  $fakultas    = $_POST['fakultas'];
  $peminatan   = $_POST['peminatan'];
  $pesan       = $_POST['pesan'];

  if(isset($_REQUEST['daftar'])){
      for($b=0;$b<count($_POST['hobi']);$b++){
        $hobis=$_POST['hobi'][$b];
        mysqli_query($koneksi,"INSERT INTO `hobi` (`id`,`hobi`) VALUES ('$id','$hobis')");
      }
    $query      = "INSERT INTO pendaftaran (id,nama,hp,jk,fakultas,peminatan,pesan,tgl)
                   VALUES ('$id','$nama','$hp','$jk','$fakultas','$peminatan','$pesan','$tgl')";
    $result = mysqli_query($koneksi,$query);
    if($result){
      echo "<script>alert('data berhasil disimpan');document.location='page.php?content=data_anggota';</script>";
    }else{
      echo "anda gagal daftar";
    }sudo 
  }else{
    $id         =$_REQUEST['id'];
    mysqli_query($koneksi,"DELETE FROM `hobi` WHERE id='$id'");
    for($b=0;$b<count($_POST['hobi']);$b++){
      $hobis=$_POST['hobi'][$b];
      mysqli_query($koneksi,"INSERT INTO `hobi` (`id`,`hobi`) VALUES ('$id','$hobis')");
    }
    $query      = "UPDATE pendaftaran SET
                  id            ='$id',
                  nama          ='$nama',
                  hp            ='$hp',
                  tgl           ='$tgl',
                  jk            ='$jk',
                  fakultas      ='$fakultas',
                  peminatan     ='$peminatan',
                  pesan         ='$pesan'
                  WHERE id='$id'";
    $result = mysqli_query($koneksi,$query);
    if($result){
      echo "<script>alert('data berhasil diedit');document.location='page.php?content=data_anggota';</script>";
    }else{
      echo "<script>alert('data gagal diedit');document.location='page.php?content=data_anggota';</script>";
    }
  }
?>
