<?php
$dateString = "10:35:25 pm 21 January 1904";
$timestamp = strtotime($dateString);
$formattedDate = date("d F Y, h:i:s a", $timestamp);

$monthMap = [
    "January" => "Јануари",
    "February" => "Февруари",
    "March" => "Март",
    "April" => "Април",
    "May" => "Мај",
    "June" => "Јуни",
    "July" => "Јули",
    "August" => "Август",
    "September" => "Септември",
    "October" => "Октомври",
    "November" => "Ноември",
    "December" => "Декември"
];

$day = date("d", $timestamp);
$month = date("F", $timestamp);
$year = date("Y", $timestamp);
$time = date("h:i:s a", $timestamp);
$macedonianMonth = $monthMap[$month];
$macedonianDate = "$day $macedonianMonth $year, $time";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Time Functions</title>
</head>
<body>
    <h1>Part 1 - English Format</h1>
    <p><?php echo $formattedDate; ?></p>

    <h1>Part 2 - Macedonian Format</h1>
    <p><?php echo $macedonianDate; ?></p>
</body>
</html>
