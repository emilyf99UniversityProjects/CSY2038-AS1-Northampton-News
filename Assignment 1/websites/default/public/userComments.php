<?php
session_start();
$title = 'Northampton News - Comments';
require '../head.php';
require '../nav.php';
require '../databaseJoin.php';


    $displayComm = $pdo->prepare('SELECT * FROM comment WHERE username= :username');
    $value = [
        'username' => $_GET['username'],
    ];

    $displayComm -> execute($value);

    echo '<h2>' . $_GET['username'] . ' </h2>';

    foreach($displayComm->fetchAll() as $row) {

        echo  '<p>Comment Posted: "' .$row['commentContent'] .'" </p>';
        echo '<p> On Article: '. $row['articleId']. '</p>';
    } 
require '../foot.php';
?>

