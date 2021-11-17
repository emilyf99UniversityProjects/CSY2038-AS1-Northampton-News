<?php
    session_start();
    $title = 'Northampton News';
    require 'databaseJoin.php';
    require 'head.php';
    require 'nav.php';
	require  'goBack.php';

?>

<article>

<?php

    if (isset($_GET['articleId'])) {

        $selectArt = $pdo->prepare('SELECT * FROM article WHERE articleId= :articleId');
        $value = [
            'articleId' => $_GET['articleId']
        ];

        $selectArt -> execute($value);

        foreach($selectArt->fetchAll() as $row) {
            echo '<h1>' . $row['title'] . '</h1>' ;
            echo '<em>Publish Date: ' .$row['publishDate'] . '</em>';
            echo '<p>' .$row['content'] . '<p>';
            echo '<p>Category: ' .$row['categoryId'] . ' </p>';
        }
       }


 if() 
?>

<!-- comment form -->

<?php
    require 'foot.php';
?>