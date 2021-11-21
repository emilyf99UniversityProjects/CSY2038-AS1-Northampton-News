<?php
    //Below is the code that is needed to connect the .php files to the database
    $server = 'mysql';
    $username = 'student';
    $password = 'student';
    
    //schema name is assigned to match the briefs requirements
    $schema = 'assignment1';
    $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>