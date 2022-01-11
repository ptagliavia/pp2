<?php
/*
 * Pair Program 2
 * Pat Tagliavia
 * 01/11/2021
 * URL: https://ptagliavia.greenriverdev.com/SDEV328/pp2/index.php
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>
<?php
echo 'PHP Array Practice<br>';

$numbers = array(7,9,8,9,8,8,6);

include 'functions.php';

printArr($numbers);

echo largest($numbers) .'<br><br>';

printArr(removeDups($numbers));

?>
</body>
</html>