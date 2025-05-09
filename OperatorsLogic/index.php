<?php
$textToCheck = "FilipStef";

// Check 1: more than 5 characters AND starts with a capital
$check1 = strlen($textToCheck) > 5 && ctype_upper($textToCheck[0]);

// Check 2: more than 5 characters OR contains the letter 'e'
$check2 = strlen($textToCheck) > 5 || strpos($textToCheck, 'e') !== false;

// Check 3: more than 5 characters
$check3 = strlen($textToCheck) > 5;

// Check 3b: written differently
$check3b = !(strlen($textToCheck) <= 5);

// Here the logic is applied
$yearOfBirth = 2007;
$monthOfBirth = 5;

$isApplicable = ($yearOfBirth % 2 !== 0 || $yearOfBirth > 2005) || ($monthOfBirth <= 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logic Operators</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .applicable {
      font-weight: bold;
      background-color: green;
      color: white;
      padding: 10px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <h1>Part 1: Logic Checks</h1>
  <p>Text to check: <strong><?= $textToCheck ?></strong></p>
  <ul>
    <li>Check 1 (length > 5 AND starts with capital): <strong><?= $check1 ? 'true' : 'false' ?></strong></li>
    <li>Check 2 (length > 5 OR contains 'e'): <strong><?= $check2 ? 'true' : 'false' ?></strong></li>
    <li>Check 3 (length > 5): <strong><?= $check3 ? 'true' : 'false' ?></strong></li>
    <li>Check 3b (same as above, written differently): <strong><?= $check3b ? 'true' : 'false' ?></strong></li>
  </ul>

  <h1>Part 2: Eligibility Check</h1>
  <?php if ($isApplicable): ?>
    <p class="applicable">You apply</p>
  <?php else: ?>
    <p>You do not apply</p>
  <?php endif; ?>
</body>
</html>
