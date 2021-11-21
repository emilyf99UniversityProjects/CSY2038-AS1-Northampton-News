<?php
session_start();
/*The requires are used to generate the templates as well as connect to the database
These are not stored in the public directory as they user should not be able to directly access these*/
$title = 'NN - Add Article';
require '../head.php';
require '../nav.php';
require '../databaseJoin.php';

//The if statement below checks if an admin is logged in, the code for the page will only run if an admin is logged in
if(isset($_SESSION['adminloggedin'])) {

    /*the side bar require is not with the rest of the templates as access to this could 
    allow non-admins to get access to admin only areas */
    require '../sideNavBar.php';

	//When the submit button is clicked all the values entered are added as a new record to the database
	if(isset($_POST['submit'])) {
	//INSERT REFERENCES
	/*the three lines below are used to allow images to be added, there is a name, a temporary name as well as a folder variable.
	The folder variable is used to direct the added photos to the correct directory*/
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

	//The move_uploaded_file is to move the created image into the correct directory within the website
	move_uploaded_file($tempName, $folder);
    $stmt->execute($values);
	//Once the statement is executed and been successful the user is notified with a message that displays in a P tag
    echo '<p> Your Article Has Been Added </p>';
	}

	//if the submit button is not pressed the empty form is displayed
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
				/*The foreach loop is used to select all the category options that have been added to the site. 
				This ensures that articles can't be added to a category that doesn't exist */ 
				foreach ($results as $row) {
					echo '<option value ="'. $row['name'] . '">' . $row['name'] . '</option>';
				}
			echo '<input type="submit" name="submit" value="Submit" />
	</form>';  
	}
}
//if an admin is not logged in then error messages are echo'd asking for a admin log in to continue
else {
    echo '<h3>You need to be logged in as a Admin to access this page</h3>';
    echo '<h3>Please Log in as a Admin to try again</h3>';
}
require '../foot.php';
?>