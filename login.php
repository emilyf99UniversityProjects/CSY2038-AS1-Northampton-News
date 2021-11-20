<?php
session_start();
?>
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->

<?php
$title = 'Northampton News - Login';
require 'head.php';
require 'nav.php';
require 'databaseJoin.php';
?>

<article>
<?php
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');

    $values = [
        'email' => $_POST['email'],
    ];

    $stmt->execute($values);

    if($stmt->rowCount() > 0) {
        $user = $stmt ->fetch();

        if(password_verify($_POST['password'], $user['password'])) {
            $_SESSION['loggedin'] = $user['email'];
            echo '<p>You have been logged in </p>';
        }
    else {
        echo '<p>Sorry, Incorrect Username or Password</p>';
        }
    }   
}

if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('SELECT * FROM admin WHERE email = :email');

    $values = [
        'email' => $_POST['email'],
    ];

    $stmt->execute($values);

    if($stmt->rowCount() > 0) {
        $admin = $stmt ->fetch();

        if(password_verify($_POST['password'], $admin['password'])) {
            unset($_SESSION['loggedin']);
            $_SESSION['adminloggedin'] = $admin['email'];
            echo '<p>You have been logged in </p>';
        }
    else {
        echo '<p>Sorry, Incorrect Username or Password</p>';
        }
    }   
}

else { 
?>
    <form action="login.php" method="POST" >
    <p>Log into your account:</p>

    <label>Email</label> <input type="text" name = "email" />
    <label>Password</label> <input type="password" name = "password" />

    <input type="submit" name="submit" value="Log In" />
</form></article>

<!-- contains the page footer and the closing html -->
<?php
}
require 'foot.php';
?>