<?php

/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar) {
    // Write your code here
    $sum = 0;

    foreach ($ar as $value) {
        $sum += $value;
    }

    return $sum;
}