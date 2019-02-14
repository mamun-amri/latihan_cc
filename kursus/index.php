<?php
session_start();
if(isset($_SESSION['nama'])){
  header('location:page.php?content=data_user');
}
 ?>
<h3>Form Login</h3>
<form action="login.php" method="post">
  <table border="1" width="50%">
  <tr>
    <td>Username</td>
    <td>:</td>
    <td> <input type="text" name="username" placeholder="username"> </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td> <input type="password" name="password" placeholder="password"> </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td> <input type="submit" name="login" value="Login"></td>
  </tr>
</table>
</form>
