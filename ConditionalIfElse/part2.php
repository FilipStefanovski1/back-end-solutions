<?php
$totalSeconds = 2211662222222; 

$minutes = floor($totalSeconds / 60);
$hours = floor($totalSeconds / 3600);
$days = floor($totalSeconds / 86400);
$weeks = floor($totalSeconds / (7 * 86400));
$months = floor($totalSeconds / (31 * 86400)); 
$years = floor($totalSeconds / (365 * 86400)); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Time Breakdown</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Time Breakdown in <?= number_format($totalSeconds) ?> seconds</h1>
    <ul>
        <li>Minutes: <strong><?= number_format($minutes) ?></strong></li>
        <li>Hours: <strong><?= number_format($hours) ?></strong></li>
        <li>Days: <strong><?= number_format($days) ?></strong></li>
        <li>Weeks: <strong><?= number_format($weeks) ?></strong></li>
        <li>Months (31 days): <strong><?= number_format($months) ?></strong></li>
        <li>Years (365 days): <strong><?= number_format($years) ?></strong></li>
    </ul>
</body>
</html>
