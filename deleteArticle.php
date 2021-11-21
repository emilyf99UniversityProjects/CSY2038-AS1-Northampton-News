<?php
session_start();
$title = 'NN - Delete Article';
require '../head.php';
require '../nav.php';
require '../sideNavBar.php';
require '../databaseJoin.php';

if(isset($_GET['articleId'])) {
    $removeCategory = $pdo->prepare('DELETE FROM article WHERE articleId= :articleId');
    $removeCategory ->execute($_GET);

echo '<p>Category Deleted</p>';
}

require '../foot.php';
?>