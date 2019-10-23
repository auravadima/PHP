<?php
  $month = 8;
  $year = 2019;

  task_6($year, $month);

  function task_6($year, $month) {
    for($day = 1; $day <= 31; $day++)
    {
        $date = mktime(0, 0, 0, $month, $day, $year);  
        if(date('w', $date) == 2) {
          echo date('Y-m-d-D', $date) . "\n"; 
        }
    }
  }
?>