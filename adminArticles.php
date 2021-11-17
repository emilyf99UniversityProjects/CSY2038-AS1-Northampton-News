<?php
session_start();
$title = 'NN - Manage Articles';
require 'head.php';
require 'nav.php';
require 'sideNavBar.php';
require 'databaseJoin.php';
?>

<article>
	<div>
		<a href = "addArticle.php">Add a New Article</a>
	</div>

	<div>
		<?php
		$results = $pdo->query('SELECT * FROM article ORDER BY publishDate DESC');

		foreach ($results as $row) {
			echo  '<li><h3>' . $row['title'] . '</h3>' . '<p> Publish Date: ' . $row['publishDate'] .'</p></li>';
			echo  '<p><a href = "editArticle.php?articleId=' . $row['articleId'] . '"> Edit Article </a></p>';
			echo  '<p><a href = "deleteArticle.php?articleId=' . $row['articleId'] . '"> Delete Article</a></p>';
		}
		?>
	</div>
<!-- each article must have a link to edit or delete it. there must be a link to add a new article -->
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>