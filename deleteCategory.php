
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<!-- Code for Side Bar Navigation (remove when not needed) -->
<?php
$title = 'NN - Delete Category';
require 'head.php';
require 'nav.php'; 
require 'sideNavBar.php';
require 'databaseJoin.php';

if(isset($_GET['name'])) {
    $removeCategory = $pdo->prepare('DELETE FROM category WHERE name= :name');
    $removeCategory ->execute($_GET);

echo '<p>Category Deleted</p>';
}
?>




<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>