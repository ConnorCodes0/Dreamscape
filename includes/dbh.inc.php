<?php

try {
    $ServerName = 'localhost';
    $username = 'root';
    $pass = '';
    $dbName = 'dreamscape';
    $charset = 'utf8mb4';

    $dsn = 'mysql:host=' . $ServerName . ';dbname=' . $dbName . ';charset=' . $charset;
    $pdo = new PDO($dsn, $username, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}