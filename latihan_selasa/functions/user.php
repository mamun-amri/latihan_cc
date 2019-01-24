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

  function tampil_id($id)
  {
    global $link;
    $query = mysqli_query($link,"SELECT * FROM users WHERE id='$id'");
    return $query;
  }

 ?>
