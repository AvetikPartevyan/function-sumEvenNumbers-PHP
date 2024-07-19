<?php

$sampleArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function sumEvenNumbers($array) {
    $sum = 0;
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $sum += $number;
        }
    }
    return $sum;
}


$sum = sumEvenNumbers($sampleArray);
echo "Sum even number = " . $sum;
?>