<?php
  $month = 8;
  $year = 2019;
  if(!is_int($year) || $year < 0 || $year > 10000) {
    exit("Achtung! Achtung!");
  }
  for($day = 1; $day <= 31; $day++)
  {
      $date = mktime(0, 0, 0, $month, $day, $year);  
      if(date('w', $date) == 1) {
        echo date('Y-m-d-D', $date) . "\n"; 
      }
  }
?>