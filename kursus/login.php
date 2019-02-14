<?php
  session_start();
  require_once 'config.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query    = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
  $count    = mysqli_num_rows($query);
  if($count > 0){
    $row      = mysqli_fetch_array($query);
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama']     = $row['nama'];
    $_SESSION['level']    = $row['level'];
    header('location:page.php?content=data_user');
  }else{
    echo "<script>alert('data gagal login');document.location='index.php';</script>";
  }
 ?>
