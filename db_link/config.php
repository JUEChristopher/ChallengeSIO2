<?php

$username = 'root';
$password = '';

//On établit la connexiontry{}



$pdo = new PDO("mysql:host=localhost;dbname=bdd_g2",$username,$password,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
?>