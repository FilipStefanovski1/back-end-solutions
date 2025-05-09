<?php
$number = 39; 

$message = '';

if ($number >= 0 && $number < 10) {
    $message = "The number lies between 0 and 10";
} elseif ($number >= 10 && $number < 20) {
    $message = "The number lies between 10 and 20";
} elseif ($number >= 20 && $number < 30) {
    $message = "The number lies between 20 and 30";
} elseif ($number >= 30 && $number < 40) {
    $message = "The number lies between 30 and 40";
} elseif ($number >= 40 && $number < 50) {
    $message = "The number lies between 40 and 50";
} elseif ($number >= 50 && $number < 60) {
    $message = "The number lies between 50 and 60";
} elseif ($number >= 60 && $number < 70) {
    $message = "The number lies between 60 and 70";
} elseif ($number >= 70 && $number < 80) {
    $message = "The number lies between 70 and 80";
} elseif ($number >= 80 && $number < 90) {
    $message = "The number lies between 80 and 90";
} elseif ($number >= 90 && $number <= 100) {
    $message = "The number lies between 90 and 100";
} else {
    $message = "The number is out of range";
}

$reversedMessage = strrev($message);
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>If Else If - Number Range</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <p>Original: <strong><?= $message ?></strong></p>
    <p>Reversed: <strong><?= $reversedMessage ?></strong></p>
</body>
</html>
