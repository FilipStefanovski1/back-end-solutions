<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table (While)</title>
    <style>
        .even {
            background-color: lightgreen;
        }
        td {
            padding: 4px 8px;
            text-align: center;
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif;">
    <h1>Multiplication Tables (1–10)</h1>
    <table border="1">
        <?php
        $i = 0;
        while ($i <= 10) {
            echo "<tr>";
            $j = 1;
            while ($j <= 10) {
                $val = $i * $j;
                $class = $val % 2 === 0 ? 'even' : '';
                echo "<td class='$class'>$val</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</body>
</html>
