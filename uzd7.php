<?php
  error_reporting(E_ERROR);
$array1 = array("a","b","c");
$array2d =  array(
                  array(0=>"a",1=> "b",2=> "c"),
                  array(0=>"d",1=> "e",2=> "f")
                );

$array3d =  array(
              array(
                array(0=>"a",1=> "b",2=> "c"),
                array(0=>"d",1=> "e",2=> "f")
              ),
              array(
                  array(0=>"a",1=> "b",2=> "c"),
                  array(0=>"d",1=> "e",2=> "f")
                  )
              );
$index = null;
function print_array($array,$index) {

    foreach ($array as $key => $value) {

    if(is_array($value))
      {
        $index = $index . $key.":";
        $array_length = sizeof($value,0);
        print_array($value,$index);
        $index = substr($index, 0, -2);

      }
    else
      {
        $indexKey = (str_replace(":","",$index)+$key);
        if($indexKey==0)
          {
            echo $index.$key.":".$value;
          }
          else
          {
            echo " , ".$index.$key.":".$value;
          }
      }
  }
}

print_array($array3d,$index);

 ?>
