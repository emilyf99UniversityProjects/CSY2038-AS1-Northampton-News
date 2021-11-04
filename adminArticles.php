
<!-- Head PHP contains the html head as well as the webpages header-->
<?php
require 'head.php';
?>

<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
require 'nav.php';
?>

<article>
	<div>
		<a href = "addArticle.php">Add a New Article</a>
	</div>

	<div>
		<p>test article</p>
		<p><a href = "editArticle.php"> Edit Article </a></p>
		<p><a href = "deleteArticle.php"> Delete Article</a></p>
	</div>


<!-- each article must have a link to edit or delete it. there must be a link to add a new article -->
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>