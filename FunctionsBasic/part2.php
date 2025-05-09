<?php
// Function 1: Print single or multi-dimensional arrays
function printArray($array) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            echo "<li><strong>$key:</strong><ul>";
            printArray($value); 
            echo "</ul></li>";
        } else {
            echo "<li>[$key] has value '$value'</li>";
        }
    }
}

// Function 2: Validate <html> tag
function validateHtmlTag($html) {
    return preg_match('/<html>.*<\/html>/si', $html);
}

// Test arrays
$heroes = ["Roger Penrose", "Ada Lovelace", "Alan Turing"];
$team = [
    "mentors" => ["Dijkstra", "Knuth"],
    "students" => ["Grace Hopper", "Linus Torvalds"]
];

$htmlSample = "<html><head><title>Test</title></head><body>Hello</body></html>";
$invalidHtml = "<head><title>Broken</title></head>";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Functions Part 2</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Print Simple Array</h1>
    <ul>
        <?php printArray($heroes); ?>
    </ul>

    <h1>Print Multidimensional Array</h1>
    <ul>
        <?php printArray($team); ?>
    </ul>

    <h1>HTML Tag Validation</h1>
    <p>Valid HTML: <?= validateHtmlTag($htmlSample) ? "Valid" : "Invalid" ?></p>
    <p>Invalid HTML: <?= validateHtmlTag($invalidHtml) ? "Valid" : "Invalid" ?></p>
</body>
</html>
