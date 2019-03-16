<?php
  for($i=1;$i<=5;$i++){
    echo '* <br>';
  }
  echo "<h1>latihan</h1>";
  for($i=1;$i<=5;$i++){
    for($a=1;$a<=5;$a++){
      echo '*';
    }
    echo "<br>";
  }
  echo "<h1>latihan</h1>";
  for($i=1;$i<=5;$i++){
    for($a=1;$a<=$i;$a++){
      echo '*';
    }
    echo "<br>";
  }
  echo "<h1>latihan</h1>";
  for($i=5;$i>=1;$i--){
    for($a=1;$a<=$i;$a++){
      echo '*';
    }
    echo "<br>";
  }
  echo "<h1>latihan</h1>";
  for($i=9;$i>=1;$i--){
    for($a=2;$a<=$i;$a++){
      echo '1';
    }
    echo $i."<br>";
  }
  echo "<h1>latihan</h1>";
  for($i=1;$i<=5;$i++){
    for($a=1;$a<=5;$a++){
      for($b=1;$b<=$i;$b++){
        echo $b;
      }
    }
    echo "<br>";
  }
  for($i=6;$i>=1;$i--){
    for($a=1;$a<=5;$a++){
      for($b=1;$b<=$i;$b++){
        echo $b;
      }
    }
    echo "<br>";
  }
 ?>
