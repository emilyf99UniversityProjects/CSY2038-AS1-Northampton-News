<?php
session_start();
/*The requires are used to generate the templates as well as connect to the database
These are not stored in the public directory as they user should not be able to directly access these*/
$title = 'Northampton News - Comments';
require '../head.php';
require '../nav.php';
require '../databaseJoin.php';

    /*the prepare statement selects all from the comments section where a matching user name has been found 
    from the identifier in the URL, See articlePages to see how this  unique comment link is generateed  */
    $displayComm = $pdo->prepare('SELECT * FROM comment WHERE username= :username');

    $value = [
        'username' => $_GET['username'],
    ];

    $displayComm -> execute($value);

    //the username is displayed as a page title
    echo '<h2>' . $_GET['username'] . ' </h2>';

    /*all the information about a comment is retrieved using this foreach loop, 
    each record will display the comment and the article ID of the article it came from */
    foreach($displayComm->fetchAll() as $row) {

        echo  '<p>Comment Posted: "' .$row['commentContent'] .'" </p>';
        echo '<p> On Article: '. $row['articleId']. '</p>';
    } 
require '../foot.php';
?>

