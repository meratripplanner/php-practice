<?php
function add($a, $b) {
    return $a + $b;
}

function multiply($a, $b) {
    return $a * $b;
}

$numbers = file("numbers.txt", FILE_IGNORE_NEW_LINES);
$sum = 0;
$result = 1;

foreach($numbers as $number) {
    $sum = add($sum, $number);
    $result = multiply($result, $number);
}

echo "The sum is {$sum}\n";
echo "Multiply Result is {$result}\n";
