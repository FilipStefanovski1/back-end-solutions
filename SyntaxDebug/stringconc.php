<?php
$firstName = "Filip";
$lastName = "Stefanovski";

// concatenate/link things togethr
$fullName = $firstName . " " . $lastName;

// count characters
$charCount = strlen($fullName);
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Concatenation</title>
</head>
<body>
    <h1><?php echo $fullName; ?></h1>
    <p>Character count: <?php echo $charCount; ?></p>
</body>
</html>
