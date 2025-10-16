<?php
function add($a, $b) {
    return $a + $b;
}

$numbers = file("numbers.txt", FILE_IGNORE_NEW_LINES);
$sum = 0;

foreach($numbers as $number) {
    $sum = add($sum, $number);
}

echo "The sum is {$sum}\n";
