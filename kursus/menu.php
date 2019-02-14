<?php
session_start();
if(!isset($_SESSION['nama'])){
  header('location:index.php');
}
 ?>
<li class="treeview">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
  </ul>
</li>
<li><a href="page.php?content=data_user"><i class="fa fa-circle-o text-aqua"></i> <span>Data User</span></a></li>
