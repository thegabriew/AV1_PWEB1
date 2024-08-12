<?php
$host = 'localhost'; 
$db   = 'BIBLIOTECA';
$user = 'root'; 
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Banco conectado';
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>
