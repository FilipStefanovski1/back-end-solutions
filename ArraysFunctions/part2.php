<?php
$animals = ["dog", "cat", "lion", "panda", "bear", "elephant"];
sort($animals); // Sort alphabetically

$mamals = ["goat", "deer", "cow"];
$animals = array_merge($animals, $mamals);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array Functions Part 2</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Merged & Sorted Animals</h1>
    <ul>
        <?php foreach ($animals as $animal): ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
