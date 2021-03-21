<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$db = "db_empresas";

$pdo = new PDO("mysql:dbname=".$db."; host=".$localhost, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);