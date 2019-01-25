<?php

  function run($query)
  {
    global $link;
    return mysqli_query($link,$query);
  }

  function tambah($username,$nama,$password,$level)
  {
    $query = "INSERT INTO users (username,nama,password,level) VALUES ('$username','$nama','$password','$level')";
    return run($query);
  }

  function tampil()
  {
    global $link;
    $query = mysqli_query($link,"SELECT * FROM users");
    return $query;
  }

  function edit($username,$nama,$password,$level,$id)
  {
    global $link;
    $query = mysqli_query($link,"UPDATE users SET username='$username',nama='$nama',password='$password',level='$level' WHERE id='$id'");
    return $query;
  }

 ?>
