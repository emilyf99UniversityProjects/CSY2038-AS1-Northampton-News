<?php
session_start();
if( isset($_SESSION['loggedin']) && !$_SESSION['loggedin']  ) {
    header('location: login.php');
  }
  if( isset($_SESSION['admin']) && !$_SESSION['admin']  ) {
    header('location: login.php');
  }
$title = 'NN - Delete Admin';
require '../head.php';
require '../nav.php';
require '../sideNavBar.php';
require '../databaseJoin.php';
?>
<article>
<?php
if(isset($_GET['email'])) {
    $removeAdmin = $pdo->prepare('DELETE FROM admin WHERE email= :email');
    $removeAdmin ->execute($_GET);

echo '<p>Admin Deleted</p>';
}
require '../foot.php';
?>