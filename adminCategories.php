
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
		<a href = "addCategory.php">Add a New Category</a>
	</div>

	<div>
		<p>test article</p>
		<p><a href = "editCategory.php"> Edit Category </a></p>
		<p><a href = "deleteCategory.php"> Delete Category</a></p>
	</div>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>