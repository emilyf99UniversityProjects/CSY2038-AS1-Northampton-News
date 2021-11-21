<?php
session_start();
/*The requires are used to generate the templates as well as connect to the database
These are not stored in the public directory as they user should not be able to directly access these*/
$title = 'NN - Delete Admin';
require '../head.php';
require '../nav.php';
require '../databaseJoin.php';

//The if statement below checks if an admin is logged in, the code for the page will only run if an admin is logged in
if(isset($_SESSION['adminloggedin'])) {

	/*the side bar require is not with the rest of the templates as access to this could 
    allow non-admins to get access to admin only areas */
	require '../sideNavBar.php';

  echo '<article>';

  /*When the admin delete is clicked the email is used as the iD to ensure the right admin gets deleted*/
  if(isset($_GET['email'])) {
      $removeAdmin = $pdo->prepare('DELETE FROM admin WHERE email= :email');
      $removeAdmin ->execute($_GET);

  echo '<p>Admin Deleted</p>';
  }
}
//if an admin is not logged in then error messages are echo'd asking for a admin log in to continue
else {
    echo '<h3>You need to be logged in as a Admin to access this page</h3>';
    echo '<h3>Please Log in as a Admin to try again</h3>';
}
require '../foot.php';
?>