<?php
session_start();
$title = 'NN - Add Article';
require '../head.php';
require '../nav.php';
require '../sideNavBar.php';
require '../databaseJoin.php';
?>

<?php
if(isset($_POST['submit'])) {
	$imageName = $_FILES['imageName']['name'];
	$tempName = $_FILES['imageName']['tmp_name'];
	$folder = "images/articles/" .$imageName;

    $stmt = $pdo->prepare('INSERT INTO article(title, content, categoryId, publishDate, imageName) 
                                       VALUES(:title, :content, :categoryId, :publishDate, :imageName)
    ');

    $values = [
    'title' => $_POST['title'],
	'content' => $_POST['content'],
	'categoryId' => $_POST['categoryId'],
	'publishDate' => $_POST['publishDate'],
	'imageName'=> $imageName
    ];

	move_uploaded_file($tempName, $folder);
    $stmt->execute($values);
    echo '<p> Your Article Has Been Added </p>';
}

else {
    echo '<article>
	<form action="addArticle.php" method="POST" enctype = "multipart/form-data">
		<p>Add an Article:</p>
	
			<label>Title</label> <input name = "title" type="text" required />
			<label>Image (Please only Add PNGs to limit Website Size)</label> <input name = "imageName" type = "file" accept=".png" required/>
			<label>Publish Date, Please write in the following format YYYY-MM-DD</label> <input name = "publishDate" type = "text" required />
			<label>Content</label> <textarea name = "content" required> </textarea>
			<label>Category<label> <select name = "categoryId" required />';

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
require '../foot.php';
?>