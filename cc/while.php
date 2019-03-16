<?php
  $a=1;
  while ($a <= 5) {
    echo "* <br>";
  $a++;
  }

  echo "latihan <br>";
  $a=1;
  while ($a <= 5) {
    $i=1;
    while ($i <= 5) {
      echo "*";
      $i++;
    }
    $a++;
    echo "<br>";
  }

  echo "latihan <br>";
  $a=5;
  while ($a >= 1) {
    $i=1;
    while ($i <= $a) {
      echo "*";
      $i++;
    }
    $a--;
    echo "<br>";
  }

  echo "latihan <br>";
  $a=1;
  while ($a <= 5) {
    $i=1;
    while ($i <= $a) {
      echo "*";
      $i++;
    }
    $a++;
    echo "<br>";
  }

  echo "latihan <br>";
  $a=9;
  while ($a >= 1) {
    $i=2;
    while ($i <= $a) {
      echo '1';
      $i++;
    }
    $a--;
    echo $a."<br>" ;
  }

 ?>
