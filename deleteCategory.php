<?php
session_start();
$title = 'NN - Delete Category';
require '../head.php';
require '../nav.php'; 
require '../sideNavBar.php';
require '../databaseJoin.php';

if(isset($_GET['name'])) {
    $removeCategory = $pdo->prepare('DELETE FROM category WHERE name= :name');
    $removeCategory ->execute($_GET);

echo '<p>Category Deleted</p>';
}
?>

<!-- contains the page footer and the closing html -->
<?php
require '../foot.php';
?>