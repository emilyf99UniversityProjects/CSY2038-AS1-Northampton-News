
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
		<li><a href="#">When not needed</a></li>
	</ul>
</nav>

<article>
<div>
		<a href = "addAdmin.php">Add a New Admin</a>
	</div>

	<div>
		<p>test article</p>
		<p><a href = "editAdmin.php"> Edit Admin </a></p>
		<p><a href = "deleteAdmin.php"> Remove Admin</a></p>
	</div>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>