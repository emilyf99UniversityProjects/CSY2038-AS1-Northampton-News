<?php
session_start();
/*The requires are used to generate the templates as well as connect to the database
These are not stored in the public directory as they user should not be able to directly access these*/
$title = 'NN - Edit Article';
require '../head.php';
require '../nav.php'; 
require '../databaseJoin.php';

echo '<article>';

//The if statement below checks if an admin is logged in, the code for the page will only run if an admin is logged in
if(isset($_SESSION['adminloggedin'])) {

	/*the side bar require is not with the rest of the templates as access to this could 
    allow non-admins to get access to admin only areas */
	require '../sideNavBar.php';

	//if the submit button is clicked then the prepare statment updates all the fields in the form and replaces the old ones
	if (isset($_POST['submit'])) {


		//Two sources were used for adding the images
		//Code for adding the images from https://www.geeksforgeeks.org/how-to-upload-image-into-database-and-display-it-using-php/
		//Code for adding the images from https://www.codegrepper.com/code-examples/php/php+upload+image+to+database
			
		//the following three statments are used to get the article image name and location updated
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

		//this is needed in order to move the image file to the right folder and make it findable by the system
		move_uploaded_file($tempName, $folder);

    	$stmt ->execute($value);
		
		//this is to let the user know that their changes have been made
        echo '<p>Article Edited</p>';
	}
	
	/*if the submit is not pressed then this selects the relevant article using the articleId
	as well as selecting an empty form*/
	else if(isset($_GET['articleId'])) {

	$selectArticleFields = $pdo->prepare('SELECT * FROM article WHERE articleId = :articleId');
    	$value = [
            'articleId' => $_GET['articleId']
    	];

        $selectArticleFields -> execute($value);
        $article = $selectArticleFields->fetch();
        
?>
	<!--This displays the form needed to edit the admins, 
	the php echo statements are used to display the original values for that admin within the database,
	without these the form would be empty -->
	<form action="editArticle.php" method= "POST" enctype = "multipart/form-data">
    	<p>Edit Category:</p>

		<label>Title</label>
		
		<!--This value is hidden as the user should not be able to see any articleIds and cannot edit this,
		however this has to be on the form in order to match the database, if it does not match then the updates
		will not be added to the database -->
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

				/*The foreach loop is used to select all the category options that have been added to the site. 
				This ensures that articles can't be added to a category that doesn't exist */ 
				foreach ($results as $row) {
					echo '<option value ="'. $row['name'] . '">' . $row['name'] . '</option>';
				}
			echo '<input type="submit" name="submit" value="Submit" />';
			?>
	</form>

<?php
	}
}
//if an admin is not logged in then error messages are echo'd asking for a admin log in to continue
else {
    echo '<h3>You need to be logged in as a Admin to access this page</h3>';
    echo '<h3>Please Log in as a Admin to try again</h3>';
}
require '../foot.php';
?>