<?php
session_start();
$title = 'Northampton News - Register';
require '../head.php';
require '../nav.php';
require '../databaseJoin.php';
?>

<?php
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('INSERT INTO users(name, email, password) 
                                       VALUES(:name,:email,:password)
    ');

    $hashing = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $values = [
    'name' => $_POST['name'],
    'email'=> $_POST['email'],
    'password' => $hashing,
    ];

    $stmt->execute($values);
    echo '<p> Your Request Has Been Submitted </p>';
}

else {
    echo '<article>
    <form action="register.php" method="POST">
        <p>Register for an Account:</p>
    
        <label>User Name</label> <input name = "name" type="text" required/>
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