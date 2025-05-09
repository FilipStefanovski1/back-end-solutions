<?php
$array1 = [1, 2, 3, 4, 5];

// Multiply all numbers
$product = 1;
foreach ($array1 as $num) {
    $product *= $num;
}

// Filter odd numbers
$odds = [];
foreach ($array1 as $num) {
    if ($num % 2 !== 0) {
        $odds[] = $num;
    }
}

// Second array
$array2 = [5, 4, 3, 2, 1];

// Add numbers with same index
$sumArray = [];
for ($i = 0; $i < count($array1); $i++) {
    $sumArray[] = $array1[$i] + $array2[$i];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Arrays Part 2</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Product of All Numbers</h1>
    <p><?= $product ?></p>

    <h2>Odd Numbers</h2>
    <p><?= implode(", ", $odds) ?></p>

    <h2>Sum of Same-Index Numbers</h2>
    <p><?= implode(", ", $sumArray) ?></p>
</body>
</html>
