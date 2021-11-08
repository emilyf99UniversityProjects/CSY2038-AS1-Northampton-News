
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<!-- Code for Side Bar Navigation (remove when not needed) -->
<?php
$title = 'NN - Manage Categories';
require 'head.php';
require 'nav.php'; 
require 'sideNavBar.php';
require 'databaseJoin.php';
?>

<article>
	
	<div>
		<a href = "addCategory.php">Add a New Category</a>
	</div>
	<?php 
		$results = $pdo->query('SELECT * FROM category');

		foreach ($results as $row) {
			echo  '<li><p>' . $row['name'].'</p></li>';
			echo  '<p><a href = "editCategory.php"> Edit Category </a></p>';
			echo  '<p><a href = "deleteCategory.php"> Delete Category</a></p>';
		}
	?>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>