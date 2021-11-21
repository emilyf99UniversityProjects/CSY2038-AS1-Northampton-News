<?php
session_start();
$title = 'NN - Edit Article';
require '../head.php';
require '../nav.php'; 
require '../sideNavBar.php';
require '../databaseJoin.php';
?>

<article>
<?php

if (isset($_POST['submit'])) {
	$imageName = $_FILES['imageName']['name'];
	$tempName = $_FILES['imageName']['tmp_name'];
	$folder = "images/articles/" .$imageName;

    $stmt = $pdo-> prepare('UPDATE article SET title = :title, imageName = :imageName, content = :content, categoryId = :categoryId, publishDate = :publishDate 
							WHERE articleId = :articleId');
	
	$value = [
		'articleId' => $_POST['articleId'],
		'title' => $_POST['title'],
		'imageName' => $imageName,
		'content' => $_POST['content'],
		'categoryId' => $_POST['categoryId'],
		'publishDate' => $_POST['publishDate']
	];

	move_uploaded_file($tempName, $folder);

    $stmt ->execute($value);
        echo '<p>Article Edited</p>';
}
else if(isset($_GET['articleId'])) {

$selectArticleFields = $pdo->prepare('SELECT * FROM article WHERE articleId = :articleId');
    $value = [
            'articleId' => $_GET['articleId']
    ];

        $selectArticleFields -> execute($value);
        $article = $selectArticleFields->fetch();
        
?>


<form action="editArticle.php" method= "POST" enctype = "multipart/form-data">
    <p>Edit Category:</p>

		<label>Title</label>
		
		<input type = "hidden" name = "articleId" value = "<?php echo $article['articleId']; ?>" required />
		
		<input type="text" name = "title" value = "<?php echo $article['title']; ?>" required />

		<label>Image (Please only Add PNGs to limit Website Size)</label>
		<input type = "file" name = "imageName" accept = ".png" required />

		<label>Publish Date, Please write in the following format YYYY-MM-DD</label> 
		<input type = "text" name = "publishDate" value = "<?php echo $article['publishDate']; ?>" required />
		
		
		<label>Content</label> 
		<textarea name = "content" required><?php echo $article['content']; ?></textarea>
		

		<label>Category<label> <select name = "categoryId" required >

			<?php $results = $pdo->query('SELECT * FROM category');

				foreach ($results as $row) {
					echo '<option value ="'. $row['name'] . '">' . $row['name'] . '</option>';
				}
			echo '<input type="submit" name="submit" value="Submit" />';
			?>
	</form>

			
<!-- contains the page footer and the closing html -->
<?php
}
require '../foot.php';
?>