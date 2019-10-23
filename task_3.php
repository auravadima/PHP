<?php
  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $arr_with_string = $arr;
  $arr_with_string[2] = "text";

  superFunc($arr);
  superFunc($arr_with_string);

  function task_3($arr) {
    if(is_string($arr[2]) || is_string($arr[5]) || is_string($arr[7])) {
      echo "Achtung! Achtung!";
    } else {
      echo $arr[2] + $arr[5] + $arr[7];
    }
    echo "\n";
  }
?>