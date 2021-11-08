
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
$title = 'NN - Add Article';
require 'head.php';
require 'nav.php';
require 'sideNavBar.php';
require 'databaseJoin.php';
?>

<?php
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('INSERT INTO article(title, content, category, publishDate) 
                                       VALUES(:title, :content, :category, :publishDate)
    ');

    $values = [
    'title' => $_POST['title'],
	'content' => $_POST['content'],
	'category' => $_POST['category'],
	'publishDate' => $_POST['publishDate']
    ];

    $stmt->execute($values);
    echo '<p> Your Article Has Been Added </p>';
}

else {
    echo '<article>
	<form action="addArticle.php" method="POST">
		<p>Add an Article:</p>
	
			<label>Title</label> <input name = "title" type="text" required />
			<label>Publish Date, Please write in the following format YYYY-MM-DD</label> <input name = "publishDate" type = "text" required />
			<label>Content</label> <textarea name = "content" required> </textarea>
			<label>Category<label> <select name = "category" required />';

			$results = $pdo->query('SELECT * FROM category');

				foreach ($results as $row) {
					echo '<option value ="'. $row['name'] . '">' . $row['name'] . '</option>';
				}
			echo '<input type="submit" name="submit" value="Submit" />
	</form>';  
}
?>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>