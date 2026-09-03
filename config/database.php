<?php

 $host = 'localhost';
 $dbname = 'login_system';
 $username = 'sofiittaa';
$password = 'sofi123.20';

try {
   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username , $password );
 $pdo -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
} catch( PDOException $e) {
   die("Connection failed: " . $e -> getMessage ());
}

 ?>
