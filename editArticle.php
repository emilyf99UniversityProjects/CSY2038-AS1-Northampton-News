
<!-- Head PHP contains the html head as well as the webpages header-->
<?php
$title = 'NN - Edit Article';
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
	<p>Edit an Article:</p>

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