
<!-- IMPORTANT-->
<!--article pages is for the individual article itself-->
<!--PLEASE SEE THE TEMPLATE FILE-->
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
<form>
    <p>Forms are styled like so:</p>

    <label>Field 1</label> <input type="text" />
    <label>Field 2</label> <input type="text" />
    <label>Textarea</label> <textarea></textarea>
</form>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>