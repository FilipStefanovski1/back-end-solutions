<?php
// Numbers from 0 to 100
$allNumbers = [];
for ($i = 0; $i <= 100; $i++) {
    $allNumbers[] = $i;
}

// Divisible by 3 AND between 40 and 80
$special = [];
for ($i = 41; $i < 80; $i++) {
    if ($i % 3 === 0) {
        $special[] = $i;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loops For Part 1</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <p><?= implode(', ', $allNumbers) ?></p>
    <hr>
    <p><?= implode(', ', $special) ?></p>
</body>
</html>
