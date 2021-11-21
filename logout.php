<?php
session_start();
$title = 'Northampton News - Log Out';
require '../head.php';
require '../nav.php';
require '../databaseJoin.php';

unset($_SESSION['loggedin']);
unset($_SESSION['adminloggedin']);
echo '<p>You Have Been Logged Out</p>';
?>

<!-- contains the page footer and the closing html -->
<?php
require '../foot.php';
?>