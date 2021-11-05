<?php
    $server = 'mysql';
    $username = 'student';
    $password = 'student';
    
    
    $schema = 'NorthamptonNews';
    $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>