<?php
// Global hash
$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

// Function 1: use global keyword
function countOccurrences1($needle) {
    global $md5HashKey;
    $count = substr_count($md5HashKey, $needle);
    return "Function 1: The needle '$needle' occurs $count times in the hash key '$md5HashKey'";
}

// Function 2: use global passed as parameter
function countOccurrences2($needle, $key) {
    $count = substr_count($key, $needle);
    return "Function 2: The needle '$needle' occurs $count times in the hash key '$key'";
}

// Function 3: use $GLOBALS array
function countOccurrences3($needle) {
    $key = $GLOBALS['md5HashKey'];
    $count = substr_count($key, $needle);
    return "Function 3: The needle '$needle' occurs $count times in the hash key '$key'";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Functions Advanced Part 1</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>MD5 Hash Analysis</h1>
    <p><?= countOccurrences1('2') ?></p>
    <p><?= countOccurrences2('8', $md5HashKey) ?></p>
    <p><?= countOccurrences3('a') ?></p>
</body>
</html>
