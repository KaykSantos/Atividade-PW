<?php

$db = "atividade_pw";
$host = "localhost";
$user = "root";
$pass = "";

$dns = "mysql:host=".$host."; dbname=".$db;
$pdo = new PDO($dns, $user, $pass);

?>