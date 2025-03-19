<?php

$articles = [
    [
        'title' => 'Deadly Nightclub Fire in North Macedonia',
        'date' => 'March 17, 2025',
        'content' => 'A fire at a nightclub in North Macedonia has left multiple people dead, with several others injured. The incident occurred late at night in the city of Kocani. Authorities are investigating the cause of the fire, and officials have called for increased fire safety regulations. Witnesses describe chaotic scenes as people tried to escape the burning building.',
        'image' => 'images/fire-nightclub.jpg',
        'imageDescription' => 'Scene of the nightclub fire in North Macedonia',
        'source' => 'https://www.nytimes.com/2025/03/17/world/europe/north-macedonia-nightclub-fire-pulse.html'
    ],
    [
        'title' => 'Political Unrest in Europe',
        'date' => 'March 17, 2025',
        'content' => 'Protests erupted across several European cities in response to new government policies. Citizens are demanding changes and calling for increased transparency from their leaders. Some demonstrations turned violent, leading to clashes between police and protesters.',
        'image' => 'images/bbc-news.jpg',
        'imageDescription' => 'Protesters marching in the streets',
        'source' => 'https://www.bbc.com/news/articles/c2d48rl1rplo'
    ],
    [
        'title' => 'AP Reports on the North Macedonia Fire',
        'date' => 'March 17, 2025',
        'content' => 'The Associated Press has confirmed that at least ten people have died in the devastating fire that broke out in a North Macedonian nightclub. Rescue operations are still ongoing, and officials are working to determine the cause of the blaze.',
        'image' => 'images/ap-news.jpg',
        'imageDescription' => 'Firefighters battling the fire at the nightclub',
        'source' => 'https://apnews.com/article/north-macedonia-kocani-nightclub-fire-e4b0fb9b87fbd1af22f5f4db365b054f'
    ]
];


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];

    if (isset($articles[$id])) {
        $article = $articles[$id];
    } else {
        die("This article does not exist.");
    }
} else {
    die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article['title'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1><?= $article['title'] ?></h1>
<p class="date"><?= $article['date'] ?></p>
<img src="<?= $article['image'] ?>" alt="<?= $article['imageDescription'] ?>">
<p><?= $article['content'] ?></p>
<p><a href="<?= $article['source'] ?>" target="_blank">Read full article on original source</a></p>
<a href="index.php">Back to homepage</a>

</body>
</html>
