
<!-- Head PHP contains the html head as well as the webpages header-->
<?php
require 'head.php';
?>

<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
require 'nav.php';
?>

<!-- Delete the <nav> element if the sidebar is not required -->
<nav>
	<ul>
		<li><a href="#">Sidebar</a></li>
		<li><a href="#">This can</a></li>
		<li><a href="#">Be removed</a></li>
		<li><a href="LogOut.php">Log Out</a></li>
	</ul>
</nav>

<article>
<form>
	<p>Add a Category:</p>

		<label>Category Title</label> <input type="text" required />
		<input type="submit" name="submit" value="Submit" />
</form>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>