<?php
session_start();
/*The requires are used to generate the templates as well as connect to the database
These are not stored in the public directory as they user should not be able to directly access these*/
$title = 'Fotheby\'s  - Add Article';
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
	/*the three lines below are used to allow images to be added, there is a name, a temporary name as well as a folder variable.
	The folder variable is used to direct the added photos to the correct directory*/

	//Two sources were used for adding the images
	//Code for adding the images from https://www.geeksforgeeks.org/how-to-upload-image-into-database-and-display-it-using-php/
	//Code for adding the images from https://www.codegrepper.com/code-examples/php/php+upload+image+to+database
	$imageName = $_FILES['imageName']['name'];
	$tempName = $_FILES['imageName']['tmp_name'];
	$folder = "images/articles/" .$imageName;

    $stmt = $pdo->prepare('INSERT INTO article(pieceTitle, pieceDescription, categoryId, auctionDate, imageName, collectionTitle, lotNumber, dateOfProduction, estimate, dimensions, auctionPeriod, framed, artist, material, pieceWeight, medium, pieceType) 
                                       VALUES(:pieceTitle, :pieceDescription, :categoryId, :auctionDate, :imageName, :collectionTitle, :lotNumber, :dateOfProduction, :estimate, :dimensions, :auctionPeriod, :framed, :artist, :material, :pieceWeight, :medium, :pieceType)
    ');

    $values = [
    'pieceTitle' => $_POST['pieceTitle'],
	'pieceDescription' => $_POST['pieceDescription'],
	'categoryId' => $_POST['categoryId'],
	'auctionDate' => $_POST['auctionDate'],
	'imageName'=> $imageName,
	'collectionTitle' => $_POST['collectionTitle'],
	'lotNumber' => $_POST['lotNumber'],
	'dateOfProduction' => $_POST['dateOfProduction'],
	'estimate' => $_POST['estimate'],
	'dimensions' => $_POST['dimensions'],
	'auctionPeriod' => $_POST['auctionPeriod'],
	'framed' => $_POST['framed'],
	'artist' => $_POST['artist'],
	'material' => $_POST['material'],
	'pieceWeight' => $_POST['pieceWeight'],
	'medium' => $_POST['medium'],
	'pieceType' => $_POST['pieceType']
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
	
			<label>Piece Title</label> <input name = "pieceTitle" type="text" required />
			<label>Collection Title</label> <input name = "collectionTitle" type="text" required />
			<label>Lot Number</label> <input name = "lotNumber" type="text" required />
			<label>Artist</label> <input name = "artist" type="text" required />
			<label>Estimate</label> <input name = "estimate" type="text" required />
			<label>Dimensions</label> <input name = "dimensions" type="text" required />
			<label>Date of Production</label> <input name = "dateOfProduction" type = "text" required />
			<label>Auction Date</label> <input name = "auctionDate" type ="text" required />
			<label>Auction Period</label> <input name = "auctionPeriod" type="text" required />
			<label>Framed</label> <input name = "framed" type="text" required />
			<label>Material</label> <input name = "material" type="text" required />
			<label>Weight (KG\'s)</label> <input name = "pieceWeight" type="text" required />
			<label>Medium</label> <input name = "medium" type="text" required />
			<label>Piece Type</label> <input name = "pieceType" type="text" required />
			<label>Image (Please only Add PNGs to limit Website Size)</label> <input name = "imageName" type = "file" accept=".png" required/>
			<label>Piece Description</label> <textarea name = "pieceDescription" required> </textarea>
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