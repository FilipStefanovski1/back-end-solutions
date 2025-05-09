<?php
$animals = ["dog", "cat", "lion", "panda", "bear", "elephant"];

$animalCount = count($animals);
$teZoekenDier = "panda";
$found = in_array($teZoekenDier, $animals);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array Functions Part 1</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Animals List</h1>
    <p>Total animals: <?= $animalCount ?></p>

    <p>Searching for "<strong><?= $teZoekenDier ?></strong>": 
        <?= $found ? "Found!" : "Not found." ?></p>
</body>
</html>
