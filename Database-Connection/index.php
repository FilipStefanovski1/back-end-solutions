<?php
require_once('connection.php');



$artistSql = "SELECT Name FROM artists ORDER BY Name ASC";
$artistResult = $db->query($artistSql);
$artists = $artistResult->fetchAll(PDO::FETCH_ASSOC);


$columnsSql = "PRAGMA table_info(customers)";
$columnsResult = $db->query($columnsSql);
$customerCols = $columnsResult->fetchAll(PDO::FETCH_ASSOC);


$tableName = isset($_GET['table']) ? $_GET['table'] : '';
$searchCols = [];
$searchError = "";

if (!empty($tableName)) {
    $allTables = $db->query("SELECT name FROM sqlite_master WHERE type='table'")->fetchAll(PDO::FETCH_COLUMN);

    if (in_array($tableName, $allTables)) {
        $searchResult = $db->query("PRAGMA table_info($tableName)");
        $searchCols = $searchResult->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $searchError = "Table not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Spotify DB</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        table, th, td {
            border: 1px solid #888;
            border-collapse: collapse;
            padding: 8px;
        }
        table {
            margin-bottom: 20px;
        }
        input {
            padding: 5px;
        }
    </style>
</head>
<body>

<h2>Part 1: Artists (A-Z)</h2>
<table>
    <tr><th>Artist Name</th></tr>
    <?php foreach ($artists as $a): ?>
        <tr><td><?= htmlspecialchars($a['Name']) ?></td></tr>
    <?php endforeach; ?>
</table>

<h2>Part 2: Customer Table Columns</h2>
<ul>
    <?php foreach ($customerCols as $col): ?>
        <li><?= $col['name'] ?></li>
    <?php endforeach; ?>
</ul>

<h2>Part 3: Table Column Search</h2>
<form method="get">
    <label for="table">Choose a table:</label>
    <select name="table" id="table">
        <option value="">--Select--</option>
        <?php
        $tableList = $db->query("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'");
        foreach ($tableList as $tbl) {
            $name = $tbl['name'];
            $selected = ($tableName === $name) ? 'selected' : '';
            echo "<option value=\"$name\" $selected>$name</option>";
        }
        ?>
    </select>
    <button type="submit">Search</button>
</form>


<?php if (!empty($tableName)): ?>
    <h3>Result:</h3>
    <?php if ($searchError): ?>
        <p style="color: red;"><?= $searchError ?></p>
    <?php else: ?>
        <ul>
            <?php foreach ($searchCols as $col): ?>
                <li><?= $col['name'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>
