<?php

$dsn = "mysql:host=localhost:3306;dbname=movie_database";
$dbuname = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuname, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo "connection failed" . $e->getMessage();
    exit;
}
