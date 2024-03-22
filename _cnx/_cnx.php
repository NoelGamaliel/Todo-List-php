<?php

$dsn = 'mysql:host=localhost;dbname=todo;charset=utf8';
$user = 'root';
$pass = '';

try {
    $conn = new PDO($dsn, $user, $pass); //code...
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo  'Mistake to connect to databases...'; //throw $th;
}