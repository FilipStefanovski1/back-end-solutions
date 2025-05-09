<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Multiplication Tables (For)</title>
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
        <?php for ($row = 0; $row <= 10; $row++): ?>
            <tr>
                <?php for ($col = 1; $col <= 10; $col++): 
                    $value = $row * $col; ?>
                    <td class="<?= $value % 2 === 0 ? 'even' : '' ?>"><?= $value ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
