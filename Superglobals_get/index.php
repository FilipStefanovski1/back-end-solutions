<?php

$articles = [
    [
        'title' => 'Deadly Nightclub Fire in North Macedonia',
        'date' => 'March 17, 2025',
        'content' => 'A fire at a nightclub in North Macedonia has left multiple people dead, with several others injured...',
        'image' => 'images/image1.jpeg',
        'imageDescription' => 'Scene of the nightclub fire in North Macedonia',
        'link' => 'https://www.nytimes.com/2025/03/17/world/europe/north-macedonia-nightclub-fire-pulse.html'
    ],
    [
        'title' => 'Political Unrest in Europe',
        'date' => 'March 17, 2025',
        'content' => 'Protests erupted across several European cities in response to new government policies...',
        'image' => 'images/image2.avif',
        'imageDescription' => 'Protesters marching in the streets',
        'link' => 'https://www.bbc.com/news/articles/c2d48rl1rplo'
    ],
    [
        'title' => 'AP Reports on the North Macedonia Fire',
        'date' => 'March 17, 2025',
        'content' => 'The Associated Press has confirmed that at least ten people have died in the devastating fire...',
        'image' => 'images/image3.png',
        'imageDescription' => 'Firefighters battling the fire at the nightclub',
        'link' => 'https://apnews.com/article/north-macedonia-kocani-nightclub-fire-e4b0fb9b87fbd1af22f5f4db365b054f'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Newspaper</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Today's Newspaper</h1>

<div class="articles-container">
    <?php foreach ($articles as $index => $article): ?>
        <article class="article-preview">
            <h2><?= $article['title'] ?></h2>
            <p class="date"><?= $article['date'] ?></p>
            <img src="<?= $article['image'] ?>" alt="<?= $article['imageDescription'] ?>">
            <p><?= substr($article['content'], 0, 100) ?>...</p>
            <p class="read-more">
    <a href="article.php?id=<?= $index ?>">Read more ></a>
</p>
        </article>
    <?php endforeach; ?>
</div>

</body>
</html>
