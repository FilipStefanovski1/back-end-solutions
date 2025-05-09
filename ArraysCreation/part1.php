<?php
// --- Method 1: Using array() ---
$animals1 = array("dog", "cat", "elephant", "lion", "tiger", "bear", "zebra", "giraffe", "rabbit", "fox");

// --- Method 2: Using short array syntax ---
$animals2 = ["kangaroo", "panda", "wolf", "leopard", "eagle", "shark", "cow", "donkey", "rat", "monkey"];

// --- 2D array: Vehicles grouped by category ---
$vehicles = [
    "landVehicles" => ["Vespa", "bicycle"],
    "waterVehicles" => ["surfboard", "raft", "schooner", "three-master"],
    "airVehicles" => ["hot air balloon", "helicopter", "B52"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Arrays Creation</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Animals (Method 1)</h1>
    <ul>
        <?php foreach ($animals1 as $animal): ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Animals (Method 2)</h1>
    <ul>
        <?php foreach ($animals2 as $animal): ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Vehicles (2D Array)</h1>
    <pre><?php var_dump($vehicles); ?></pre>
</body>
</html>
