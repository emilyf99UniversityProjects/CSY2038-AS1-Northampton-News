
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
<form>
    <p>Log into your account:</p>

    <label>Email</label> <input type="text" />
    <label>Password</label> <input type="text" />

    <input type="submit" name="submit " value="Log In" />
</form>
<!-- contains the page footer and the closing html -->
<?php
require 'foot.php';
?>