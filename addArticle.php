
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
	<p>Add an Article:</p>

		<label>Title</label> <input name = "title" type="text" required />
		<label>Content</label> <textarea name = "content" required></textarea>
		<label>Category<label><select name="category" required>
  									<option value="test">Test</option>
  									<option value="test">Test</option>
  									<option value="test">Test</option>
  									<option value="test">Test</option>
								</select>

		<input type="submit" name="submit" value="Submit" />
</form>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>