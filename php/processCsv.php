<?php
$filename = "numbers.csv";
$file = fopen($filename, "r");

$numbers = explode(',', fread($file, filesize($filename)));
$counter = 0;
foreach($numbers as $value) {
    $isBig = $value >= 50 ? 1 : 0;
    echo $value . ' ' . $isBig . "\n";
    $counter += $isBig;
}

echo "\nCount of big numbers is " . $counter . "\n";
?>