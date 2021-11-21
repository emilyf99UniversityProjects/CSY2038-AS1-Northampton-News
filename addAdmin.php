<?php
session_start();
$title = 'NN - Add Admin';
require '../head.php';
require '../nav.php';
require '../sideNavBar.php';
?>
<?php
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('INSERT INTO admin(username, email, password, firstname, surname) 
                                       VALUES(:username,:email,:password, :firstname, :surname)
    ');
    $hashing = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $values = [
    'username' => $_POST['username'],
    'email'=> $_POST['email'],
    'password' => $hashing,
    'firstname' => $_POST['firstname'],
    'surname' => $_POST['surname']
    ];

    $stmt->execute($values);
    echo '<p> Your Request Has Been Submitted </p>';
}

else {
    echo '<article>
    <form action="addAdmin.php" method="POST">
        <p>Create a New Admin:</p>

        <label>First Name</label> <input name = "firstname" type="text" required/>
        <label>Surname</label> <input name = "surname" type="text" required/>
        <label>User Name</label> <input name = "username" type="text" required/>
        <label>Email address</label> <input name = "email" type="text" required />
        <label>Password</label> <input name = "password" type = "password" required>
        <input type="submit" name="submit" value="submit" />
    </form>';
}
?>
<!-- contains the page footer and the closing html -->
<?php
require '../foot.php';
?>
