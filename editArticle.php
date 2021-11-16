
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<!-- Code for Side Bar Navigation (remove when not needed) -->
<?php
$title = 'NN - Edit Article';
require 'head.php';
require 'nav.php'; 
require 'sideNavBar.php';
require 'databaseJoin.php';
?>

<article>
<?php

if (isset($_POST['submit'])) {
    $stmt = $pdo-> prepare('UPDATE article SET title = :title, content = :content, categoryId = :categoryId, publishDate = :publishDate 
							WHERE articleId = :articleId');

    unset($_POST['submit']);
    $stmt ->execute($_POST);
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


<form action="editArticle.php" method= "POST">
    <p>Edit Category:</p>

		<label>Title</label>
		
		<input type = "hidden" name = "articleId" value = "<?php echo $article['articleId']; ?>" required />
		
		<input type="text" name = "title" value = "<?php echo $article['title']; ?>" required />

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
require 'foot.php';
?>