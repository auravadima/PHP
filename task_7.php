<?php
$iter = 2;
$firstResult;
while(true) {
  $binary = decbin($iter);
  $str = convertTo3And7($binary, true);
  if(checkFor3And7($str)) {
    if(checkForDivide($str)) {
      $firstResult = $str;
      break;
    }
  }
  $iter += 1;
}

$iter = 2;
$secondResult;
while(true) {
  $binary = decbin($iter);
  $str = convertTo3And7($binary, false);
  if(checkFor3And7($str)) {
    if(checkForDivide($str)) {
      $secondResult = $str;
      break;
    }
  }
  $iter += 1;
}

echo $firstResult < $secondResult ? $firstResult : $secondResult;

function convertTo3And7($str, $rev) {
  $result = $str;
  if($rev) {
    $result = str_replace('1', '3', $result);
    $result = str_replace('0', '7', $result);
  } else {
    $result = str_replace('0', '3', $result);
    $result = str_replace('1', '7', $result);
  }
  return $result;
}

function checkFor3And7($str) {
  return strpos($str, '3') !== false && strpos($str, '7') !== false;
}

function checkForDivide($str) {
  if(intval(intval($str) % 21 == 0) &&
   intval(getSumOfDigits($str) % 21 == 0)) {
    return true;
  }
  return false;
}

function getSumOfDigits($str) {
  $num = intval($str);
  $sum=0; 
  $rem=0;  
  for ($i = 0; $i <= strlen($num); $i++)  
 {  
   $rem = $num % 10;  
   $sum = $sum + $rem;  
   $num = $num / 10;  
  }  
  return intval($sum);
}
?>