<?php
$iter = 2;
while(true) {
  $binary = decbin($iter);
  $str = convertTo3And7($binary);
  if(checkFor3And7($str)) {
    if(checkForDivide($str)) {
      echo $str;
      break;
    }
  }
  $iter += 1;
}

function convertTo3And7($str) {
  $result = str_replace('1', '3', $str);
  $result = str_replace('0', '7', $result);
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