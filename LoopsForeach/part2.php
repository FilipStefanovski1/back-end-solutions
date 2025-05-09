<?php
$text = file_get_contents("textfile.txt");
$text = strtolower($text); 

// Initialize alphabet counter
$alphabet = range('a', 'z');
$letterCounts = array_fill_keys($alphabet, 0);

// Count only letters A–Z
foreach (str_split($text) as $char) {
    if (ctype_alpha($char)) {
        $letterCounts[$char]++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alphabet Frequency</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Letter Occurrences (A–Z)</h1>
    <ul>
        <?php foreach ($letterCounts as $letter => $count): ?>
            <li><?= strtoupper($letter) ?> x <?= $count ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
