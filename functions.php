<?php
function printArr($numArray)
{
    echo 'Size: ' .sizeof($numArray) .'<br>';
    for ($x = 0; $x < sizeof($numArray); $x++) {
        echo "The number is: $numArray[$x] <br>";

    }
}

function largest($largestArr) {
    $largestNum= max($largestArr);
    return $largestNum;
}

function removeDups($removeArr) {
    return array_values(array_unique($removeArr));
}