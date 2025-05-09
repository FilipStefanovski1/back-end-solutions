<?php
// Print 0 to 100
$i = 0;
$all = [];
while ($i <= 100) {
    $all[] = $i;
    $i++;
}

// Divisible by 3 and in range 40–80
$j = 41;
$special = [];
while ($j < 80) {
    if ($j % 3 == 0) {
        $special[] = $j;
    }
    $j++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loops While Part 1</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <p><?= implode(", ", $all) ?></p>
    <hr>
    <p><?= implode(", ", $special) ?></p>
</body>
</html>
