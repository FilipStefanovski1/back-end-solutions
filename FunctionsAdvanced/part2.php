<?php
// Global game state
$pigHealth = 5;
$maximumThrows = 8;

// Function to simulate one throw
function calculateHit() {
    global $pigHealth;
    $hitChance = rand(1, 100) <= 40; // 40% chance

    if ($hitChance) {
        $pigHealth--;
        $message = "Hit! ";
    } else {
        $message = "Miss! ";
    }

    $pigText = $pigHealth === 1 ? "pig" : "pigs";
    return $message . "There " . ($pigHealth === 1 ? "is" : "are") . " only $pigHealth $pigText left.";
}

// Function to simulate the full launch
function launchAngryBird() {
    static $throws = 0;
    global $maximumThrows, $pigHealth;

    if ($throws < $maximumThrows && $pigHealth > 0) {
        $throws++;
        echo "<p>" . calculateHit() . "</p>";
        launchAngryBird(); // Recursive
    } elseif ($pigHealth === 0) {
        echo "<p><strong>Won!</strong></p>";
    } else {
        echo "<p><strong>Lost!</strong></p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Angry Birds PHP</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Text-based Angry Birds</h1>
    <?php launchAngryBird(); ?>
</body>
</html>
