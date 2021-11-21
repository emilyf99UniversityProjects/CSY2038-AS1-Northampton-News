<?php
    session_start();
    /*The requires are used to generate the templates as well as connect to the database
    These are not stored in the public directory as they user should not be able to directly access these*/
    $title = 'Northampton News';
    require '../databaseJoin.php';
    require '../head.php';
    require '../nav.php';
    require '../goBack.php';

    /*This file is used to generate a page for all the categories in the database*/

    /*The category Id from the URL is fetched when the category is clicked */
    if (isset($_GET['categoryId'])) {

        //the category Id from the URL is fetched and used as the header for the page
        echo '<h3>' . $_GET['categoryId'] . ' Category </h3>';

        /*this prepare statemnt is used to match the URL to the Id in the database, 
        this is used to ensure the correct category is retrieved */
        $selectCat = $pdo->prepare('SELECT * FROM article WHERE categoryId= :categoryId');
        $value = [
            'categoryId' => $_GET['categoryId'],
        ];

        $selectCat -> execute($value);

        /*For the selected category all values about that category are retrieved, 
        the title uses a link that when clicked takes the user to the correct article page, 
        the correct page is identified using the article Id. 
        The title and the publish date are also displayed */
        foreach($selectCat->fetchAll() as $row) {
            echo '<a class="articleLink" href="articlePages.php?articleId=' . $row['articleId'] . '">' 
            . '<p>'.$row['title'] . '</a>' .' Published: '.$row['publishDate'] . '</p>';
        }
       }
    require '../foot.php';
?>
