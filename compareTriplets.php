<?php

/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;

    $combined = array_combine($a, $b);
    foreach ($combined as $Key => $Value ) {
        if ($Key > $Value) {
            $alice++;
            echo "alice plus 1 <br>";
        } elseif ($Key < $Value) {
            $bob++;
            echo "bob plus 1 <br>";
        }
    }

    return array($alice, $bob);
}


$result = compareTriplets([5, 6, 7], [3, 6, 10]);
print_r($result);