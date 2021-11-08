
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
$title = 'Northampton News - Home';
require 'head.php';
require 'nav.php';
require 'databaseJoin.php';

$results = $pdo->query('SELECT * FROM article ORDER BY publishDate DESC LIMIT 10');

foreach ($results as $row) {
	echo  '<li><h3><a class ="articleLink" href= "articlePages.php?name=' . $row['title'] . '">' . $row['title'] . '</a></h3>' . 
	'<p> Publish Date: ' . $row['publishDate'] .'</p></li>';
}
?>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>