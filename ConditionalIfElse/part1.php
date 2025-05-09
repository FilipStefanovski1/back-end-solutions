<?php
$year = 2022; 

$isLeap = false;

if ($year % 4 != 0) {
    $isLeap = false;
} elseif ($year % 100 != 0) {
    $isLeap = true;
} elseif ($year % 400 == 0) {
    $isLeap = true;
} else {
    $isLeap = false;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Leap Year Checker</title>
</head>
<body style="font-family: Arial, sans-serif;">
  <h1>Leap Year Check</h1>
  <p>The year <strong><?= $year ?></strong> 
    <?= $isLeap ? 'is' : 'is not' ?> a leap year.</p>
</body>
</html>
