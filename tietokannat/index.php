<?php
include_once('yhteys.php');
include_once('article.php');

echo time();

$article = new Article;
$articles = $article->fetch_all();

print_r($articles);
?>

<html>
    <head>
        <title>Uutiset</title>
    </head>
    <body>
        <div class="container">
            <a href="index.php">testi</a>
            <ol>
                <?php foreach ($articles as $article) { ?>
                    <li>
                        <a href="article.php?id=<?php echo $article['article_id']; ?>">
                            <?php echo $article['article_title']; ?>
                        </a>
                        - <small>
                            julkaistu <?php echo date('l jS', $article['article_timestamp']); ?>
                        </small>
                    </li>
                <?php } ?>
            </ol>
        </div>
    </body>
</html>