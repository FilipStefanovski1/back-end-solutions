<?php
$text = file_get_contents("textfile.txt"); 
$textChars = str_split($text);

// Sort Z to A
rsort($textChars);

// Reverse the whole array
$textChars = array_reverse($textChars);

// Count frequency
$charCounts = [];
foreach ($textChars as $char) {
    if (!isset($charCounts[$char])) {
        $charCounts[$char] = 1;
    } else {
        $charCounts[$char]++;
    }
}

$totalDifferentChars = count($charCounts);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Foreach Character Analysis</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Character Frequency (Foreach)</h1>
    <p>Total different characters: <?= $totalDifferentChars ?></p>
    <ul>
        <?php foreach ($charCounts as $char => $count): ?>
            <li>'<?= htmlspecialchars($char) ?>' appears <?= $count ?> times</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
