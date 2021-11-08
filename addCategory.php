
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
$title = 'NN - Add Category';
require 'head.php';
require 'nav.php';
require 'sideNavBar.php';
require 'databaseJoin.php';
?>
<?php
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('INSERT INTO category(name) 
                                       VALUES(:name)
    ');

    $values = [
    'name' => $_POST['name']
    ];

    $stmt->execute($values);
    echo '<p> Your Category Has Been Added </p>';
}

else {
    echo '<article>
	<form action="addCategory.php" method="POST">
		<p>Add a Category:</p>
	
			<label>Category Title</label> <input name = "name" type="text" required />
			<input type="submit" name="submit" value="submit" />
	</form>';  
}
?>

<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>