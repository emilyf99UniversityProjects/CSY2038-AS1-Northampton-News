<?php
    $title = 'Northampton News';
    require 'databaseJoin.php';
    require 'head.php';
    require 'nav.php';
	require  'goBack.php';

    if (isset($_GET['name'])) {
        echo '<h3>Title: ' . $_GET['name'] .  '</h3>';
       }
     
?>
<?php
    require 'foot.php';
?>