
<!-- Head PHP contains the html head as well as the webpages header-->
<?php
require 'head.php';
?>

<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
require 'nav.php';
?>

<!-- Code for Side Bar Navigation (remove when not needed) -->
<?php 
require 'sideNavBar.php';
?>

<article>
<form>
	<p>Create a New Admin:</p>

    <label>User Name</label> <input type="text" required/>
    <label>Email address</label> <input type="text" required />
    <label>Password</label> <input type = "text" required>
	<input type="submit" name="Submit" value="Submit" />
</form>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>