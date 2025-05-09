<?php
$numbers = [8, 7, 8, 7, 3, 2, 1, 2, 4];
$unique = array_unique($numbers);
rsort($unique);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array Functions Part 3</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Sorted Unique Values (Descending)</h1>
    <p><?= implode(", ", $unique) ?></p>
</body>
</html>
