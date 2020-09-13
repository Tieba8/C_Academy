<?php

 function generate_matrix($size) {
    for ($i=0; $i < $size; $i++) {
      echo "[";
      for ($x=0; $x < $size; $x++) {
        $matrix[$i][$x]=rand(0,1);
          if($x+1<$size){
            echo $matrix[$i][$x]." , ";
          }
          else{
            echo $matrix[$i][$x];
          }
        }
        echo "]";
        echo "<br>";
    }
}


$size = rand(2,10);
generate_matrix($size);

 ?>
