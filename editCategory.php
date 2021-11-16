
<!-- Head PHP contains the html head as well as the webpages header-->
<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<!-- Code for Side Bar Navigation (remove when not needed) -->
<?php
$title = 'NN - Edit Category';
require 'head.php';
require 'nav.php';
require 'sideNavBar.php';
require 'databaseJoin.php';
?>

<article>
<?php

if (isset($_POST['submit'])) {
    $stmt = $pdo-> prepare('UPDATE category SET name=:newName WHERE name=:oldName');

    unset($_POST['submit']);
    $stmt ->execute($_POST);
        echo '<p>Category Edited</p>';
}
else if(isset($_GET['name'])) {

$selectName = $pdo->prepare('SELECT * FROM category WHERE name = :name');
    $value = [
            'name' => $_GET['name']
    ];

        $selectName -> execute($value);
        $category = $selectName->fetch();
        
?>


<form action="editCategory.php" method= "POST">
    <p>Edit Category:</p>

    <label>Name</label> <input type="text" name = "newName" value= "<?php echo $category['name']; ?>" required />
    <input type = "hidden" name = "oldName" value = "<?php echo $category['name']; ?>" required/>
    <input type="submit" name="submit" value="Submit" />
</form>

<!-- contains the page footer and the closing html -->
<?php
}
require 'foot.php';
?>
