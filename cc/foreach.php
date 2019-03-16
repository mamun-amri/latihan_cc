<?php
$link  = mysqli_connect('localhost','root','','latihan_cc');
$nama = array("Andri","Joko","Sukma","Rina","Sari");
foreach ($nama as $val)
{
   echo "$val, ";
   echo "<br>";
}

echo " <br> latihan <br>";
  $nama = array(
    1=>"mamun",
    2=>"amri",
    3=>"yuli",
    4=>"siti"
  );
var_dump($nama);
 foreach($nama as $ar => $isi){
   echo 'no ke '.$ar .' namanya '.$isi.'<br>';
 }

echo " <h1> latihan aray dari database </h1>";
$query  = mysqli_query($link,"SELECT * FROM m_hobi");
  while ($row = mysqli_fetch_array($query)) {
    $a["$row[id]"]="$row[hobi]";
  }
  foreach ($a as $key => $isi) {
    echo "<br /> $key = $isi";
  }


 ?>
