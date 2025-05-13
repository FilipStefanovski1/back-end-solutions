<?php

// p1
$fruit = "coconut";
$length = strlen($fruit); // strlen()  counts the number of characters in the string
$firstO = strpos($fruit, 'o'); // strpos()  finds the position of the first occurrence of 'o'

echo "<h2>Part 1</h2>";
echo "<p>Fruit: $fruit</p>";
echo "<p>Length: $length</p>";
echo "<p>First position of 'o': $firstO</p>";


// p2
$fruit = "pineable";
$lastA = strrpos($fruit, 'a'); // strrpos()  finds the position of the last occurrence of 'a'
$upper = strtoupper($fruit); // strtoupper()  converts the whole string to uppercase

echo "<h2>Part 2</h2>";
echo "<p>Fruit: $fruit</p>";
echo "<p>Last position of 'a': $lastA</p>";
echo "<p>Uppercase: $upper</p>";


// p3
$letter = "e";
$number = 3;
$longestWord = "pneumonoultramicroscopicsilicovolcanoconiosis";
$replaced = str_replace($letter, $number, $longestWord); // str_replace()  replaces all e with 3 using variables

echo "<h2>Part 3</h2>";
echo "<p>Original: $longestWord</p>";
echo "<p>Modified: $replaced</p>";
?>
