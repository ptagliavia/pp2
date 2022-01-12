<?php
function printArr($numArray)
{
    for ($x = 0; $x < sizeof($numArray); $x++) {
        echo "The number is: $numArray[$x] <br>";

    }
}

function largest($largestArr) {
    $largestNum= max($largestArr);
    return $largestNum;
}

function removeDups($removeArray) {
    return array_values(array_unique($removeArray));
}

function distribution($distArray) {
    $toSortArray = array_count_values($distArray);
    ksort($toSortArray);
    return $toSortArray;
}