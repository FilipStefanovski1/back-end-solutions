<?php
$number = 1; 
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
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Conditional If - Part 1</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <p>Day: <?= $day ?></p>
</body>
</html>
