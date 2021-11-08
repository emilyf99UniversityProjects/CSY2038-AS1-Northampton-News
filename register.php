
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
$title = 'Northampton News - Register';
require 'head.php';
require 'nav.php';
require 'databaseJoin.php';
?>

<?php
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare('INSERT INTO users(name, email, password) 
                                       VALUES(:name,:email,:password)
    ');

    $values = [
    'name' => $_POST['name'],
    'email'=> $_POST['email'],
    'password' => $_POST['password']
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
require 'foot.php';
?>