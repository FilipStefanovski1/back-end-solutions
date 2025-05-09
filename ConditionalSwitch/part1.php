<?php
$number = 5; 
$day = '';

switch ($number) {
    case 1:
        $day = "monday";
        break;
    case 2:
        $day = "tuesday";
        break;
    case 3:
        $day = "wednesday";
        break;
    case 4:
        $day = "thursday";
        break;
    case 5:
        $day = "friday";
        break;
    case 6:
        $day = "saturday";
        break;
    case 7:
        $day = "sunday";
        break;
    default:
        $day = "invalid number";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Switch - Day of the Week</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <p>Day: <strong><?= $day ?></strong></p>
</body>
</html>
