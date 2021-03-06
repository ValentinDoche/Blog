<?php
define('HOST', 'localhost');
define('USER', 'user');
define('PASSWORD', 'password');
define('BDD', 'database');
try{
    $pdo = new PDO("mysql:host=".HOST.";dbname=".BDD, USER, PASSWORD);
} catch (PDOException $e){
    print "erreur !! : " . $e->getMessage()  . "<br>"; die();
}
