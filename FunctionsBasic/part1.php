<?php
// Function 1: Sum
function calculateSum($number1, $number2) {
    return $number1 + $number2;
}

// Function 2: Multiply
function multiply($number1, $number2) {
    return $number1 * $number2;
}

// Function 3: Check even number
function isEven($number) {
    return $number % 2 === 0;
}

// Function 4: String analyzer
function analyzeString($string) {
    return [
        'length' => strlen($string),
        'uppercase' => strtoupper($string)
    ];
}

// Executing functions
$sum = calculateSum(5, 7);
$product = multiply(4, 6);
$evenCheck = isEven(10);
$stringInfo = analyzeString("filip stefanovski");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Basic Functions</title>
</head>
<body style="font-family: Arial, sans-serif;">
  <h1>Function Results</h1>
  <p>Sum (5 + 7): <?= $sum ?></p>
  <p>Product (4 × 6): <?= $product ?></p>
  <p>Is 10 even? <?= $evenCheck ? 'true' : 'false' ?></p>
  <p>String analysis for "filip stefanovski":</p>
  <ul>
    <li>Length: <?= $stringInfo['length'] ?></li>
    <li>Uppercase: <?= $stringInfo['uppercase'] ?></li>
  </ul>
</body>
</html>
