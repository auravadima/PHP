<?php
$file = fopen("numbers.csv", "w");

$min = 1;
$max = 100;

$numbers = [];
foreach(range(0, $max) as $value) {
    array_push($numbers, rand($min, $max));
}

fwrite($file, join(',', $numbers))
?>