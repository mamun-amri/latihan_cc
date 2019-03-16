<?php
echo "<h1> latihan </h1>";
$a=1;
  do {
    $a++;
    echo "* <br>";
  } while ($a <= 5);

  echo "<h1> latihan </h1>";
  $a=1;
  do {
    $a++;
    echo "<br>";
    $i=1;
      do {
        $i++;
        echo "*";
      } while ($i <= 5);
  } while ($a <= 5);


  echo "<h1> latihan </h1>";
  $a=0;
    do {
      $a++;
      echo "<br>";
      $i=1;
        do {
          $i++;
          echo "*";
        } while ($i <= $a);
    } while ($a <= 5);

  echo "<h1> latihan </h1>";
  $a=6;
    do {
      $a--;
      echo "<br>";
      $i=1;
        do {
          $i++;
          echo "*";
        } while ($i <= $a);
    } while ($a >= 2);
 ?>
