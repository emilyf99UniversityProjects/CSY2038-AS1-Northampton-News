
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
	<p>Edit an Admin:</p>

	<label>Name</label> <input name = "title" type="name" />
	<label>Email Address</label> <textarea name = "email" required></textarea>
	<label>Password<label> <textarea name = "password" required></textarea>

	<input type="submit" name="submit" value="Submit" />
</form>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>