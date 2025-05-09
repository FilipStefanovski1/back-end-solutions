<?php
$inputMonth = "january"; 
$month = strtolower($inputMonth); 

$season = '';

switch ($month) {
    case 'december':
    case 'january':
    case 'february':
        $season = "winter";
        break;

    case 'march':
    case 'april':
    case 'may':
        $season = "spring";
        break;

    case 'june':
    case 'july':
    case 'august':
        $season = "summer";
        break;

    case 'september':
    case 'october':
    case 'november':
        $season = "autumn";
        break;

    default:
        $season = "this is not a month that I recognize";
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Switch - Seasons by Month</title>
</head>
<body style="font-family: Arial, sans-serif;">
  <h1>Month: <?= ucfirst($inputMonth) ?></h1>
  <p>Season: <strong><?= $season ?></strong></p>
</body>
</html>
