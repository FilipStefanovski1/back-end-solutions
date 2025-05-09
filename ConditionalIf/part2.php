<?php
$number = 6; 

$day = '';

if ($number == 1) {
    $day = "monday";
} elseif ($number == 2) {
    $day = "tuesday";
} elseif ($number == 3) {
    $day = "wednesday";
} elseif ($number == 4) {
    $day = "thursday";
} elseif ($number == 5) {
    $day = "friday";
} elseif ($number == 6) {
    $day = "saturday";
} elseif ($number == 7) {
    $day = "sunday";
} else {
    $day = "invalid number";
}

// Convert day to uppercase
$upperDay = strtoupper($day);

// Create version with all uppercase except 'a'
$uppercaseExceptA = str_replace('A', 'a', strtoupper($day));

// Create version with all uppercase except LAST 'a'
$pos = strrpos(strtoupper($day), 'A');
if ($pos !== false) {
    $temp = strtoupper($day);
    $uppercaseExceptLastA = substr_replace($temp, 'a', $pos, 1);
} else {
    $uppercaseExceptLastA = strtoupper($day);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Conditional If - Part 2</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <p>Day (original): <?= $day ?></p>
    <p>Day (uppercase): <?= $upperDay ?></p>
    <p>Day (uppercase except all 'a's): <?= $uppercaseExceptA ?></p>
    <p>Day (uppercase except last 'a'): <?= $uppercaseExceptLastA ?></p>
</body>
</html>
