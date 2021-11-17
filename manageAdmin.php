<?php
session_start();
$title = 'NN - Manage Admin';
require 'head.php';
require 'nav.php';
require 'sideNavBar.php';
require 'databaseJoin.php';
?>

<article>
	<div>
		<a href = "addAdmin.php">Add a New Admin</a>
	</div>

	<div>
	<?php 
		$results = $pdo->query('SELECT * FROM users');

		foreach ($results as $row) {
			echo  '<li><p> Name: ' . $row['name'] . '</p><p> Email: ' .  $row['email'].'</p></li>';
			echo  '<p><a href = "editAdmin.php"> Edit Admin </a></p>';
			echo  '<p><a href = "deleteAdmin.php"> Delete Admin</a></p>';
		}
	?>
	</div>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>