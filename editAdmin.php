<?php
session_start();
$title = 'NN - Edit Admin';
require 'head.php';
require 'nav.php';
require 'sideNavBar.php';
require 'databaseJoin.php';

if (isset($_POST['submit'])) {
    $stmt = $pdo-> prepare('UPDATE admin SET username = :username, firstname = :firstname, surname = :surname, email = :email, password = :password 
							WHERE email = :email');

    unset($_POST['submit']);
    $stmt ->execute($_POST);
        echo '<p>Admin Edited</p>';
}
else if(isset($_GET['email'])) {

$selectAdmin = $pdo->prepare('SELECT * FROM admin WHERE email = :email');

    $value = [
			'email' => $_GET['email'],
    ];

        $selectAdmin -> execute($value);
        $admin = $selectAdmin->fetch();
     
?>


<form action="editAdmin.php" method= "POST">
    <p>Edit Admin Details:</p>

		<label>Username</label>
		<input type="text" name = "username" value = "<?php echo $admin['username']; ?>" required />
		<label>Firstname</label>
		<input type="text" name = "firstname" value = "<?php echo $admin['firstname']; ?>" required />
		<label>Surname</label>
		<input type="text" name = "surname" value = "<?php echo $admin['surname']; ?>" required />
		<label>Email</label>
		<input type="text" name = "email" value = "<?php echo $admin['email']; ?>" required />
		<input type="submit" name="submit" value="Submit" />
</form>
<!-- contains the page footer and the closing html -->
<?php
}
require 'foot.php';
?>