<?php
session_start();
$title = 'Northampton News - Home';
require '../head.php';
require '../nav.php';
require '../databaseJoin.php';

$results = $pdo->query('SELECT * FROM article ORDER BY publishDate DESC LIMIT 10');


foreach ($results as $row) {
	echo '<li><a class="articleLink" href="articlePages.php?articleId=' . $row['articleId'] . '">' .$row['title'] . '</a></li>';
	echo '<image src="images/articles/' . $row['imageName'] . '" width = 100px height = 100px >';
	echo '<p>Published ' .$row['publishDate'] . '</p>';
}


?>

<!-- contains the page footer and the closing html -->
<?php
require '../foot.php';
?>