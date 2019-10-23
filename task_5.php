<?php 

$arr = [1, 45, 23, 21313];
$str = "bla";
var_dump(task_5($arr, $str));

function task_5($arr, $str) {
  if(!$arr || !$str) {
    return false;
  } 
  
  foreach($arr as $index => $elem) {
    $arr[$index] = $arr[$index] . $str;
  }
  return $arr;
}
?> 