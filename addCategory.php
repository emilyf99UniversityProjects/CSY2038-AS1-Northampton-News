<?php
session_start();
/*The requires are used to generate the templates as well as connect to the database
These are not stored in the public directory as they user should not be able to directly access these*/
$title = 'NN - Add Category';
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
        $stmt = $pdo->prepare('INSERT INTO category(name) 
                                       VALUES(:name)
    ');

    $values = [
    'name' => $_POST['name']
    ];

    $stmt->execute($values);
    //Once the statement is executed and been successful the user is notified with a message that displays in a P tag
    echo '<p> Your Category Has Been Added </p>';
    }

    //if the submit button is not pressed the empty form is displayed
    else {
        echo '<article>
	    <form action="addCategory.php" method="POST">
		    <p>Add a Category:</p>
			<label>Category Title</label> <input name = "name" type="text" required />
			<input type="submit" name="submit" value="Submit" />
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