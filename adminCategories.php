<?php
session_start();
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
			echo  '<p><a href = "editCategory.php?name=' . $row['name'] . '"> Edit Category </a></p>';
			echo  '<p><a href = "deleteCategory.php?name=' . $row['name'] . '"> Delete Category</a></p>';
		}
	?>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>