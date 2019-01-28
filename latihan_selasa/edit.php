<?php

  require_once 'core/init.php';

  $id = $_GET['id'];
  $result = edit($id);
  $row = mysqli_fetch_assoc($result){
  require_once 'view/header.php';

 ?>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?=$row['id'];?>">
      <label for="">username</label> <br>
      <input type="text" name="username" value"<?=$row['username'];?>"><br><br>

      <label for="">nama</label> <br>
      <input type="text" name="nama" value"<?=$row['nama']?>"><br><br>

      <label for="">level</label>
      <select name="level">
        <option>pilih</option>
        <option>1</option>
        <option>2</option>
      </select>
      <br><br>
      <input type="submit" name="simpan" value="simpan">
    </form>
<?php } ?>
