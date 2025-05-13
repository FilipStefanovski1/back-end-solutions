<?php
function showList($directory)
{
    $printText = "<ul>";
    foreach(glob($directory . "/*.php") as $file) 
    {
        $fileName = basename($file);
        $printText .= "<li><a href='$file'>$fileName</a></li>";
    }
    $printText .= "</ul>";
    return $printText;
}

function searchFiles($searchTerm)
{
    $printText = "<h2>Search Result for \"$searchTerm\"</h2>";
    $files = array_merge(
        glob("examples/*.php"),
        glob("assignments/*.php")
    );

    $matches = [];
    foreach ($files as $file) {
        $fileName = basename($file);
        $contents = file_get_contents($file);

        if (stripos($fileName, $searchTerm) !== false || stripos($contents, $searchTerm) !== false) {
            $matches[] = $file;
        }
    }

    if (count($matches)) {
        $printText .= "<ul>";
        foreach ($matches as $file) {
            $fileName = basename($file);
            $printText .= "<li><a href='$file'>$fileName</a></li>";
        }
        $printText .= "</ul>";
    } else {
        $printText .= "<p>Sorry, no search results found for \"$searchTerm\"</p>";
    }

    return $printText;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <style>
        form label {
            display: inline;
        }
        iframe {
            display: block;
            height: 750px;
            width: 1000px;
            border: 1px solid lightgrey;
        }
    </style>
</head>
<body>

    <h1>Index Page</h1>

    <ul>
        <li><a href="index.php?link=course">Course</a></li>
        <li><a href="index.php?link=examples">Examples</a></li>
        <li><a href="index.php?link=assignments">Assignments</a></li>
    </ul>

    <form action="index.php" method="GET">
        <label for="search-query">Search for:</label>
        <input type="text" name="search-query" id="search-query"
               placeholder="<?php echo isset($_GET['search-query']) ? htmlspecialchars($_GET['search-query']) : 'Enter a search term'; ?>"
               value="<?php echo $_GET['search-query'] ?? ''; ?>">
        <input type="submit" value="Search">
    </form>

    <h2>Content</h2> 

    <?php
    if (isset($_GET['search-query'])) {
        echo searchFiles($_GET['search-query']);
    } elseif (isset($_GET['link'])) {
        switch ($_GET['link']) {
            case "course":
                echo '<iframe src="https://docs.google.com/presentation/d/1dJdMD4FbkfrTOHhvXMcMSfhseXgy9MS2jRTXgiMzLNA/edit?usp=sharing"></iframe>';
                break;
            case "examples":
                echo showList("examples");
                break;
            case "assignments":
                echo showList("assignments");
                break;
        }
    }
    ?>

</body>
</html>
