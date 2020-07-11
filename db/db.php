<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'events';
$connexion = mysqli_connect($host, $user, $pass, $db) or die($connexion->error);
mysqli_set_charset($connexion, 'UTF8');

?>