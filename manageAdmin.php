<?php
session_start();
$title = 'NN - Manage Admin';
require '../head.php';
require '../nav.php';
require '../sideNavBar.php';
require '../databaseJoin.php';
?>

<article>
	<div>
		<a href = "addAdmin.php">Add a New Admin</a>
	</div>

	<div>
<?php 
	$results = $pdo->query('SELECT * FROM admin');

	foreach ($results as $row) {
		echo  '<li><p> User Name: ' . $row['username'] . '</p>' . '<p> First Name: ' . $row['firstname'] . '</p>'; 
		echo  '<p> Surname: ' . $row['surname'] . '</p>'. '<p> Email: ' .  $row['email'].'</p></li>';
		echo  '<p><a href = "editAdmin.php?email=' . $row['email'] . '">  Edit Admin </a></p>';
		echo  '<p><a href = "deleteAdmin.php?email='. $row['email'] . '"> Delete Admin</a></p>';
		}
?>
	</div>

<?php
require '../foot.php';
?>