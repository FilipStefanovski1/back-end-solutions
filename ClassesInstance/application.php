<?php
// Autoloader for classes
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/classes/' . $class . '.php';
});

// Create a new instance
$percent = new Percent(150, 100);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Percentage Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 2rem auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            padding: 0.75rem;
            border: 1px solid #ccc;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>What percentage is 150 of 100?</h2>
    <table>
        <tr>
            <td>Absolute</td>
            <td><?php echo $percent->absolute; ?></td>
        </tr>
        <tr>
            <td>Relative</td>
            <td><?php echo $percent->relative; ?></td>
        </tr>
        <tr>
            <td>Whole number</td>
            <td><?php echo $percent->hundred; ?></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td><?php echo $percent->nominal; ?></td>
        </tr>
    </table>
</body>
</html>
