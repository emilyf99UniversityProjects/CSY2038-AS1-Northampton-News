<?php
    $title = 'Northampton News';
    require 'databaseJoin.php';
    require 'head.php';
    require 'nav.php';
    require 'goBack.php';

    if (isset($_GET['categoryId'])) {

        echo '<h3>' . $_GET['categoryId'] . ' Category </h3>';
        $selectCat = $pdo->prepare('SELECT * FROM article WHERE categoryId= :categoryId');
        $value = [
            'categoryId' => $_GET['categoryId'],
        ];

        $selectCat -> execute($value);

        foreach($selectCat->fetchAll() as $row) {
            echo '<a class="articleLink" href="articlePages.php?articleId=' . $row['articleId'] . '">' . '<p>'.$row['title'] . '</a>' .' Published: '.$row['publishDate'] . '</p>';
        }
       }
     
?>
<?php
    require 'foot.php';
?>
