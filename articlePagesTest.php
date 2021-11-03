<!-- Head PHP contains the html head as well as the webpages header-->
<?php
require 'head.php';
?>

<!--contains the main navigation of the page and the page banner -->
<!--This is seperate from the head.php file to make the navigation easier to improve in the future -->
<?php
require 'nav.php';
?>

<article>
    <h1>Article Title</h1>
    <em>Article Date</em>
    <p>Articles Content</p>


    <h3>Comments</h3>
    <p>Comment content placeholder</p>
<form>

<!--needs to be wrapped in a php if for if the user is logged in-->
    <p>Please Leave a Comment Below:</p>

    <label>Comment</label> <textarea name = "commentText"></textarea>
    <input type="submit" name="submit" value="Submit" method = "POST" />
</form>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>